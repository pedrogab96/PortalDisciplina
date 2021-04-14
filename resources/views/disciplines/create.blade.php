@extends('layouts.app')

@section('title')
    Cadastrar disciplina - Portal das Disciplinas IMD
@endsection

@section('robots')
    noindex, follow
@endsection

@section('scripts-head')
    {{-- RATING PLUGIN --}}
    <link href="{{asset('css/star-rating.css')}}" media="all" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/star-rating.js')}}" type="text/javascript"></script>
@endsection

@section('content')
    <h4 class="text-white">Registrar nova disciplina</h4>
    <form action="{{ route("disciplinas.store") }}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-10">
                <label class="text-white" for="name">
                    Nome da disciplina
                </label>
                <input type="text"
                       required
                       class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}"
                       id="name"
                       name="name"
                       value="{{old('name')}}"
                       placeholder="Estrutura de dados básica I">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-2">
                <label class="text-white" for="code">
                    Código
                </label>
                <input type="text"
                       required
                       class="form-control {{ $errors->has('code') ? 'is-invalid' : ''}}"
                       id="code"
                       name="code"
                       value="{{old('code')}}"
                       placeholder="IMD0000">
                @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- mudar para admins --}}
        <div class="form-row">
            <div class="form-group col-md-8">
                <label class="text-white" for="professor-name">
                    Nome do professor que irá lecionar a disciplina
                </label>
                <input type="text"
                       required
                       class="form-control {{ $errors->has('professor-name') ? 'is-invalid' : ''}}"
                       id="professor-name"
                       name="professor-name"
                       value="{{old('professor-name')}}"
                       placeholder="Nome do professor que irá lecionar a disciplina">
                @error('professor-name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label class="text-white" for="professor-email">
                    E-mail do professor
                </label>
                <input type="text"
                       required
                       class="form-control {{ $errors->has('professor-email') ? 'is-invalid' : ''}}"
                       id="professor-email"
                       name="professor-email"
                       value="{{old('professor-email')}}"
                       placeholder="professor@gmail.com">
                @error('professor-email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-white" for="synopsis">
                        Sinopse
                    </label>
                    <textarea
                        class="form-control {{ $errors->has('synopsis') ? 'is-invalid' : ''}}"
                        id="synopsis"
                        name="synopsis"
                        rows="8"
                        placeholder="Explique aqui como funciona a disciplina">{{old('synopsis')}}</textarea>
                    @error('synopsis')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-3 ml-2">
                    <h3 class="text-white">Classificações</h3>
                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Apresentação de Trabalhos
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="apresentacao-trabalhos" name="apresentacao-trabalhos" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Produção Textual
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="producao-textual" name="producao-textual" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Lista de Exercícios
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="lista-exercicios" name="lista-exercicios" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Discussão Social
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="discussao-social" name="discussao-social" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Discussão Técnica
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="discussao-tecnica" name="discussao-tecnica" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Abordagem Teórica
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="abordagem-teorica" name="abordagem-teorica" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Abordagem Prática
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="abordagem-pratica" name="abordagem-pratica" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Avaliação por Provas Escritas
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="av-prova-escrita" name="av-prova-escrita" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mt-1">
                            <label class="text-white">
                                Avaliação por Atividades
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <input id="av-atividades" name="av-atividades" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="1" data-size="md" data-showcaption=false>
                            </div>
                        </div>
                    </div>

                    @error('classificacao')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-white" for="media-trailer">
                        Trailer da disciplina
                    </label>
                    <div class="input-group">
                        <input type="text"
                               class="form-control {{ $errors->has('media-trailer') ? 'is-invalid' : ''}}"
                               name="media-trailer"
                               id="media-trailer"
                               value="{{old('media-trailer')}}"
                               aria-describedby="basic-addon3"
                               placeholder="Link para vídeo no Youtube">
                        @error('media-trailer')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-white" for="media-video">
                        Vídeo
                    </label>
                    <div class="input-group">
                        <input type="text"
                               class="form-control {{ $errors->has('media-video') ? 'is-invalid' : ''}}"
                               name="media-video"
                               id="media-video"
                               value="{{old('media-video')}}"
                               aria-describedby="basic-addon3"
                               placeholder="Link para vídeo no Youtube">
                        @error('media-video')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-white" for="media-podcast">
                        Podcast
                    </label>
                    <div class="input-group">
                        <input type="text"
                               class="form-control {{ $errors->has('media-podcast') ? 'is-invalid' : ''}}"
                               name="media-podcast"
                               id="media-podcast"
                               value="{{old('media-podcast')}}"
                               aria-describedby="basic-addon3"
                               placeholder="Link para podcast no Youtube">
                        @error('media-podcast')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-white" for="media-material">
                        Materiais
                    </label>
                    <div class="input-group">
                        <input type="text"
                               class="form-control {{ $errors->has('media-material') ? 'is-invalid' : ''}}"
                               name="media-material"
                               id="media-material"
                               value="{{old('media-material')}}"
                               aria-describedby="basic-addon3"
                               placeholder="Link para arquivo no Google Drive">
                        @error('media-material')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="text-white" for="difficulties">
                        Obstáculos
                    </label>
                    <div class="input-group">
                        <textarea style="resize:none"
                                  class="form-control {{ $errors->has('difficulties') ? 'is-invalid' : ''}}"
                                  id="difficulties"
                                  name="difficulties"
                                  rows="4"
                                  placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente.">{{old('difficulties')}}</textarea>
                        @error('difficulties')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex p-2 mt-3 justify-content-center">
            <a href="{{ route('home') }}" class="btn btn-danger btn-sm">
                Cancelar
            </a>
            <button type="submit" class="btn btn-primary btn-sm ml-5">Registrar</button>
        </div>
    </form>

@endsection
