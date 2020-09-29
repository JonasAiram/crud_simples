@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($motorista)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($motorista))
            <form name="formEdit" id="formEdit" method="post" action="{{url("motoristas/$motorista->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('motoristas')}}">
        @endif
            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$motorista->nome ?? ''}}" required><br>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF:" value="{{$motorista->cpf ?? ''}}" required><br>
            <input class="form-control" type="text" name="email" id="email" placeholder="E-Mail:" value="{{$motorista->email ?? ''}}" required><br>
            <select class="form-control" name="situacao" id="situacao">
                <option value="{{$motorista->situacao ?? ''}}">{{$motorista->situacao ?? 'Situação'}}</option>
                <option value="livre">Livre</option>
                <option value="Em Curso">Em Curso</option>
                <option value="Retornando">Retornando</option>
            </select><br>
            <select class="form-control" name="status" id="status">
                <option value="{{$motorista->status ?? ''}}">{{$motorista->status ?? 'Status'}}</option>
                <option value="Ativo">Ativo</option>
                <option value="Não">Não</option>
            </select><br>
            <input class="btn btn-primary" type="submit" value="@if(isset($motorista)) Editar @else Cadastrar @endif">
        </form>
    </div>
@endsection
