<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Discipline;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        $discipline = new Discipline();

        $discipline->name = $request->input('inputSubject');
        $discipline->code = $request->input('inputCode');
        $discipline->description = $request->input('sinopse');
        $discipline->difficulties = $request->input('obstaculos');
        $discipline->user_id = 1; // TODO temporario enquanto nao tem usuario logado
        $discipline->save();

        // return redirect('/');
        return redirect('/disciplina/novo');
        // return redirect('/disciplina');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        ->select('disciplines.*','users.name as nameUser')
        ->orderBy('disciplines.name','asc')
        ->orderBy('nameUser','asc')
        ->get();

        
        
        return view('disciplines-search')
                ->with('disciplines',$disciplines)
                ->with('search',$search);

    }

}
