@extends('layouts.app')

@section('title')
    {{ $discipline->name }} - Portal das Disciplinas IMD
@endsection

@section('description')
    {{ $discipline->name }} - {{ $discipline->code }}, tutorado por {{ $discipline->professor->name }}. Clique para saiber mais.
@endsection

@section('content')
    <h2 class="container-fluid text-white text-center">{{ $discipline->name }} - {{ $discipline->code }}</h2>

    <div class="row mt-3">
        <div class="col-12">
            <h3 class="text-white">Sinopse</h3>
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3"> {{ $discipline->synopsis }} </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        @if (isset($discipline->mediaTrailer->first()->url))
            <div class="col-sm-8">
                <h3 class="text-white">Trailer</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $discipline->mediaTrailer->first()->url}}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-sm-8">
                <h3 class="text-white">Trailer</h3>
                <img class="img-fluid" src="{{ asset('img/novideo1.png') }}" alt="Sem trailer">
            </div>
        @endif

        @if (isset($discipline->scopeMediasByType("classificacao")->first()->url))
            <div class="col-sm-4 mt-3 mt-sm-0">
                <h3 class="text-white">Classificação</h3>
                <img class="img-fluid" src=" {{ $discipline->scopeMediasByType("classificacao")->first()->url }} " alt="Classificação">
            </div>
        @else
            <div class="col-sm-4 mt-3 mt-sm-0">
                <h3 class="text-white">Classificação</h3>
                <img class="img-fluid" src="{{ asset('img/novideo2.png') }}" alt="Sem classificação">
            </div>
        @endif
    </div>

    <div class="row mt-3">
        @if (isset($discipline->scopeMediasByType("video")->where("is_trailer","=","0")->first()->url))
            <div class="col-12 col-sm-6">
                <h3 class="text-white">Vídeo</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $discipline->scopeMediasByType("video")->where("is_trailer","=","0")->first()->url }}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-12 col-sm-6">
                <h3 class="text-white">Vídeo</h3>
                <img class="img-fluid" src="{{ asset('img/novideo2.png') }}" alt="Sem vídeo">
            </div>
        @endif

        @if (isset($discipline->scopeMediasByType("podcast")->first()->url))
            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                <h3 class="text-white">Podcast</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $discipline->scopeMediasByType("podcast")->first()->url}}" allowfullscreen></iframe>
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
                    <div class="text-white text-justify px-lg-3">{{ $discipline->difficulties }}</div>
                </div>
            </div>
        </div>

        @if (isset($discipline->scopeMediasByType("materiais")->first()->url))
            <div class="col-sm-2 mt-3 mt-sm-0">
                <h3 class="text-white">Materiais</h3>
                <div class="d-flex align-center">
                    <a href="{{ $discipline->scopeMediasByType("materiais")->first()->url}}" class="text">
                        <i class="fas fa-file-download fa-9x materiais-on"></i>
                    </a> <br>
                </div>
            </div>

        @else
            <div class="col-sm-2 mt-3 mt-sm-0">
                <h3 class="text-white">Materiais</h3>
                <a href="javascript:;" class="text">
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
                    <div class="text-white text-justify px-lg-3"> {{ $discipline->professor->name }} </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mt-3 mt-sm-0">
            <h3 class="text-white">Email</h3>
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3"> {{ $discipline->professor->public_email }} </div>
                </div>
            </div>
        </div>
    </div>
@endsection
