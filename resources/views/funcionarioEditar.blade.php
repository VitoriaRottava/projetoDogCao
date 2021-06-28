@extends('layouts.app')

@section('title', 'Edição de Funcionários')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\FuncionarioController@salvar', $funcionario->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome" value="{{$funcionario->nome}}"><br>
        <label>CPF</label><br>
        <input type="text" name="cpf" value="{{$funcionario->cpf}}"><br>
        <label>Salário</label><br>
        <input type="text" name="salario" value="{{$funcionario->salario}}"><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone" value="{{$funcionario->telefone}}"><br>
        <label>Email</label><br>
        <input type="text" name="email" value="{{$funcionario->email}}"><br>


        <button type="submit">Salvar</button>

    </form>
@endsection
