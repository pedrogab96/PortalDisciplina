@extends('layouts.app')

@section('content')

    <form action="{{ route("storeDisciplina") }}" method="post">
        @csrf
        <div class="form-row justify-content-md-center">
            <div class="form-group col-md-10">
                <h4 class="text-white">Nome da disciplina</h4>
                <input type="text" 
                    required
                    class="form-control {{ $errors->has('inputSubject') ? 'is-invalid' : ''}}" 
                    id="inputSubject" 
                    name="inputSubject" 
                    placeholder="ex: Estrutura de dados básica I">
                
                @if ($errors->has('inputSubject'))
                    <div class="invalid-feedback">
                        {{ $errors->first('inputSubject') }}
                    </div>
                @endif
            </div>

            <div class="form-group col-md-2">
                <h4 class="text-white">Código</h4>
                <input type="text" 
                    required
                    class="form-control {{ $errors->has('inputCode') ? 'is-invalid' : ''}}" 
                    id="inputCode" 
                    name="inputCode" 
                    placeholder="IMD0000">

                @if ($errors->has('inputCode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('inputCode') }}
                    </div>
                @endif
            </div>

            <div class="form-group col-md-8">
                <h4 class="text-white">Professor</h4>
                <input type="text" 
                    required
                    class="form-control {{ $errors->has('teacher') ? 'is-invalid' : ''}}" 
                    id="teacher" 
                    name="teacher" 
                    placeholder="Professor que irá lecionar a disciplina">

                @if ($errors->has('teacher'))
                    <div class="invalid-feedback">
                        {{ $errors->first('teacher') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group col-md-4">
                <h4 class="text-white">Email</h4>
                <input type="text" 
                    required
                    class="form-control {{ $errors->has('teacherEmail') ? 'is-invalid' : ''}}" 
                    id="teacherEmail" 
                    name="teacherEmail" 
                    placeholder="Email do professor responsável pela disciplina">

                @if ($errors->has('teacherEmail'))
                    <div class="invalid-feedback">
                        {{ $errors->first('teacherEmail') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Sinopse</h4>
                    <textarea style="resize:none" 
                        class="form-control {{ $errors->has('sinopse') ? 'is-invalid' : ''}}" 
                        id="sinopse" 
                        name="sinopse" 
                        rows="7" 
                        placeholder="Explique aqui como funciona a disciplina."></textarea>

                    @if ($errors->has('sinopse'))
                        <div class="invalid-feedback">
                            {{ $errors->first('sinopse') }}
                        </div>
                    @endif

                    <h4 class="text-white mt-3">Classificação</h4>
                    <div class="input-group mb-3 mt-1">
                        <input type="text" 
                            class="form-control {{ $errors->has('classificacao') ? 'is-invalid' : ''}}" 
                            name="classificacao" 
                            id="classificacao" 
                            aria-describedby="basic-addon3" 
                            placeholder="Link para imagem no Google Drive">

                        @if ($errors->has('classificacao'))
                            <div class="invalid-feedback">
                                {{ $errors->first('classificacao') }}
                            </div>
                        @endif
                    </div>
                </div>

                {{-- <div class="form-group">
                    <h4 class="text-white">Obstáculos</h4>
                    <textarea style="resize:none" class="form-control" id="obstaculos" name="obstaculos" rows="4" placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente."></textarea>
                    <form action="">
                        <div id="obstaculos">
                            <input type="text" name="obstaculos[]" placeholder="Obstáculo">
                            <button type="button" id="add-campo"> + </button>
                        </div>
                    </form>
                </div> --}}
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Trailer da disciplina</h4>
                    <div class="input-group mb-3 mt-1">
                        <input type="text" 
                            class="form-control {{ $errors->has('trailer') ? 'is-invalid' : ''}}" 
                            name="trailer" 
                            id="basic-url" 
                            aria-describedby="basic-addon3" 
                            placeholder="youtube.com/embed/...">

                        @if ($errors->has('trailer'))
                            <div class="invalid-feedback">
                                {{ $errors->first('trailer') }}
                            </div>
                        @endif
                    </div>

                    <h4 class="text-white">Vídeo</h4>
                    <div class="input-group mb-3 mt-1">
                        <input type="text" 
                            class="form-control {{ $errors->has('video') ? 'is-invalid' : ''}}" 
                            name="video" 
                            id="basic-url" 
                            aria-describedby="basic-addon3" 
                            placeholder="youtube.com/embed/...">

                        @if ($errors->has('video'))
                            <div class="invalid-feedback">
                                {{ $errors->first('video') }}
                            </div>
                        @endif
                    </div>
                    
                    <h4 class="text-white">Podcast</h4>
                    <div class="input-group mb-3 mt-1">
                        <input type="text" 
                            class="form-control {{ $errors->has('podcast') ? 'is-invalid' : ''}}" 
                            name="podcast" 
                            id="basic-url" 
                            aria-describedby="basic-addon3" 
                            placeholder="link para podcast em nuvem">

                        @if ($errors->has('podcast'))
                            <div class="invalid-feedback">
                                {{ $errors->first('podcast') }}
                            </div>
                        @endif
                    </div>

                    <h4 class="text-white">Materiais</h4>
                    <div class="input-group mb-3 mt-1">
                        <input type="text" 
                            class="form-control {{ $errors->has('materiais') ? 'is-invalid' : ''}}" 
                            name="materiais" 
                            id="basic-url" 
                            aria-describedby="basic-addon3" 
                            placeholder="link para materiais em nuvem">

                        @if ($errors->has('materiais'))
                            <div class="invalid-feedback">
                                {{ $errors->first('materiais') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col-12">
                <h4 class="text-white">Obstáculos</h4>
                <div class="form-row">
                    
                    <textarea style="resize:none" 
                        class="form-control {{ $errors->has('sinopse') ? 'is-invalid' : ''}}" 
                        id="obstaculos" 
                        name="obstaculos" 
                        rows="4" 
                        placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente."></textarea>

                    @if ($errors->has('obstaculos'))
                        <div class="invalid-feedback">
                            {{ $errors->first('obstaculos') }}
                        </div>
                    @endif
                    {{-- <form class="form-inline">
                        <div class="col-11" id="obstaculos">
                            <input type="text" class="form-control" name="obstaculos[]" placeholder="Obstáculo">
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-light mx-2" id="add-obstaculo"> + </button>
                        </div>    
                        

                    </form> --}}
                </div>
            </div>
        </div>

        {{-- <div class="form-row mt-3">
            <div class="col-12">
                <h4 class="text-white">Ementa</h4>
                <div class="form-row">
                    <form class="form-inline">
                        <div class="col-11" id="ementa">
                            <input type="text" class="form-control" name="ementa[]" placeholder="Tópico da ementa">
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-light mx-2" id="add-topico"> + </button>
                        </div>    
                    </form>
                </div>
            </div>
        </div> --}}

        <div class="d-flex p-2 mb-5 justify-content-center">
            <button type="submit" class="btn btn-primary btn-sm mx-2">Salvar</button>
            <a href="{{ route("home") }}" class="btn btn-danger btn-sm mx-2" >
                Cancelar
            </a>
        </div>
    </form>

    <script>
        $("#add-obstaculo").click(function() {
            $("#obstaculos").append('<input type="text" class="form-control mt-2" name="obstaculos[]" placeholder="Obstáculo">');
        });

        $("#add-topico").click(function() {
            $("#ementa").append('<input type="text" class="form-control mt-2" name="ementa[]" placeholder="Tópico da ementa">');
        });

    </script>
@endsection