@extends('layout.index')

@section('content')
    <div class="row">
        <div class="col-12 text-center my-4 title-subject-container">
            <h3 class="title-subject">IMD0029 - Estrutura de Dados Básicas I</h3>
        </div>
    </div>

    <form action="#">
        <div class="row mt-3">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <h4 class="text-white">Sinopse</h4>
                    {{-- <textarea style="resize:none" class="form-control" id="sinopse" rows="3" readonly>Iremos aprender como funciona a estrutura de dados.</textarea> --}}
                    <div class="bg-white mt-3 p-2" style="border-radius: 8px">
                        Iremos aprender como funciona a estrutura de dados.
                    </div>
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
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="form-group">
                    <h4 class="text-white">Dificuldades</h4>
                    <div class="bg-white mt-3 p-2 mb-3" style="border-radius: 8px">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste. <br/> <br/>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste. <br/> <br/>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis similique minus quisquam sapiente. Aspernatur repudiandae reiciendis, porro vitae officiis esse quaerat pariatur accusamus commodi, deserunt doloremque, quis laboriosam non iste.
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection