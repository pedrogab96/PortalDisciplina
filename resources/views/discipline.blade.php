@extends('layout.index')

@section('content')
    {{-- <div class="row">
        <div class="col-12 text-center my-4 title-subject-container">
            <h3 class="title-subject">IMD0029 - Estrutura de Dados Básicas I</h3>
        </div>
    </div> --}}

    <form action="#">,
        <div class="form-row justify-content-md-center">
            <div class="form-group col-md-6">
                {{-- <label for="inputSubject"><span class="text-white">Nome da disciplina</span></label> --}}
                <h4 class="text-white">Nome da disciplina</h4>
                <input type="text" class="form-control" id="inputSubject" placeholder="Estrutura de dados básica I">
            </div>
            <div class="form-group col-md-2">
                {{-- <label for="inputCode"><span class="text-white">Código da disciplina</span></label> --}}
                <h4 class="text-white">Código</h4>
                <input type="text" class="form-control" id="inputCode" placeholder="IMD0029">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Sinopse</h4>
                    <textarea style="resize:none" class="form-control" id="sinopse" rows="7" placeholder="Explique aqui como funciona a disciplina."></textarea>
                    {{-- <div class="bg-white mt-3 p-2" style="border-radius: 8px">
                        Iremos aprender como funciona a estrutura de dados.
                    </div> --}}

                </div>

                <div class="form-group">
                    <h4 class="text-white">Obstáculos</h4>
                    <textarea style="resize:none" class="form-control" id="sinopse" rows="4" placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente."></textarea>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Trailer da disciplina</h4>
                    <div class="teacher-video-container">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cNxNWBrMtig"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    {{-- <div class="form-row mt-1 ">
                        <input type="url" class="form-control form-control-sm" placeholder="url do vídeo">
                    </div> --}}
                    <div class="input-group mb-3 mt-1">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">youtube.com/embed/...</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row mt-3">
            <div class="col-12">
                <div class="form-group">
                    <h4 class="text-white">Obstáculos</h4>
                    <div class="bg-white mt-3 p-2 mb-3" style="border-radius: 8px">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste. <br/> <br/>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste. <br/> <br/>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste.
                    </div>
                    <textarea style="resize:none" class="form-control" id="sinopse" rows="3" placeholder="Coloque aqui problemas que alunos costumam relatar ao cursar esse componente."></textarea>
                </div>
            </div>
        </div> --}}
    </form>
@endsection