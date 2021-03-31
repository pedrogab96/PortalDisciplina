@extends('layouts.app')

@section('title')
    Cadastrar disciplina - Portal das Disciplinas IMD
@endsection

@section('robots')
    noindex, follow
@endsection

@section('scripts-head')
    <script src="{{asset('js/rating.js')}}" type="text/javascript"></script>
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

                <div class="form-group mt-3">
                    <label class="text-white" for="classificacao">
                        Classificações
                    </label>

                    <div class="form-row text-white align-items-center">
                        <div class="col-12" id="classification-1">
                            <span class="text-white mr-3">Apresentação de Trabalhos</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-1')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-1')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-1')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-1')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-1')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                        <div class="col-12" id='classification-2'>
                            <span class="text-white mr-3">Produção Textual</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-2')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-2')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-2')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-2')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-2')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                        <div class="col-12" id='classification-3'>
                            <span class="text-white mr-3">Lista de Exercícios</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-3')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-3')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-3')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-3')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-3')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                         <div class="col-12" id='classification-4'>
                            <span class="text-white mr-3">Discussão Social</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-4')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-4')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-4')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-4')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-4')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                        <div class="col-12" id='classification-5'>
                            <span class="text-white mr-3">Discussão Técnica</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-5')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-5')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-5')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-5')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-5')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                        <div class="col-12" id='classification-6'>
                            <span class="text-white mr-3">Abordagem Teórica</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-6')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-6')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-6')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-6')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-6')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                        <div class="col-12" id='classification-7'>
                            <span class="text-white mr-3">Abordagem Prática</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-7')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-7')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-7')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-7')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-7')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                        <div class="col-12" id='classification-8'>
                            <span class="text-white mr-3">Avaliação por Provas Escritas</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-8')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-8')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-8')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-8')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-8')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
                        </div>

                        <div class="col-12" id='classification-9'>
                            <span class="text-white mr-3">Avaliação por Atividades</span>
                            <a href="javascript:void(0)" class="s1" onclick="Avaliar(1, 'classification-9')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s2" onclick="Avaliar(2, 'classification-9')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s3" onclick="Avaliar(3, 'classification-9')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s4" onclick="Avaliar(4, 'classification-9')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <a href="javascript:void(0)" class="s5" onclick="Avaliar(5, 'classification-9')">
                                <img src="{{ asset('img/star0.png') }}"></a>

                            <span class="rating">0</span>
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
