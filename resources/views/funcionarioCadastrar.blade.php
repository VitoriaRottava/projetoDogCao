
@extends('layouts.app')

@section('title', 'Cadastro de Funcionários')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br> <br><br><br>
    <form action="{{ action('App\Http\Controllers\FuncionarioController@salvar', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" name="nome" class="form-control"><br>
        </div>
            <div class="form-group col-md-6">
        <label>CPF</label><br>
        <input type="text" name="cpf" class="form-control" placeholder="000.000.000-00"><br>
            </div></div>
        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Salário</label><br>
        <input type="text" name="salario" class="form-control" placeholder="R$----,--"><br>
            </div>
        <div class="form-group col-md-6">
        <label>Telefone</label><br>
        <input type="text" name="telefone" class="form-control" placeholder="(00) 0000 0000"><br>
        </div></div>
        <div class="form-row">
            <div class="form-group col-md-12">
        <label>Email</label><br>
        <input type="text" name="email" class="form-control"><br>
            </div></div>
            <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
