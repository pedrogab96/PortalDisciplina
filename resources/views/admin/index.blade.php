@extends('layouts.app')

@section('title')
Painel de Administração - Portal das Disciplinas
@endsection

@section('description')
Painel de Administração
@endsection

@section('content')

<div class="row">
    <div class="col-12 col-sm-6 col-lg-3 mt-5 mb-2">
        <a name="createProfessor" class="btn btn-outline-light btn-block"
           href="{{ route("professores.create") }}" role="button">Cadastrar professor</a>
    </div>
</div>
    <div>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="text-black">ID</th>
                    <th scope="col" class="text-black">Nome</th>
                    <th scope="col" class="text-black">Email</th>
                    <th scope="col" class="text-black">Email Público</th>
                    <th scope="col" class="text-black">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($professors as $professor)
                    <tr>
                        <th scope="row" class="text-white">{{$professor->id}}</th>
                        <td class="text-white">{{$professor->name}}</td>
                        <td class="text-white">{{$professor->user->email}}</td>
                        <td class="text-white">{{$professor->public_email}}</td>
                        <td class="text-white">
                            <div class="form-group">
                                <form action="{{route('professores.destroy',$professor->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Deletar" class="btn btn-danger btn-block">
                                </form>
                            </div>
                            <div class="form-group">
                                <form action="" method="POST">
                                    <input type="submit" value="Redefinir Senha" class="btn btn-outline-light btn-block">
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
