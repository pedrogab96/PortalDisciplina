@extends('layout.index')

@section('content')
    {{-- <div class="row">
        <div class="col-12 text-center my-4 title-subject-container">
            <h3 class="title-subject">IMD0029 - Estrutura de Dados Básicas I</h3>
        </div>
    </div> --}}

    <form action="/disciplina" method="post">
        @csrf
        <div class="form-row justify-content-md-center">
            <div class="form-group col-md-6">
                {{-- <label for="inputSubject"><span class="text-white">Nome da disciplina</span></label> --}}
                <h4 class="text-white">Nome da disciplina</h4>
                <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="ex: Estrutura de dados básica I">
            </div>
            <div class="form-group col-md-2">
                {{-- <label for="inputCode"><span class="text-white">Código da disciplina</span></label> --}}
                <h4 class="text-white">Código</h4>
                <input type="text" class="form-control" id="inputCode" name="inputCode" placeholder="IMD0000">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Sinopse</h4>
                    <textarea style="resize:none" class="form-control" id="sinopse" name="sinopse" rows="7" placeholder="Explique aqui como funciona a disciplina."></textarea>
                    {{-- <div class="bg-white mt-3 p-2" style="border-radius: 8px">
                        Iremos aprender como funciona a estrutura de dados.
                    </div> --}}

                </div>

                {{-- <div class="form-group">
                    <h4 class="text-white">Obstáculos</h4>
                    <textarea style="resize:none" class="form-control" id="obstaculos" name="obstaculos" rows="4" placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente."></textarea>
                    <form action="">
                        <div id="obstaculos">
                            <input type="text" name="obstaculos[]" placeholder="Obstáculo">
                            <button type="button" id="add-campo"> + </button>
                        </div>
                    </form>
                </div> --}}
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Trailer da disciplina</h4>
                    {{-- <div class="teacher-video-container">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cNxNWBrMtig"
                                allowfullscreen></iframe>
                        </div>
                    </div> --}}
                    {{-- <div class="form-row mt-1 ">
                        <input type="url" class="form-control form-control-sm" placeholder="url do vídeo">
                    </div> --}}
                    <div class="input-group mb-3 mt-1">
                        {{-- <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">youtube.com/embed/...</span>
                        </div> --}}
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="youtube.com/embed/...">
                    </div>
                    {{-- <div class="input-group mb-3 mt-1">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">youtube.com/embed/...</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div> --}}
                    <h4 class="text-white">Podcasts</h4>
                    <div class="input-group mb-3 mt-1">
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="link para podcast em nuvem">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col-12">
                {{-- <div class="form-group">
                    <h4 class="text-white">Obstáculos</h4>
                    <div class="bg-white mt-3 p-2 mb-3" style="border-radius: 8px">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste. <br/> <br/>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste. <br/> <br/>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste.
                    </div>
                    <textarea style="resize:none" class="form-control" id="sinopse" rows="3" placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente."></textarea>
                </div> --}}
                <h4 class="text-white">Obstáculos</h4>
                <div class="form-row">
                    
                    <textarea style="resize:none" class="form-control" id="obstaculos" name="obstaculos" rows="4" placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente."></textarea>
                    {{-- <form class="form-inline">
                        <div class="col-11" id="obstaculos">
                            <input type="text" class="form-control" name="obstaculos[]" placeholder="Obstáculo">
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-light mx-2" id="add-obstaculo"> + </button>
                        </div>    
                        

                    </form> --}}
                </div>
            </div>
        </div>

        {{-- <div class="form-row mt-3">
            <div class="col-12">
                <h4 class="text-white">Ementa</h4>
                <div class="form-row">
                    <form class="form-inline">
                        <div class="col-11" id="ementa">
                            <input type="text" class="form-control" name="ementa[]" placeholder="Tópico da ementa">
                        </div>
                        <div class="col-1">
                            <button type="button" class="btn btn-light mx-2" id="add-topico"> + </button>
                        </div>    
                    </form>
                </div>
            </div>
        </div> --}}

        <div class="d-flex p-2 mb-5 justify-content-center">
            <button type="submit" class="btn btn-primary btn-sm mx-2">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm mx-2">Cancelar</button>
        </div>
    </form>

    <script>
        $("#add-obstaculo").click(function() {
            $("#obstaculos").append('<input type="text" class="form-control mt-2" name="obstaculos[]" placeholder="Obstáculo">');
        });

        $("#add-topico").click(function() {
            $("#ementa").append('<input type="text" class="form-control mt-2" name="ementa[]" placeholder="Tópico da ementa">');
        });

    </script>
@endsection