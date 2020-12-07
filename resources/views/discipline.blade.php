@extends('layouts.app')

@section('content')
    <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>
    {{-- <h2 class="container-fluid text-white text-center">{{ $disciplines->name }}</h2> --}}

    

    <div class="row mt-3">
        <div class="col">
            
            <h4 class="text-white">Sinopse</h4>
            {{-- <textarea style="resize:none" class="form-control" id="sinopse" name="sinopse" rows="7" readonly> {{ $disciplines->description }}</textarea> --}}
            {{-- <div class="card">
                <div class="card-body">
                    <p class="card-text">{{ $disciplines->description }}</p>
                </div>
            </div> --}}

            {{-- <div class="d-block-flex py-2 px-lg-3 border bg-light">{{ $disciplines->description }}</div> --}}
            <div class="text">{{ $disciplines->description }}</div>
        </div>
    </div>

    {{-- @foreach ($disciplines as $discipline) --}}
    <div class="row mt-3">
        <div class="col">
            <h4 class="text-white">Trailer</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $trailer->urlMedia }}" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-4">
            <h4 class="text-white">Classificação</h4>
            <p class="text"> Práticas</p>
        </div>
    </div>    
    
        
    
    <div class="row mt-3">
        <div class="col-12 col-sm-6">
            <h4 class="text-white">Vídeo</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $trailer->urlMedia }}" allowfullscreen></iframe>
            </div>
        </div>

    
        <div class="col-12 col-sm-6">
            <h4 class="text-white">Podcast</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $podcast->urlMedia }}" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    {{-- @endforeach --}}

    <div class="row mt-3">
        

        <div class="col-10">
            <h4 class="text-white">Obstáculos</h4>
            <div class="text">{{ $disciplines->difficulties }}</div>
        </div>

        <div class="col-2">
            <h4 class="text-white">Materiais</h4>
            <p class="text"> imagem - link</p>
        </div>
    </div>

    <div class="row mt-3">
       {{--  
        <div class="col-3">
            <h4 class="text-white">Professor</h4>
            <img src="{{asset('img/user3.png')}}" alt="Imagem do Usuário">
        </div> --}}

        
        <div class="col-6">
            <h4 class="text-white">Sobre o professor</h4> 
            <div class="text">Texto para teste</div>
        </div>
        
        <div class="col-6">
            <h4 class="text-white">Email</h4> 
            <div class="text">Texto para teste</div>
        </div>
        
        {{-- <div class="col-12">
        <h4 class="text-white">Outras disciplinas do mesmo professor</h4> 
            <div class="text">Texto para teste</div>
        </div> --}}
    </div>

@endsection