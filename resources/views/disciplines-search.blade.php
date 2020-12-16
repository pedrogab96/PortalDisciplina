@extends('layouts.app')

@section('content')

    <div class="row justify-content-md-center mt-5">
        <div class="col">
        <form action="{{route('search')}}" method="POST">
            @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar..." aria-label="Caixa de pesquisa" aria-describedby="button-addon2" name='search' value="{{ $search ?? '' }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Pesquisar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    @isset($disciplines)
        @if ($disciplines->count() == 0)
            <p class="response-search"> Nenhuma disciplina encontrada </p>
        @else
            <div class="row">
                @foreach ($disciplines as $discipline)
                    <div class="col-12 col-sm-6 col-lg-3 mt-5">
                        <div class="card shadow">

                            @if ($discipline->urlMedia == NULL)
                                <img src="{{asset('img/teste1.jpg')}}" class="card-img-top" alt=".." >
                                
                            @else
                                <div class="teacher-video-container">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ $discipline->urlMedia }}"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            @endif


                            {{-- <a href="/disciplina/{{ $discipline->id }}"> </a> --}}
                            
                            <div class="card-body">
                                <h5 class="card-title">{{ $discipline->name }}</h5>
                                <p class="card-text">{{ Str::limit($discipline->description, 100,' (...)') }}</p>
                                <a href="{{ route('showDiscipline', ['id' => $discipline->id]) }}" class="btn btn-primary">Ver mais</a>

                                <form action=" {{route('deleteDiscipline',$discipline->id)}}" class="d-inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" value="Apagar">Apagar</button>
                                </form>
                                
                            </div>

                           
                            {{--  --}}
                            <div class="card-footer">NOME PROFESSOR</div>
                        </div>
                    </div>
                @endforeach 
            </div>
        @endif
    @endisset
    
    
@endsection