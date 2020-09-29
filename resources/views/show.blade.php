@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        Nome: {{$motorista->nome}}<br>
        CPF: {{$motorista->cpf}}<br>
        E-Mail: {{$motorista->email}}<br>
        Situação: {{$motorista->situacao}} <br>
        Status: {{$motorista->status}} <br>
    </div>
@endsection
