@extends('layouts.app')

@section('title', 'Edição de Funcionários')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br>
    <form action="{{ action('App\Http\Controllers\FuncionarioController@salvar', $funcionario->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" name="nome" class="form-control" value="{{$funcionario->nome}}"><br>
    </div>
    <div class="form-group col-md-6">
        <label>CPF</label><br>
        <input type="text" name="cpf" class="form-control" value="{{$funcionario->cpf}}"><br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Salário</label><br>
        <input type="text" name="salario" class="form-control" value="{{$funcionario->salario}}"><br>
    </div>
    <div class="form-group col-md-6">
        <label>Telefone</label><br>
        <input type="text" name="telefone" class="form-control" value="{{$funcionario->telefone}}"><br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label>Email</label><br>
        <input type="text" name="email" class="form-control" value="{{$funcionario->email}}"><br>

    </div></div>
    <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
