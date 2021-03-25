<?php

namespace App\Http\Controllers;

use App\Http\Requests\Discipline\StoreRequest;
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view(self::VIEW_PATH . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        /* Id do usuario logado */
        $userId = Auth::id();

        DB::beginTransaction();
        try {
            /* Registro no banco */
            $discipline = Discipline::create([
                'name' => $request->input('inputSubject'),
                'code' => $request->input('inputCode'),
                'teacher' => $request->input('teacher'),
                'email' => $request->input('teacherEmail'),
                'description' => $request->input('sinopse'),
                'difficulties' => $request->input('obstaculos'),
                'professor_id' => $userId,
            ]);

            if($request->filled('trailer')){
                if($this->validYoutube($request->input('trailer'))){
                    $trailerUrl = $this->getYoutubeIdFromUrl($request->input('trailer'));
                    Media::create([
                    'title' => "Trailer de $discipline->name",
                    'type' => "video",
                    'is_trailer' => true,
                    'url' => "https://www.youtube.com/embed/" . $trailerUrl,
                    'discipline_id' => $discipline->id
                    ]);
                }
            }

            if($request->filled('podcast')){
                if($this->validYoutube($request->input('podcast'))){
                    $podcastUrl = $this->getYoutubeIdFromUrl($request->input('podcast'));
                    Media::create([
                        'title' => "Podcast de $discipline->name",
                        'type' => "podcast",
                        'url' => "https://www.youtube.com/embed/" . $podcastUrl,
                        'is_trailer' => false,
                        'discipline_id' => $discipline->id
                    ]);
                }
            }

            if($request->filled('video')){
                if($this->validYoutube($request->input('video'))){
                    $videoUrl = $this->getYoutubeIdFromUrl($request->input('video'));
                    Media::create([
                        'title' => "Video de $discipline->name",
                        'type' => "video",
                        'is_trailer' => false,
                        'url' => "https://www.youtube.com/embed/" . $videoUrl,
                        'discipline_id' => $discipline->id
                    ]);
                }
            }

            if($request->filled('materiais')){
                if($this->validDrive($request->input('materiais'))){
                    $materiaisUrl = $this->getDriveIdFromUrl($request->input('materiais'));
                    Media::create([
                        'title' => "Materiais de $discipline->name",
                        'type' => "materiais",
                        'is_trailer' => false,
                        'url' => "https://drive.google.com/uc?export=download&id=" . $materiaisUrl,
                        'discipline_id' => $discipline->id
                    ]);
                }
            }

            //todo: sistema de classificação
            if($request->filled('classificacao')){
                if($this->validDrive($request->input('classificacao'))){
                    $classificacaoUrl = $this->getDriveIdFromUrl($request->input('classificacao'));
                    Media::create([
                        'title' => "Classificações de $discipline->name",
                        'type' => "classificacao",
                        'is_trailer' => false,
                        'url' => "https://drive.google.com/uc?id=" . $classificacaoUrl,
                        'discipline_id' => $discipline->id,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('index');
        } catch (\Exception $exception) {
            DB::rollBack();
            dd($exception);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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

    public function search(Request $request){
        $search = $request->input('search');

        $disciplines = DB::table('disciplines')
            ->select('disciplines.*',
            (DB::raw("(SELECT medias.url FROM medias WHERE medias.discipline_id = disciplines.id and medias.type = 'video' and medias.is_trailer = '1' ) AS urlMedia")))
            ->where('disciplines.name','like',"%$search%")
            ->get();

        return view('disciplines-search')
                ->with('disciplines',$disciplines)
                ->with('search',$search);

    }

    public function mydisciplines(){


        if(!Auth::check()){
            return redirect()->route('login');
        }

        $id = Auth::id();
        $disciplines = Discipline::where('user_id','=',$id)
        ->join('users', 'users.id', '=', 'disciplines.user_id')
        ->leftJoin('medias','disciplines.id','=','medias.discipline_id')
        ->select('disciplines.*','users.name as nameUser')
        ->orderBy('disciplines.name','asc')
        ->orderBy('nameUser','asc')
        ->get();

        return view('my-disciplines')
            ->with('disciplines',$disciplines);
    }

    /**
     * Inspirado em
     * https://stackoverflow.com/questions/3392993/php-regex-to-get-youtube-video-id/3393008#3393008
    */
    public function getYoutubeIdFromUrl($url) {
        $parts = parse_url($url);
        if(isset($parts['query'])){
            parse_str($parts['query'], $qs);
            if(isset($qs['v'])){
                return $qs['v'];
            }else if(isset($qs['vi'])){
                return $qs['vi'];
            }
        }
        if(isset($parts['path'])){
            $path = explode('/', trim($parts['path'], '/'));
            return $path[count($path)-1];
        }
        return false;
    }

    /**
     * Inspirado em
     * https://stackoverflow.com/questions/19377262/regex-for-youtube-url
     * https://regexr.com/3dj5t
    */
    public function validYoutube($url) {
        $match = "#^(https?\:\/\/)?(www\.)?(youtube\.com|youtu\.?be)\/.+$#";

        if(preg_match($match, $url))
            return true;
        else
            return false;
    }

    public function getDriveIdFromUrl($url) {
        $parts = explode("/", $url);
        if(isset($parts[5])) {
            return $parts[5];
        }

        return false;
    }

    public function validDrive($url) {
        $match = "#https://drive\.google\.com/file/d/(.*?)/.*?\?usp=sharing#";

        if(preg_match($match, $url))
            return true;
        else
            return false;
    }

}
