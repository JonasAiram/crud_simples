@extends('templates.template')

@section('content')
    <h1 class="text-center">Motoristas</h1> <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('motoristas/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Situação</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
            </tr>
            </thead>
            <tbody>

            @foreach($motorista as $motoristas)
                <tr>
                    <th scope="row">{{$motoristas->id}}</th>
                    <td>{{$motoristas->nome}}</td>
                    <td>{{$motoristas->cpf}}</td>
                    <td>{{$motoristas->email}}</td>
                    <td>{{$motoristas->situacao}}</td>
                    <td>{{$motoristas->status}}</td>
                    <td>
                        <a href="{{url("motoristas/$motoristas->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("motoristas/$motoristas->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("motoristas/$motoristas->id/delete")}}" onclick="return confirm('Tem certeza que deseja excluir?');">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
