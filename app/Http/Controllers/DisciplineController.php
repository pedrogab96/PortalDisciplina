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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        /* Validacao */
        $regras = [
            'inputSubject' => 'required|max:40',
            'inputCode' => 'required|max:10',
            'sinopse' => 'required|max:5000',
            'obstaculos' => 'required|max:5000',
            'trailer' => 'required|max:250',
            'video' => 'required|max:250',
            'podcast' => 'required|max:250',
            'material' => 'required|max:250',
        ];

        $mensagens = [
            'required' => 'O atributo :attribute não pode estar em branco.',
            'inputSubject.max' => 'Máximo de 40 caracteres!',
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
        $trailer = new Medias();
        $video = new Medias();
        $podcast = new Medias();
        $material = new Medias();

        $discipline->name = $request->input('inputSubject');
        $discipline->code = $request->input('inputCode');
        $discipline->teacher = $request->input('teacher');
        $discipline->email = $request->input('teacherEmail');
        $discipline->description = $request->input('sinopse');
        $discipline->difficulties = $request->input('obstaculos');
        $discipline->user_id = 1; // TODO temporario enquanto nao tem usuario logado
        $discipline->save();

        $trailer->name = "Trailer de $discipline->name";
        $trailer->type = "video";
        $trailer->is_trailer = true;
        $trailer->url = $request->input('trailer');
        $trailer->discipline_id = $discipline->id;
        $trailer->save();

        $podcast->name = "Podcast de $discipline->name";
        $podcast->type = "podcast";
        $podcast->url = $request->input('podcast');
        $podcast->is_trailer = false;
        $podcast->discipline_id = $discipline->id;
        $podcast->save();

        $video->name = "Video de $discipline->name";
        $video->type = "video";
        $video->is_trailer = false;
        $video->url = $request->input('video');
        $video->discipline_id = $discipline->id;
        $video->save();
        
        $material->name = "Material de $discipline->name";
        $material->type = "material";
        $material->is_trailer = false;
        $material->url = $request->input('material');
        $material->discipline_id = $discipline->id;
        $material->save();

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
        //
    }

    public function search(Request $request){
        $search = $request->input('search');


        // $disciplines = Discipline::where('disciplines.name','like',"%$search%")
        //     ->join('users', 'users.id', '=', 'disciplines.user_id')
        //     ->select('disciplines.*','users.name as nameUser')
        //     ->orderBy('disciplines.name','asc')
        //     ->orderBy('nameUser','asc')
        //     ->get();

        $disciplines = Discipline::where('disciplines.name','like',"%$search%")
        ->join('users', 'users.id', '=', 'disciplines.user_id')
        ->leftJoin('medias','disciplines.id','=','medias.discipline_id')
        ->select('disciplines.*','users.name as nameUser','medias.url as urlMedia','medias.name as nameMedia','medias.type as mediaType')
        ->orderBy('disciplines.name','asc')
        ->orderBy('nameUser','asc')
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

}
