<?php

namespace App\Http\Controllers;

use App\Models\ClassificationDiscipline;
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
    private $objClassificationDiscipline;

    public function __construct()
    {
        $this->objDiscipline = new Discipline();
        $this->objUser = new User();
        $this->objProfessor = new Professor();
        $this->objMedia = new Media();
        $this->objClassificationDiscipline = new ClassificationDiscipline();
    }

    public function index()
    {
        $disciplines = new Discipline();
        $disciplines = $disciplines->all();
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
        $professor = new User();
        $professor = $professor->find(Auth::id())->professor();
        return view('discipline-new')->with('professor',$professor);
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
        $professor = $this->objUser->find(Auth::id())->professor();
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
        // disciplina
        $discipline = Discipline::create([
            'name' => $request->input('inputSubject'),
            'code' => $request->input('inputCode'),
            'synopsis' => $request->input('sinopse'),
            'difficulties' => $request->input('obstaculos'),
           'professor_id' => $professor->id
        ]);
        // videos
        if($request->VideoMedias->count > 0){
            foreach($request->VideoMedias as $video){
                $video->file->store("videos");
                $newMedia = Media::create([
                    'title' => $video->title,
                    'type' => "video",
                    'url' => "/videos/"+$video->file->hash(),
                    'is_trailer' => $video->is_trailer,
                    'discipline_id' => $discipline->id
                ]);
            }
        }
        // podcasts
        if($request->PodcastMedias->count > 0){
            foreach($request->PodcastMedias as $podcast){
                $podcast->file->store("podcasts");
                $newMedia = Media::create([
                    'title' => $podcast->title,
                    'type' => "podcast",
                    'url' => "/podcasts/"+$podcast->file->hash(),
                    'is_trailer' => $podcast->is_trailer,
                    'discipline_id' => $discipline->id
                ]);
            }
        }
        // materiais
        if($request->MaterialMedias->count != 0){
            foreach($request->MaterialMedias as $material){
                $material->file->store("materiais");
                $newMedia = Media::create([
                    'title' => $material->title,
                    'type' => "material",
                    'url' => "/materiais/"+$material->file->hash(),
                    'is_trailer' => $material->is_trailer,
                    'discipline_id' => $discipline->id
                ]);
            }
        }
        // classificações
        if($request->classifications->count != 0){
            foreach($request->classifications as $classification){
                $newClassificationDiscipline = ClassificationDiscipline::create([
                   'classification_id' => $classification->id,
                   'discipline_id' => $classification->discipline_id,
                   'value' => $classification->value
                ]);
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
        $discipline = $this->objDiscipline->find($id);
        $videos = $this->objDiscipline->medias()->where("type","=","video");
        $trailer = $videos->where("is_trailer","=","1");
        $podcasts = $this->objDiscipline->medias()->where("type","=","podcast");
        $materials = $this->objDiscipline->medias()->where("type","=","material");
        $classifications= $this->objDiscipline->classifications();
        return view('discipline')
            ->with('disciplines',$discipline)
            ->with('trailer',$trailer)
            ->with('video',$videos)
            ->with('podcast',$podcasts)
            ->with('materiais',$materials)
            ->with('classificacao',$classifications);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discipline = $this->objDiscipline->find($id);
        $videos = $this->objDiscipline->medias()->where("type","=","video");
        $trailer = $videos->where("is_trailer","=","1");
        $podcasts = $this->objDiscipline->medias()->where("type","=","podcast");
        $materials = $this->objDiscipline->medias()->where("type","=","material");
        $classifications= $this->objDiscipline->classifications();
        return view('discipline')
            ->with('disciplines',$discipline)
            ->with('trailer',$trailer)
            ->with('video',$videos)
            ->with('podcast',$podcasts)
            ->with('materiais',$materials)
            ->with('classificacao',$classifications);
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
        $professor = $this->objUser->find(Auth::id())->professor();
        $discipline = $this->objDiscipline->find($id);
        $discipline->name = $request->input('inputSubject');
        $discipline->code = $request->input('inputCode');
        $discipline->synopsis = $request->input('sinopse');
        $discipline->difficulties = $request->input('obstaculos');
        $discipline->professor_id = $professor->id;
        $discipline->update();
        // videos
        if($request->VideoMedias->count != 0){
            foreach($request->VideoMedias as $video){
                $newMedia = $this->objMedia;
                $newMedia->title = $video->title;
                $newMedia->type = "video";
                $video->file->store("videos");
                $newMedia->address = "/videos/"+$video->file->hash();
                $newMedia->is_trailer = $video->is_trailer;
                $newMedia->discipline_id = $discipline->id;
                $newMedia->update();
            }
        }
        // podcasts
        if($request->PodcastMedias->count != 0){
            foreach($request->PodcastMedias as $podcast){
                $newMedia = $this->objMedia;
                $newMedia->title = $podcast->title;
                $newMedia->type = "podcast";
                $podcast->file->store("podcasts");
                $newMedia->address = "/podcasts/"+$podcast->file->hash();
                $newMedia->is_trailer = false;
                $newMedia->discipline_id = $discipline->id;
                $newMedia->update();
            }
        }
        // materiais
        if($request->MaterialMedias->count != 0){
            foreach($request->MaterialMedias as $material){
                $newMedia = $this->objMedia;
                $newMedia->title = $material->title;
                $newMedia->type = "material";
                $material->file->store("materials");
                $newMedia->address = "/materials/"+$material->file->hash();
                $newMedia->is_trailer = false;
                $newMedia->discipline_id = $discipline->id;
                $newMedia->update();
            }
        }
        // classificações
        if($request->classifications->count != 0){
            foreach($request->classifications as $classification){
                $newClassificationDiscipline = $this->objClassificationDiscipline;
                $newClassificationDiscipline->classification_id = $classification->classification_id;
                $newClassificationDiscipline->discipline_id = $classification->discipline_id;
                $newClassificationDiscipline->value = $classification->value;
                $newClassificationDiscipline->update();
            }
        }
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
}
