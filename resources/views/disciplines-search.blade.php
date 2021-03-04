@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-12 text-center my-4 title-subject-container">
            <h1 class="title-subject">Portal das Disciplinas - IMD/UFRN</h1>
        </div>
    </div>

    {{-- Modificar para apenas o user adm ou professor --}}

    @auth
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 mt-5">
                <a name="createDisciplina" class="btn btn-outline-light btn-block" href="{{ route("createDisciplina") }}" role="button">Cadastrar disciplina</a>
            </div>
        </div>
    @endauth

    {{-- <div class="row justify-content-md-center mt-5">
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
    </div> --}}

    @isset($disciplines)
        @if ($disciplines->count() == 0)
            <p class="response-search mt-4"> Nenhuma disciplina encontrada </p>
        @else
            <div class="row">
                @foreach ($disciplines as $discipline)
                    <div class="col-12 col-sm-6 col-lg-3 mt-5">
                        <div class="card shadow">


                            @if ($discipline->urlMedia == NULL)
                                <img src="{{asset('img/IMD_logo.svg')}}" class="card-img-top" alt=".." >

                            @else
                                <div class="teacher-video-container">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ $discipline->urlMedia }}"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $discipline->name }}</h5>
                                <p class="card-text">{{ Str::limit($discipline->description, 70,' (...)') }}</p>
                                <a href="{{ route('showDiscipline', ['id' => $discipline->id]) }}" class="btn btn-primary">Ver mais</a>

                                @auth
                                    <form action=" {{route('deleteDiscipline',$discipline->id)}}" class="d-inline" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" value="Apagar">Apagar</button>
                                    </form>
                                @endauth

                            </div>


                            <div class="card-footer">{{ $discipline->teacher }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endisset


@endsection
