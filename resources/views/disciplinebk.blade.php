@extends('layouts.app')

@section('content')
    <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>
    {{-- <h2 class="container-fluid text-white text-center">{{ $disciplines->name }}</h2> --}}

    

    <div class="row mt-3">
        <div class="col-12">
            
            <h3 class="text-white">Sinopse</h3>
            {{-- <textarea style="resize:none" class="form-control" id="sinopse" name="sinopse" rows="7" readonly> {{ $disciplines->description }}</textarea> --}}
            
            {{-- <div class="card">
                <div class="card-body">
                    <p class="card-text">{{ $disciplines->description }}</p>
                </div>
            </div> --}}

            {{-- <div class="d-block-flex py-2 px-lg-3 border bg-light">{{ $disciplines->description }}</div> --}}
            <div class="border border-white">
                <div class="text text-justify px-lg-3">{{ $disciplines->description }}</div>
            </div>
        </div>
    </div>

    {{-- @foreach ($disciplines as $discipline) --}}
    <div class="row mt-3">
        @if (isset($trailer->urlMedia))
            <div class="col">
                <h3 class="text-white">Trailer</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $trailer->urlMedia }}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-8">
                <h3 class="text-white">Trailer</h3>
                <img src="{{ asset('img/novideo1.png') }}" alt="Sem podcast">
            </div>
        @endif
        
        <div class="col-4">
            <h3 class="text-white">Classificação</h3>
            <img src=" {{asset('img/teste1.png')}} " alt="Classificação">
        </div>
    </div>    
    
        
    
    <div class="row mt-3">
        @if (isset($trailer->urlMedia))
            <div class="col-12 col-sm-6">
                <h3 class="text-white">Vídeo</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $trailer->urlMedia }}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-12 col-sm-6">
                <img src="{{ asset('img/novideo2.png') }}" alt="Sem podcast">
            </div>
        @endif
        {{-- <div class="col-12 col-sm-6">
            <h4 class="text-white">Vídeo</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $trailer->urlMedia }}" allowfullscreen></iframe>
            </div>
        </div> --}}

        @if (isset($podcast->urlMedia))
            <div class="col-12 col-sm-6">
                <h3 class="text-white">Podcast</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $podcast->urlMedia }}" allowfullscreen></iframe>
                </div>
            </div>
        @else
            <div class="col-12 col-sm-6">
                <img src="{{ asset('img/novideo2.png') }}" alt="Sem podcast">
            </div>
        @endif
        {{-- <div class="col-12 col-sm-6">
            <h4 class="text-white">Podcast</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{ $podcast->urlMedia }}" allowfullscreen></iframe>
            </div>
        </div> --}}
    </div>

    {{-- @endforeach --}}

    <div class="row mt-3">
        

        <div class="col-10">
            <h3 class="text-white">Obstáculos</h3>
            <div class="border border-white">
                <div class="text text-justify px-lg-3">{{ $disciplines->difficulties }}</div>
            </div>
        </div>

        <div class="col-2">
            <h3 class="text-white">Materiais</h3>
            <a href="https://drive.google.com/file/d/1lWOT7xJIA0NPxRygFmARudeycsl-fZaI/view?usp=sharing" class="text"> Aula teste
                <img src="{{ asset('img/Download1.png') }}" alt="Download">
            </a> <br>
            <a href="https://drive.google.com/drive/folders/1SDWpZ76tX2CEFxNzGjBxwuRIxTYTrnwh?usp=sharing" class="text"> Aulas teste
                <img src="{{ asset('img/Download1.png') }}" alt="Download">
            </a>
        </div>
    </div>

    <div class="row mt-3">
       {{--  
        <div class="col-3">
            <h4 class="text-white">Professor</h4>
            <img src="{{asset('img/user3.png')}}" alt="Imagem do Usuário">
        </div> --}}

        
        <div class="col-6">
            <h3 class="text-white">Sobre o professor</h3> 
            <div class="text">Texto para teste</div>
        </div>
        
        <div class="col-6">
            <h3 class="text-white">Email</h3> 
            <div class="text">Texto para teste</div>
        </div>
        
        {{-- <div class="col-12">
        <h4 class="text-white">Outras disciplinas do mesmo professor</h4> 
            <div class="text">Texto para teste</div>
        </div> --}}
    </div>

@endsection