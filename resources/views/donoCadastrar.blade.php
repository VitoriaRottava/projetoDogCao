@extends('layouts.app')

@section('title', 'Cadastro de Donos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\DonoController@salvar', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>
        <label>CPF</label><br>
        <input type="text" name="cpf"><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone"><br>
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label>Endereço</label><br>
        <input type="text" name="endereco"><br>

        <button type="submit" >Salvar</button>

    </form>
@endsection

