@extends('layouts.app')

@section('title')
Cadastrar disciplina - Portal das Disciplinas IMD
@endsection

@section('robots')
noindex, follow
@endsection

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
  {{-- if para caso seja admin --}}
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
                        <div class="row">
                            <input type="text" hidden="true" value="1" id="classification-1" name="classifications[0]">
                            <input type="text" hidden="true" value="2" id="classification-2" name="classifications[1]">
                            <input type="text" hidden="true" value="3" id="classification-3" name="classifications[2]">
                            <input type="text" hidden="true" value="4" id="classification-4" name="classifications[3]">
                            <input type="text" hidden="true" value="5" id="classification-5" name="classifications[4]">
                            <input type="text" hidden="true" value="1" id="classification-6" name="classifications[5]">
                            <input type="text" hidden="true" value="2" id="classification-7" name="classifications[6]">
                            <input type="text" hidden="true" value="3" id="classification-8" name="classifications[7]">
                        </div>
                </div>

            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Vídeo</h4>
                    <div class="input-group mb-3 mt-1">
                        <div class="container1">
                            <button class="add_form_field1">Adicionar novo video &nbsp;
                                <span style="font-size:16px; font-weight:bold;">+ </span>
                            </button>
                        </div>
                    </div>

                    <h4 class="text-white">Podcast</h4>
                    <div class="input-group mb-3 mt-1">
                        <div class="container2">
                            <button class="add_form_field2">Adicionar novo podcast &nbsp;
                                <span style="font-size:16px; font-weight:bold;">+ </span>
                            </button>
                        </div>
                    </div>

                    <h4 class="text-white">Materiais</h4>
                    <div class="input-group mb-3 mt-1">
                        <div class="container3">
                            <button class="add_form_field3">Adicionar novo material &nbsp;
                                <span style="font-size:16px; font-weight:bold;">+ </span>
                            </button>
                        </div>
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

                </div>
            </div>
        </div>

        <div class="d-flex p-2 mb-5 justify-content-center">
            <button type="submit" class="btn btn-primary btn-sm mx-2">Salvar</button>
            <a href="{{ route("home") }}" class="btn btn-danger btn-sm mx-2" >
                Cancelar
            </a>
        </div>
    </form>
    <script>
        //adicionar campos de video dinamicamente
        $(document).ready(function() {
            var max_fields = 15;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field1");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div><input type="file" name="videos[]"/><a href="#" class="delete btn btn-danger">Deletar</a></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
            })
        });
        //adicionar campos de podcast dinamicamente
        $(document).ready(function() {
            var max_fields = 15;
            var wrapper = $(".container2");
            var add_button = $(".add_form_field2");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div><input type="file" name="podcasts[]"/><a href="#" class="delete btn btn-danger">Deletar</a></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
            })
        });
        $(document).ready(function() {
            var max_fields = 15;
            var wrapper = $(".container3");
            var add_button = $(".add_form_field3");

            var x = 1;
            $(add_button).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div><input type="file" name="materials[]"/><a href="#" class="delete btn btn-danger">Deletar</a></div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
            })
        });
    </script>

@endsection
