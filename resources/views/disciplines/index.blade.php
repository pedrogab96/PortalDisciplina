@extends('layouts.app')

@section('content')
    <section id="intro">
        <div class="row mt-3">
            <div class="section-title col-12 text-center mt-3">
                <h1 class="title-subject">Portal das Disciplinas - IMD/UFRN</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qG4ATq0qJlE"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="popular-courses" class="courses">
        <div class="container">
            <div class="section-title">
                <h2>Portal das Disciplinas</h2>
                <p>Disciplinas cadastradas</p>
            </div>

            @auth
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mt-5">
                        <a class="btn btn-outline-light btn-block" href="{{ route("disciplinas.create") }}"
                           role="button">
                            Cadastrar disciplina
                        </a>
                    </div>
                </div>
            @endauth

            @if($disciplines->count() == 0)
                <p class="response-search mt-4">Nenhuma disciplina encontrada</p>
            @else
                {{-- @foreach($disciplines->chunk(3) as $block) --}}
                    {{-- @foreach($block as $discipline) --}}
                    <div class="row mb-4">
                        @foreach ($disciplines as $discipline)
                            <div class="col-lg-4 col-md-6 h-100 align-items-stretch">
                                <div class="course-item">
                                    @if (!is_null($discipline->trailer))
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="{{$discipline->trailer->url}}"
                                                    allowfullscreen></iframe>
                                        </div>
                                    @else
                                        <img src="{{asset('img/IMD_logo.svg')}}" class="card-img-top" alt="..">
                                    @endif

                                    <div class="course-content">
                                        <h3>
                                            <a href="{{ route('disciplinas.show', $discipline->id) }}">
                                                {{$discipline->name}}
                                            </a>
                                        </h3>
                                        <p>
                                            {{ \Str::limit($discipline->synopsis, 70,'...') }}
                                        </p>
                                    </div>

                                    @auth
                                        @if (Auth::user()->canDiscipline($discipline->id))
                                            <form action=" {{route('disciplinas.destroy', $discipline->id)}}" class="d-inline"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger mt-2" value="Apagar">Apagar</button>
                                            </form>
                                            <form action=" {{route('disciplinas.edit', $discipline->id)}}" class="d-inline"
                                                method="get">
                                              @csrf
                                              @method('UPDATE')
                                              <button type="submit" class="btn btn-warning mt-2" value="Editar">Editar</button>
                                            </form>
                                        @endif
                                    @endauth

                                    <div class="card-footer">{{ $discipline->professor->name}}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                {{-- @endforeach --}}
        @endif
    </section><!-- End Disciplinas Cadastradas Section -->
@endsection
