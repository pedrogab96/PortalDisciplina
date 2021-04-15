<?php

namespace App\Http\Controllers;

use App\Enums\ClassificationID;
use App\Enums\MediaType;
use App\Http\Requests\Discipline\CreateRequest;
use App\Http\Requests\Discipline\StoreRequest;
use App\Models\ClassificationDiscipline;
use App\Services\Urls\GoogleDriveService;
use App\Services\Urls\YoutubeService;
use Illuminate\Http\Request;
use \App\Models\Discipline;
use \App\Models\Media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DisciplineController extends Controller
{
    const VIEW_PATH = 'disciplines.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $disciplines = Discipline::query()
            ->with([
                'medias',
            ])->get();

        return view(self::VIEW_PATH . 'index', compact('disciplines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param CreateRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(CreateRequest $request)
    {
        return view(self::VIEW_PATH . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $user = Auth::user();

        DB::beginTransaction();
        try {
            $discipline = Discipline::create([
                'name' => $request->input('name'),
                'code' => $request->input('code'),
                'teacher' => $request->input('professor-name'),
                'email' => $request->input('professor-email'),
                'synopsis' => $request->input('synopsis'),
                'difficulties' => $request->input('difficulties'),
                'professor_id' => $user->professor->id,
            ]);

            if ($request->filled('media-trailer') && YoutubeService::match($request->input('media-trailer'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-trailer'));
                Media::create([
                    'title' => 'Trailer de ' . $discipline->name,
                    'type' => MediaType::VIDEO,
                    'is_trailer' => true,
                    'url' => 'https://www.youtube.com/embed/' . $mediaId,
                    'discipline_id' => $discipline->id,
                ]);
            }

            if ($request->filled('media-podcast') && YoutubeService::match($request->input('media-podcast'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-podcast'));
                Media::create([
                    'title' => "Podcast de " . $discipline->name,
                    'type' => MediaType::PODCAST,
                    'url' => "https://www.youtube.com/embed/" . $mediaId,
                    'is_trailer' => false,
                    'discipline_id' => $discipline->id
                ]);
            }

            if ($request->filled('media-video') && YoutubeService::match($request->input('media-video'))) {
                $mediaId = YoutubeService::getIdFromUrl($request->input('media-video'));
                Media::create([
                    'title' => "Video de " . $discipline->name,
                    'type' => MediaType::VIDEO,
                    'is_trailer' => false,
                    'url' => "https://www.youtube.com/embed/" . $mediaId,
                    'discipline_id' => $discipline->id
                ]);
            }

            if ($request->filled('media-material') && GoogleDriveService::match($request->input('media-material'))) {
                $mediaId = GoogleDriveService::getIdFromUrl($request->input('media-material'));
                Media::create([
                    'title' => "Materiais de " . $discipline->name,
                    'type' => MediaType::MATERIAIS,
                    'is_trailer' => false,
                    'url' => "https://drive.google.com/uc?export=download&id=" . $mediaId,
                    'discipline_id' => $discipline->id
                ]);
            }
            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::APRESENTACAO_TRABALHOS,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-apresentacao-trabalhos') == null ? 0 : $request->input('classificacao-apresentacao-trabalhos'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::PRODUCAO_TEXTUAL,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-producao-textual') == null ? 0 : $request->input('classificacao-producao-textual'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::LISTA_EXERCICIOS,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-lista-exercicios') == null ? 0 : $request->input('classificacao-lista-exercicios'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::DISCUSSAO_SOCIAL,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-discussao-social') == null ? 0 : $request->input('classificacao-discussao-social'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::DISCUSSAO_TECNICA,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-discussao-tecnica') == null ? 0 : $request->input('classificacao-discussao-tecnica'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::ABORDAGEM_TEORICA,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-abordagem-teorica') == null ? 0 : $request->input('classificacao-abordagem-teorica'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::ABORDAGEM_PRATICA,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-abordagem-pratica') == null ? 0 : $request->input('classificacao-abordagem-pratica'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::AVALIACAO_PROVAS_ESCRITAS,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-av-prova-escrita') == null ? 0 : $request->input('classificacao-av-prova-escrita'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::AVALIACAO_ATIVIDADES,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-av-atividades') == null ? 0 : $request->input('classificacao-av-atividades'),
            ]);

            DB::commit();
            return redirect()->route('disciplinas.show', $discipline->id);
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('disciplinas.create')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $discipline = Discipline::query()
            ->with([
                'professor',
                'medias',
            ])
            ->findOrFail($id);
        /*
        $discipline = Discipline::where('disciplines.id','=', "$id")
        ->join('users', 'users.id', '=', 'disciplines.user_id')
        ->select('disciplines.*','users.name as nameUser')
        ->first();

        $trailer = Medias::where('medias.discipline_id','=',"$id")
        ->where('medias.type','=',"video")
        ->where('medias.is_trailer','=',"1")
        ->select('medias.*','medias.url as urlMedia')
        ->first();

        $video = Medias::where('medias.discipline_id','=',"$id")
        ->where('medias.type','=',"video")
        ->where('medias.is_trailer','=',"0")
        ->select('medias.*','medias.url as urlMedia')
        ->first();

        $podcast= Medias::where('medias.discipline_id','=',"$id")
        ->where('medias.type','=',"podcast")
        ->select('medias.*','medias.url as urlMedia')
        ->first();

        $materiais= Medias::where('medias.discipline_id','=',"$id")
        ->where('medias.type','=',"materiais")
        ->select('medias.*','medias.url as urlMedia')
        ->first();

        $classificacao= Medias::where('medias.discipline_id','=',"$id")
        ->where('medias.type','=',"classificacao")
        ->select('medias.*','medias.url as urlMedia')
        ->first();
        */

        return view(self::VIEW_PATH . 'show', compact('discipline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Discipline::query()
            ->where('id', $id)
            ->delete();

        return redirect()->route('index');

    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $disciplines = DB::table('disciplines')
            ->select('disciplines.*',
                (DB::raw("(SELECT medias.url FROM medias WHERE medias.discipline_id = disciplines.id and medias.type = 'video' and medias.is_trailer = '1' ) AS urlMedia")))
            ->where('disciplines.name', 'like', "%$search%")
            ->get();

        return view('disciplines-search')
            ->with('disciplines', $disciplines)
            ->with('search', $search);

    }

    public function mydisciplines()
    {


        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $id = Auth::id();
        $disciplines = Discipline::where('user_id', '=', $id)
            ->join('users', 'users.id', '=', 'disciplines.user_id')
            ->leftJoin('medias', 'disciplines.id', '=', 'medias.discipline_id')
            ->select('disciplines.*', 'users.name as nameUser')
            ->orderBy('disciplines.name', 'asc')
            ->orderBy('nameUser', 'asc')
            ->get();

        return view('my-disciplines')
            ->with('disciplines', $disciplines);
    }
}
