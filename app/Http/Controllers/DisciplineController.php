<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Discipline;
use \App\Models\Medias;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $disciplines = Discipline::select('select * from disciplines');

        //Ajustar isso para quando estiver o campo no banco de dados para a verificação de trailer
        $disciplines = DB::table('disciplines')
            ->select('disciplines.*',
            (DB::raw("(SELECT medias.url FROM medias WHERE medias.discipline_id = disciplines.id and medias.type = 'video') AS urlMedia")))
            ->get();
        
        return view('disciplines-search')
            ->with('disciplines',$disciplines);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        return view('discipline-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Id do usuario logado */
        $userId = Auth::id();
        
        /* Validacao */
        $regras = [
            'inputSubject' => 'required|max:40',
            'inputCode' => 'required|max:10',
            'teacher' => 'required|max:70',
            'teacherEmail' => 'required|max:70',
            
            'sinopse' => 'max:5000',
            'obstaculos' => 'max:5000',
            'trailer' => 'max:250',
            'video' => 'max:250',
            'podcast' => 'max:250',
            'material' => 'max:250',
        ];

        $mensagens = [
            'required' => 'O atributo :attribute não pode estar em branco.',
            'inputSubject.max' => 'Máximo de 40 caracteres!',
            'teacher.max' => 'Máximo de 70 caracteres!',
            'teacherEmail.max' => 'Máximo de 70 caracteres!',
            'inputCode.max' => 'Máximo de 10 caracteres!',
            'sinopse.max' => 'Máximo de 5000 caracteres!',
            'obstaculos.max' => 'Máximo de 5000 caracteres!',
            'trailer.max' => 'Máximo de 250 caracteres!',
            'video.max' => 'Máximo de 250 caracteres!',
            'podcast.max' => 'Máximo de 250 caracteres!',
            'material.max' => 'Máximo de 250 caracteres!',
        ];

        $request->validate($regras, $mensagens);
        
        /* Registro no banco */
        $discipline = new Discipline();
        $discipline->name = $request->input('inputSubject');
        $discipline->code = $request->input('inputCode');
        $discipline->teacher = $request->input('teacher');
        $discipline->email = $request->input('teacherEmail');
        $discipline->description = $request->input('sinopse');
        $discipline->difficulties = $request->input('obstaculos');
        $discipline->user_id = $userId;
        $discipline->save();

        if($request->filled('trailer')){
            $trailer = new Medias();
            $trailer->name = "Trailer de $discipline->name";
            $trailer->type = "video";
            $trailer->is_trailer = true;
            $trailerUrl = $this->getYoutubeIdFromUrl($request->input('trailer'));
            $trailer->url = "https://www.youtube.com/embed/" . $trailerUrl;
            $trailer->discipline_id = $discipline->id;
            $trailer->save();
        }

        if($request->filled('podcast')){
            $podcast = new Medias();
            $podcast->name = "Podcast de $discipline->name";
            $podcast->type = "podcast";
            $podcastUrl = $this->getYoutubeIdFromUrl($request->input('podcast'));
            $podcast->url = "https://www.youtube.com/embed/" . $podcastUrl;
            $podcast->is_trailer = false;
            $podcast->discipline_id = $discipline->id;
            $podcast->save();
        }

        if($request->filled('video')){
            $video = new Medias();
            $video->name = "Video de $discipline->name";
            $video->type = "video";
            $video->is_trailer = false;
            $videoUrl = $this->getYoutubeIdFromUrl($request->input('video'));
            $video->url = "https://www.youtube.com/embed/" . $videoUrl;
            $video->discipline_id = $discipline->id;
            $video->save();
        }
        
        if($request->filled('materiais')){
            $materiais = new Medias();
            $materiais->name = "Materiais de $discipline->name";
            $materiais->type = "materiais";
            $materiais->is_trailer = false;
            $materiaisUrl = $this->getDriveIdFromUrl($request->input('materiais'));
            $materiais->url = "https://drive.google.com/uc?export=download&id=" . $materiaisUrl;
            $materiais->discipline_id = $discipline->id;
            $materiais->save();
        }

        // return redirect('/');
        return redirect('/disciplina/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        //FUNCIONANDO MAS PEGANDO SOMENTE O TRAILER
        
       /*  $discipline = Discipline::where('disciplines.id','=', "$id")
        ->join('users', 'users.id', '=', 'disciplines.user_id')
        ->leftJoin('medias','disciplines.id','=','medias.discipline_id')
        ->select('disciplines.*','users.name as nameUser','medias.url as urlMedia','medias.name as nameMedia','medias.type as mediaType')
        ->first();

        return view('discipline')
            ->with('disciplines',$discipline); */

        //OUTRAS OPÇÕES

        $discipline = Discipline::where('disciplines.id','=', "$id")
        ->join('users', 'users.id', '=', 'disciplines.user_id')
        ->select('disciplines.*','users.name as nameUser')
        ->first();

        $trailer = Medias::where('medias.discipline_id','=',"$id")
        ->where('medias.type','=',"video")
        ->select('medias.*','medias.url as urlMedia')
        ->first();

        $podcast= Medias::where('medias.discipline_id','=',"$id")
        ->where('medias.type','=',"podcast")
        ->select('medias.*','medias.url as urlMedia')
        ->first();


        return view('discipline')
            ->with('disciplines',$discipline)
            ->with('trailer',$trailer)
            ->with('podcast',$podcast);



        //dd($discipline);

        /* $media = Medias::where('medias.discipline_id','=',"$id")
        ->where()
        ->leftJoin('medias','disciplines.id','=','medias.discipline_id')
        ->select('disciplines.*','medias.url as urlMedia','medias.name as nameMedia','medias.type as mediaType')
        ->first(); */

        
            //->with('medias', $media);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discipline = Discipline::find($id);
        $discipline->delete();
        return redirect()->route('index');

    }

    public function search(Request $request){
        $search = $request->input('search');


        // $disciplines = Discipline::where('disciplines.name','like',"%$search%")
        //     ->join('users', 'users.id', '=', 'disciplines.user_id')
        //     ->select('disciplines.*','users.name as nameUser')
        //     ->orderBy('disciplines.name','asc')
        //     ->orderBy('nameUser','asc')
        //     ->get();

        // $disciplines = Discipline::where('disciplines.name','like',"%$search%")
        // ->join('users', 'users.id', '=', 'disciplines.user_id')
        // ->leftJoin('medias','disciplines.id','=','medias.discipline_id')
        // ->select('disciplines.*','users.name as nameUser','medias.url as urlMedia','medias.name as nameMedia','medias.type as mediaType')
        // ->orderBy('disciplines.name','asc')
        // ->orderBy('nameUser','asc')
        // ->get();

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
     * Baseado em 
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

    // TODO
    public function getDriveIdFromUrl($url) {
        $parts = explode("/", $url);
        if(isset($parts[5])) {
            return $parts[5];
        }

        return false;
    }

}
