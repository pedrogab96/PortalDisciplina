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
use App\Models\Professor;
use Exception;
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
                'professor',
                'medias',
            ])->orderBy('name','ASC')->get();

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
        $professors = new Professor();
        if(Auth::user()->isAdmin)
        {
            $professors = Professor::query()->orderBy('name','ASC')->get();
        }
        return view(self::VIEW_PATH . 'create',compact('professors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = Auth::user();
            $professor = new Professor();
            if($user->isAdmin)
            {
                $professor = Professor::query()->find($request->input('professor'));
            }
            $discipline = Discipline::create([
                'name' => $request->input('name'),
                'code' => $request->input('code'),
                'synopsis' => $request->input('synopsis'),
                'difficulties' => $request->input('difficulties'),
                'professor_id' => $user->isAdmin ? $professor->id : $user->professor->id
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
                'classification_id' => ClassificationID::METODOLOGIAS_CLASSICAS,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-metodologias-classicas') == null ? 0 : $request->input('classificacao-metodologias-classicas'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::METODOLOGIAS_ATIVAS,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-metodologias-ativas') == null ? 0 : $request->input('classificacao-metodologias-ativas'),
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
                'classification_id' => ClassificationID::AVALIACAO_PROVAS,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-av-provas') == null ? 0 : $request->input('classificacao-av-provas'),
            ]);

            ClassificationDiscipline::create([
                'classification_id' => ClassificationID::AVALIACAO_ATIVIDADES,
                'discipline_id' => $discipline->id,
                'value' => $request->input('classificacao-av-atividades') == null ? 0 : $request->input('classificacao-av-atividades'),
            ]);

            DB::commit();
            return redirect()->route("disciplinas.show", $discipline->id);
        } catch (\Exception $exception) {
            DB::rollBack();
            return dd($exception);
            // return redirect()->route("disciplinas.create")
            //     ->withInput();
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
                'faqs',
            ])
            ->findOrFail($id);

        if(Auth::user() !== null){
            $can = Auth::user()->canDiscipline($discipline);
            return view(self::VIEW_PATH . 'show', compact('discipline', 'can'));
        }

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
