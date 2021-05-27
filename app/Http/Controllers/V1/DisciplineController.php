<?php

namespace App\Http\Controllers\V1;

use App\Enums\ClassificationID;
use App\Enums\MediaType;
use App\Http\Requests\Discipline\CreateRequest;
use App\Http\Requests\V1\Discipline\DestroyRequest;
use App\Http\Requests\V1\Discipline\StoreRequest;
use App\Http\Requests\V1\Discipline\ShowRequest;
use App\Http\Requests\V1\Discipline\UpdateRequest;
use App\Http\Requests\V1\Discipline\IndexRequest;
use App\Http\Resources\V1\DisciplineCollection;
use App\Http\Resources\V1\DisciplineResource;
use App\Models\ClassificationDiscipline;
use App\Services\Urls\GoogleDriveService;
use App\Services\Urls\YoutubeService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use \App\Models\Discipline;
use \App\Models\Media;
use App\Models\Professor;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

/**
 * Class DisciplineController
 * @package App\Http\Controllers\V1
 *
 * @group V1 Discipline
 */
class DisciplineController extends Controller
{
    /**
     * Index
     *
     * @param IndexRequest $request
     * @return DisciplineCollection
     * @unauthenticated
     * @responseFile storage/responses/disciplines.index.json
     */
    public function index(IndexRequest $request)
    {
        $queryBuilder = Discipline::query();

        if ($request->has('search')) {
            $search = '%' . $request->get('search') . '%';
            $queryBuilder->where('name', 'LIKE', $search)
                ->orWhere('code', 'LIKE', $search)
                ->orWhereHas('professor', function (Builder $subquery) use ($search) {
                    $subquery->where('name', 'LIKE', $search);
                });
        }

        $disciplines = $queryBuilder->with([
            'professor',
        ])->orderBy('name')
            ->paginate($request->get('per_page'));

        return new DisciplineCollection($disciplines);
    }

