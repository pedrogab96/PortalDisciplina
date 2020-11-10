@extends('layout.index')

@section('content')
    

    <div class="row">
        <div class="col-12 text-center my-4 title-subject-container">
            {{-- <h1 class="title-subject">Portal das Disciplinas - IMD/UFRN</h1> --}}
            <h3 class="title-subject">IMD0029 - Estrutura de Dados Básicas I</h3>
        </div>
    </div>

    <form action="#">
        <div class="form-row">
            <div class="col-6">
                <div class="form-group">
                    <h4 class="text-white">Sinopse</h4>
                    <textarea style="resize:none" class="form-control" id="sinopse" rows="3" readonly>Iremos aprender como funciona a estrutura de dados.</textarea>
                    {{-- <p class="bg-white">Iremos aprender como funciona a estrutura de dados.</p> --}}
                    {{-- <div class="bg-white p-2">
                        Iremos aprender como funciona a estrutura de dados.
                    </div> --}}
                </div>
            </div>
        </div>
    </form>
@endsection