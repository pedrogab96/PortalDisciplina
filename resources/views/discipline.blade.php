@extends('layouts.app')

@section('title')
{{ $disciplines->name }} - Portal das Disciplinas IMD
@endsection

@section('description')
{{ $disciplines->name }} - {{ $disciplines->code }}, tutorado por {{ $disciplines->teacher }}. Clique para saiber mais.
@endsection

@section('content')

    <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>    

    <div class="row mt-3">
        <div class="col-12">
            <h3 class="text-white">Sinopse</h3>
                <div class="border border-info rounded">
                    <div class="bg-color4">
                        <div class="text-white text-justify px-lg-3"> {{ $disciplines->description }} </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="row mt-3">
        @if (isset($trailer->urlMedia))
            <div class="col-sm-8">
                <h3 class="text-white">Trailer</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $trailer->urlMedia }}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-sm-8">
                <h3 class="text-white">Trailer</h3>
                <img class="img-fluid" src="{{ asset('img/novideo1.png') }}" alt="Sem trailer">
            </div>
        @endif
        
        
        @if (isset($classificacao->urlMedia))
            <div class="col-sm-4 mt-3 mt-sm-0">
                <h3 class="text-white">Classificação</h3>
                <img class="img-fluid" src=" {{ $classificacao->urlMedia }} " alt="Classificação">
            </div>    
        @else
            <div class="col-sm-4 mt-3 mt-sm-0">
                <h3 class="text-white">Classificação</h3>
                <img class="img-fluid" src="{{ asset('img/novideo2.png') }}" alt="Sem classificação">
            </div>    
        @endif
    </div>    
    
        
    
    <div class="row mt-3">
        @if (isset($video->urlMedia))
            <div class="col-12 col-sm-6">
                <h3 class="text-white">Vídeo</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $video->urlMedia }}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-12 col-sm-6">
                <h3 class="text-white">Vídeo</h3>
                <img class="img-fluid" src="{{ asset('img/novideo2.png') }}" alt="Sem vídeo">
            </div>
        @endif

        @if (isset($podcast->urlMedia))
            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                <h3 class="text-white">Podcast</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $podcast->urlMedia }}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                <h3 class="text-white">Podcast</h3>    
                <img class="img-fluid" src="{{ asset('img/novideo2.png') }}" alt="Sem podcast">
            </div>
        @endif
       
    </div>

    <div class="row mt-3">
        

        <div class="col-sm-10">
            <h3 class="text-white">Obstáculos</h3>
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3">{{ $disciplines->difficulties }}</div>
                </div>
            </div>
        </div>

        @if (isset($materiais->urlMedia))
            <div class="col-sm-2 mt-3 mt-sm-0">
                <h3 class="text-white">Materiais</h3>
                <div class="d-flex align-center">
                    <a href="{{ $materiais->urlMedia }}" class="text">
                        {{-- <img src="{{ asset('img/Download2.png') }}" alt="Download"> --}}
                        <i class="fas fa-file-download fa-9x materiais-on"></i>
                    </a> <br>
                </div>
            </div>
        
        @else
            <div class="col-sm-2 mt-3 mt-sm-0">
                <h3 class="text-white">Materiais</h3>
                <a href="javascript:;" class="text">
                    {{-- <img class="img-fluid" src="{{ asset('img/Download2.png') }}" alt="Sem materiais"> --}}
                    {{-- <i class="fas fa-file-download fa-7x materiais-off"></i> --}}
                    <i class="fas fa-file-excel fa-9x materiais-off"></i>
                </a> <br>
            </div>
            
        @endif
    </div>

    <div class="row mt-3 mb-3">
        <div class="col-sm-6">
            <h3 class="text-white">Professor</h3> 
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3"> {{ $disciplines->teacher }} </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 mt-3 mt-sm-0">
            <h3 class="text-white">Email</h3> 
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3"> {{ $disciplines->email }} </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection