@extends('layouts.app')

@section('content')

    {{-- Opção 1 Boa opção --}} 
    {{-- <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>    

    <div class="row mt-3">
        <div class="col-12">
            <h3 class="text-white">Sinopse</h3>
            <div class="border border-info">
                <div class="text-white text-justify px-lg-3">{{ $disciplines->description }}</div>
            </div>
        </div>
    </div>

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
       
    </div>

    <div class="row mt-3">
        

        <div class="col-10">
            <h3 class="text-white">Obstáculos</h3>
            <div class="border border-info">
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

        
        <div class="col-6">
            <h3 class="text-white">Sobre o professor</h3> 
            <div class="text">Texto para teste</div>
        </div>
        
        <div class="col-6">
            <h3 class="text-white">Email</h3> 
            <div class="text">Texto para teste</div>
        </div>
        
    </div> --}}

    {{-- ---------------------------------------------------------------------------------------------------------------------------------------------------- --}}

    {{-- Opção 2 --}}

    {{-- <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>    

    <div class="row mt-3">
        <div class="col-12">
            <h3 class="text-white">Sinopse</h3>
            
                <div class="border border-primary rounded">
                    <div class="bg-color1">
                        <div class="text-white text-justify px-lg-3"> {{ $disciplines->description }} </div>
                    </div>
                </div>
            
        </div>
    </div>

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
       
    </div>

    <div class="row mt-3">
        

        <div class="col-10">
            <h3 class="text-white">Obstáculos</h3>
            <div class="border border-secondary rounded">
                <div class="bg-color1">
                    <div class="text-white text-justify px-lg-3">{{ $disciplines->difficulties }}</div>
                </div>
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

    <div class="row mt-3 mb-3">

        
        <div class="col-6">
            <h3 class="text-white">Sobre o professor</h3> 
            <div class="border border-info rounded">
                <div class="bg-color1">
                    <div class="text-white text-justify px-lg-3"> Professor ou docente é uma pessoa que ensina ciência, arte, técnica ou outros conhecimentos. Para o exercício dessa profissão, requer-se qualificações académicas e pedagógicas, para que consiga transmitir/ensinar a matéria de estudo da melhor forma possível ao aluno. </div>
                </div>
            </div>
        </div>
        
        <div class="col-6">
            <h3 class="text-white">Email</h3> 
            <div class="border border-dark rounded">
                <div class="bg-color1">
                    <div class="text-white text-justify px-lg-3"> professor@mail.com </div>
                </div>
            </div>
        </div>
        
    </div> --}}

    {{-- ---------------------------------------------------------------------------------------------------------------------------------------------------- --}}

    {{-- Opção 3 --}}

    {{-- <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>    

    <div class="row mt-3">
        <div class="col-12">
            <h3 class="text-white">Sinopse</h3>
            
                <div class="border border-primary rounded">
                    <div class="bg-color2">
                        <div class="text-justify px-lg-3"> {{ $disciplines->description }} </div>
                    </div>
                </div>
            
        </div>
    </div>

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
       
    </div>

    <div class="row mt-3">
        

        <div class="col-10">
            <h3 class="text-white">Obstáculos</h3>
            <div class="border border-secondary rounded">
                <div class="bg-color2">
                    <div class="text-justify px-lg-3">{{ $disciplines->difficulties }}</div>
                </div>
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

    <div class="row mt-3 mb-3">

        
        <div class="col-6">
            <h3 class="text-white">Sobre o professor</h3> 
            <div class="border border-info rounded">
                <div class="bg-color2">
                    <div class="text-justify px-lg-3"> Professor ou docente é uma pessoa que ensina ciência, arte, técnica ou outros conhecimentos. Para o exercício dessa profissão, requer-se qualificações académicas e pedagógicas, para que consiga transmitir/ensinar a matéria de estudo da melhor forma possível ao aluno. </div>
                </div>
            </div>
        </div>
        
        <div class="col-6">
            <h3 class="text-white">Email</h3> 
            <div class="border border-dark rounded">
                <div class="bg-color2">
                    <div class="text-justify px-lg-3"> professor@mail.com </div>
                </div>
            </div>
        </div>
        
    </div> --}}

    {{-- ---------------------------------------------------------------------------------------------------------------------------------------------------- --}}

    {{-- Opção 4 --}}

    {{-- <h2 class="container-fluid text-white text-center">{{ $disciplines->name }} - {{ $disciplines->code }}</h2>    

    <div class="row mt-3">
        <div class="col-12">
            <h3 class="text-white">Sinopse</h3>
            
                <div class="border border-primary rounded">
                    <div class="bg-color3">
                        <div class="text-white text-justify px-lg-3"> {{ $disciplines->description }} </div>
                    </div>
                </div>
            
        </div>
    </div>

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
       
    </div>

    <div class="row mt-3">
        

        <div class="col-10">
            <h3 class="text-white">Obstáculos</h3>
            <div class="border border-secondary rounded">
                <div class="bg-color3">
                    <div class="text-white text-justify px-lg-3">{{ $disciplines->difficulties }}</div>
                </div>
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

    <div class="row mt-3 mb-3">

        
        <div class="col-6">
            <h3 class="text-white">Sobre o professor</h3> 
            <div class="border border-info rounded">
                <div class="bg-color3">
                    <div class="text-white text-justify px-lg-3"> Professor ou docente é uma pessoa que ensina ciência, arte, técnica ou outros conhecimentos. Para o exercício dessa profissão, requer-se qualificações académicas e pedagógicas, para que consiga transmitir/ensinar a matéria de estudo da melhor forma possível ao aluno. </div>
                </div>
            </div>
        </div>
        
        <div class="col-6">
            <h3 class="text-white">Email</h3> 
            <div class="border border-dark rounded">
                <div class="bg-color3">
                    <div class="text-white text-justify px-lg-3"> professor@mail.com </div>
                </div>
            </div>
        </div>
        
    </div> --}}

    {{-- ---------------------------------------------------------------------------------------------------------------------------------------------------- --}}

    {{-- Opção 5 Escolhida--}}

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
       
    </div>

    <div class="row mt-3">
        

        <div class="col-10">
            <h3 class="text-white">Obstáculos</h3>
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3">{{ $disciplines->difficulties }}</div>
                </div>
            </div>
        </div>

        <div class="col-2">
            <h3 class="text-white">Materiais</h3>
            <a href="https://drive.google.com/file/d/1lWOT7xJIA0NPxRygFmARudeycsl-fZaI/view?usp=sharing" class="text">
                <img src="{{ asset('img/Download2.png') }}" alt="Download">
            </a> <br>
            {{-- <a href="https://drive.google.com/drive/folders/1SDWpZ76tX2CEFxNzGjBxwuRIxTYTrnwh?usp=sharing" class="text"> Aulas teste
                <img src="{{ asset('img/Download1.png') }}" alt="Download">
            </a> --}}
        </div>
    </div>

    <div class="row mt-3 mb-3">

        
        <div class="col-6">
            <h3 class="text-white">Sobre o professor</h3> 
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3"> Professor ou docente é uma pessoa que ensina ciência, arte, técnica ou outros conhecimentos. Para o exercício dessa profissão, requer-se qualificações académicas e pedagógicas, para que consiga transmitir/ensinar a matéria de estudo da melhor forma possível ao aluno. </div>
                </div>
            </div>
        </div>
        
        <div class="col-4">
            <h3 class="text-white">Email</h3> 
            <div class="border border-info rounded">
                <div class="bg-color4">
                    <div class="text-white text-justify px-lg-3"> professor@mail.com </div>
                </div>
            </div>
        </div>
        
    </div>

    {{-- ---------------------------------------------------------------------------------------------------------------------------------------------------- --}}



@endsection