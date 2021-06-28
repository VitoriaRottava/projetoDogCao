@extends('layouts.app')

@section('title', 'Cadastro de Clientes')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\ClienteController@salvar', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone"><br>
        <label>CPF</label><br>
        <input type="text" name="cpf"><br>

        <button type="submit" >Salvar</button>

    </form>
@endsection