    /**
     * Store
     *
     * @param StoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @responseFile 201 storage/responses/disciplines.store.json
     */
    public function store(StoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $discipline_data = $request->only([
                'name',
                'code',
                'synopsis',
                'difficulties',
                'professor_id',
            ]);

            $discipline = Discipline::create($discipline_data);
            //TODO
            //Remodelação das mídias para usar API de download do youtube
            if ($request->filled('media-trailer') && YoutubeService::match($request->input('media-trailer'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-trailer'));
                $media_data = [
                    'title' => 'Trailer de ' . $discipline->name,
                    'type' => MediaType::VIDEO,
                    'is_trailer' => true,
                    'url' => 'https://www.youtube.com/embed/' . $mediaId,
                    'discipline_id' => $discipline->id
                ];
                Media::create($media_data);
            }

            if ($request->filled('media-podcast') && YoutubeService::match($request->input('media-podcast'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-podcast'));
                $media_data = [
                    'title' => 'Podcast de ' . $discipline->name,
                    'type' => MediaType::PODCAST,
                    'is_trailer' => false,
                    'url' => 'https://www.youtube.com/embed/' . $mediaId,
                    'discipline_id' => $discipline->id
                ];
                Media::create($media_data);
            }

            if ($request->filled('media-video') && YoutubeService::match($request->input('media-video'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-video'));
                $media_data = [
                    'title' => 'Vídeo de ' . $discipline->name,
                    'type' => MediaType::VIDEO,
                    'is_trailer' => false,
                    'url' => 'https://www.youtube.com/embed/' . $mediaId,
                    'discipline_id' => $discipline->id
                ];
                Media::create($media_data);
            }

            if ($request->filled('media-material') && GoogleDriveService::match($request->input('media-material'))) {
                $mediaId = GoogleDriveService::getIdFromUrl($request->input('media-material'));
                $media_data = [
                    'title' => "Materiais de " . $discipline->name,
                    'type' => MediaType::MATERIAIS,
                    'is_trailer' => false,
                    'url' => "https://drive.google.com/uc?export=download&id=" . $mediaId,
                    'discipline_id' => $discipline->id
                ];
                Media::create($media_data);
            }

            $classificationsMap = [
                ClassificationID::METODOLOGIAS_CLASSICAS => "classificacao-metodologias-classicas",
                ClassificationID::METODOLOGIAS_ATIVAS => "classificacao-metodologias-ativas",
                ClassificationID::DISCUSSAO_SOCIAL => "classificacao-discussao-social",
                ClassificationID::DISCUSSAO_TECNICA => "classificacao-discussao-tecnica",
                ClassificationID::ABORDAGEM_TEORICA => "classificacao-abordagem-teorica",
                ClassificationID::ABORDAGEM_PRATICA => "classificacao-abordagem-pratica",
                ClassificationID::AVALIACAO_PROVAS => "classificacao-av-provas",
                ClassificationID::AVALIACAO_ATIVIDADES => "classificacao-av-atividades"
            ];

            foreach ($classificationsMap as $classificationId => $inputValue) {
                $classification_data = [
                    'classification_id' => $classificationId,
                    'discipline_id' => $discipline->id,
                    'value' => $request->input($inputValue) == null ? 0 : $request->input($inputValue)
                ];
                ClassificationDiscipline::create($classification_data);
            }

            DB::commit();
            return $this->responseSuccess([
                'message' => 'Disciplina cadastrada com sucesso!',
                'data' => new DisciplineResource($discipline),
            ], Response::HTTP_CREATED);

        } catch (\Exception $exception) {
            DB::rollBack();
            //Qual código colocar aqui?
            return $this->responseError([
                'message' => 'Disciplina não pode ser cadastrada!',
                'data' => new DisciplineResource(null),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show
     *
     * @param ShowRequest $request
     * @param $id
     * @return DisciplineResource
     * @unauthenticated
     * @responseFile storage/responses/disciplines.show.json
     */
    public function show(ShowRequest $request, $id)
    {
        $discipline = Discipline::query()
            ->with([
                'professor',
                'medias',
                'faqs',
                'classificationsDisciplines.classification',
            ])
            ->findOrFail($id);

        return new DisciplineResource($discipline);
    }

    /**
     * Update
     *
     * @param UpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @responseFile storage/responses/disciplines.update.json
     */
    public function update(UpdateRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $discipline = Discipline::query()->find($id);
            $discipline_new_data = $request->only([
                'name',
                'code',
                'synopsis',
                'difficulties',
                'professor_id'
            ]);
            $discipline->update($discipline_new_data);

            if ($request->filled('media-trailer') && YoutubeService::match($request->input('media-trailer'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-trailer'));
                if (!$discipline->has_trailer_media) {
                    $media_data = [
                        'title' => 'Trailer de ' . $discipline->name,
                        'type' => MediaType::VIDEO,
                        'is_trailer' => true,
                        'url' => 'https://www.youtube.com/embed/' . $mediaId,
                        'discipline_id' => $discipline->id
                    ];
                    Media::create($media_data);
                } else {
                    $media_new_data = ['url' => "https://www.youtube.com/embed/" . $mediaId];
                    Media::query()->find($discipline->trailer->id)->update($media_new_data);
                }
            }


            if ($request->filled('media-podcast') && YoutubeService::match($request->input('media-podcast'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-podcast'));
                if (!$discipline->hasMediaOfType(\App\Enums\MediaType::PODCAST)) {
                    $media_data = [
                        'title' => 'Podcast de ' . $discipline->name,
                        'type' => MediaType::PODCAST,
                        'is_trailer' => false,
                        'url' => 'https://www.youtube.com/embed/' . $mediaId,
                        'discipline_id' => $discipline->id
                    ];
                    Media::create($media_data);
                } else {
                    $media_new_data = ['url' => "https://www.youtube.com/embed/" . $mediaId];
                    Media::query()->find($discipline->getMediaByType("podcast")->id)->update($media_new_data);
                }
            }

            if ($request->filled('media-video') && YoutubeService::match($request->input('media-video'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-video'));
                if (!$discipline->hasMediaOfType(\App\Enums\MediaType::VIDEO)) {
                    $media_data = [
                        'title' => 'Podcast de ' . $discipline->name,
                        'type' => MediaType::VIDEO,
                        'is_trailer' => false,
                        'url' => 'https://www.youtube.com/embed/' . $mediaId,
                        'discipline_id' => $discipline->id
                    ];
                    Media::create($media_data);
                } else {
                    $media_new_data = ['url' => "https://www.youtube.com/embed/" . $mediaId];
                    Media::query()->find($discipline->getMediaByType("video")->id)->update($media_new_data);
                }
            }

            if ($request->filled('media-material') && GoogleDriveService::match($request->input('media-material'))) {
                $mediaId = GoogleDriveService::getIdFromUrl($request->input('media-material'));
                if (!$discipline->hasMediaOfType(\App\Enums\MediaType::MATERIAIS)) {
                    $media_data = [
                        'title' => 'Materiais de ' . $discipline->name,
                        'type' => MediaType::MATERIAIS,
                        'is_trailer' => false,
                        'url' => "https://drive.google.com/uc?export=download&id=" . $mediaId,
                        'discipline_id' => $discipline->id
                    ];
                    Media::create($media_data);
                } else {
                    $media_new_data = ['url' => "https://drive.google.com/uc?export=download&id=" . $mediaId];
                    Media::query()->find($discipline->getMediaByType("material")->id)->update($media_new_data);
                }
            }

            $classificationsMap = [
                ClassificationID::METODOLOGIAS_CLASSICAS => "classificacao-metodologias-classicas",
                ClassificationID::METODOLOGIAS_ATIVAS => "classificacao-metodologias-ativas",
                ClassificationID::DISCUSSAO_SOCIAL => "classificacao-discussao-social",
                ClassificationID::DISCUSSAO_TECNICA => "classificacao-discussao-tecnica",
                ClassificationID::ABORDAGEM_TEORICA => "classificacao-abordagem-teorica",
                ClassificationID::ABORDAGEM_PRATICA => "classificacao-abordagem-pratica",
                ClassificationID::AVALIACAO_PROVAS => "classificacao-av-provas",
                ClassificationID::AVALIACAO_ATIVIDADES => "classificacao-av-atividades"
            ];

            foreach ($classificationsMap as $classificationId => $inputValue) {
                $classification_new_data = ['value' => $request->input($inputValue)];
                ClassificationDiscipline::query()->where('discipline_id', $discipline->id)
                    ->where('classification_id', $classificationId)->update($classification_new_data);
            }
            DB::commit();
            //que codigo colocar?
            return $this->responseSuccess([
                'message' => 'Disciplina editada com sucesso!',
                'data' => new DisciplineResource($discipline),
            ], Response::HTTP_CREATED);
        } catch (\Exception $exception) {
            DB::rollBack();
            //Qual código colocar aqui?
            return $this->responseError([
                'message' => 'Disciplina não pode ser editada!',
                'data' => new DisciplineResource(null),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Destroy
     *
     * @param DestroyRequest $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @responseFile storage/responses/disciplines.destroy.json
     */
    public function destroy(DestroyRequest $request, $id)
    {
        Discipline::query()
            ->where('id', $id)
            ->delete();

        return $this->responseSuccess([
            'message' => 'Disciplina apagada com sucesso!',
        ]);
    }
}
