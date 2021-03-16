<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Discipline;
use App\Models\Media;
use \App\Models\Medias;
use App\Models\Professor;
use App\Models\User;
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

    //Objetos de Model
    private $objDiscipline;
    private $objUser;
    private $objProfessor;
    private $objMedia;

    public function __construct()
    {
        $this->objDiscipline = new Discipline();
        $this->objUser = new User();
        $this->objProfessor = new Professor();
        $this->objMedia = new Media();
    }

    public function index()
    {
        $disciplines = $this->objDiscipline->all();
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
        $user = $this->objUser->find($userId);
        $professor = $user->professor();
        $discipline = $this->objDiscipline;
        /* Validacao (refazer)*/
        $rules = [
            'inputSubject' => 'required|max:40',
            'inputCode' => 'required|max:10',
            'teacher' => 'required|max:70',
            'teacherEmail' => 'required|max:70',

            'sinopse' => 'max:5000',
            'classificacao' => 'max:5000',
            'obstaculos' => 'max:5000',
            'trailer' => 'max:250',
            'video' => 'max:250',
            'podcast' => 'max:250',
            'material' => 'max:250',
        ];
        $error_messages = [
            'required' => 'O atributo :attribute não pode estar em branco.',
            'inputSubject.max' => 'Máximo de 40 caracteres!',
            'teacher.max' => 'Máximo de 70 caracteres!',
            'teacherEmail.max' => 'Máximo de 70 caracteres!',
            'inputCode.max' => 'Máximo de 10 caracteres!',
            'sinopse.max' => 'Máximo de 5000 caracteres!',
            'classificacao.max' => 'Máximo de 5000 caracteres!',
            'obstaculos.max' => 'Máximo de 5000 caracteres!',
            'trailer.max' => 'Máximo de 250 caracteres!',
            'video.max' => 'Máximo de 250 caracteres!',
            'podcast.max' => 'Máximo de 250 caracteres!',
            'material.max' => 'Máximo de 250 caracteres!',
        ];
        $request->validate($rules, $error_messages);
        /* Registro no banco */
        $discipline->name = $request->input('inputSubject');
        $discipline->code = $request->input('inputCode');
        $discipline->synopsis = $request->input('sinopse');
        $discipline->difficulties = $request->input('obstaculos');
        $discipline->professor_id = $professor->id;
        $discipline->save();

        if($request->VideoMedias->count != 0){
            foreach($request->VideoMedias as $video){
                $newMedia = $this->objMedia;
                $newMedia->title = $video->title;
                $newMedia->type = "video";
                $video->file->store("videos");
                $newMedia->address = "/videos/"+$video->file->hash();
                $newMedia->is_trailer = $video->is_trailer;
                $newMedia->discipline_id = $discipline->id;
                $newMedia->save();
            }
        }
        if($request->PodcastMedias->count != 0){
            foreach($request->PodcastMedias as $podcast){
                $newMedia = $this->objMedia;
                $newMedia->title = $podcast->title;
                $newMedia->type = "podcast";
                $podcast->file->store("podcasts");
                $newMedia->address = "/podcasts/"+$podcast->file->hash();
                $newMedia->is_trailer = false;
                $newMedia->discipline_id = $discipline->id;
                $newMedia->save();
            }
        }
        if($request->MaterialMedias->count != 0){
            foreach($request->MaterialMedias as $material){
                $newMedia = $this->objMedia;
                $newMedia->title = $material->title;
                $newMedia->type = "material";
                $material->file->store("materials");
                $newMedia->address = "/materials/"+$material->file->hash();
                $newMedia->is_trailer = false;
                $newMedia->discipline_id = $discipline->id;
                $newMedia->save();
            }
        }

        if($request->filled('classificacao')){
            if($this->validDrive($request->input('classificacao'))){
                $classificacao = new Medias();
                $classificacao->name = "Classificações de $discipline->name";
                $classificacao->type = "classificacao";
                $classificacao->is_trailer = false;
                $classificacaoUrl = $this->getDriveIdFromUrl($request->input('classificacao'));
                $classificacao->url = "https://drive.google.com/uc?id=" . $classificacaoUrl;
                $classificacao->discipline_id = $discipline->id;
                $classificacao->save();
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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


        return view('discipline')
            ->with('disciplines',$discipline)
            ->with('trailer',$trailer)
            ->with('video',$video)
            ->with('podcast',$podcast)
            ->with('materiais',$materiais)
            ->with('classificacao',$classificacao);
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
