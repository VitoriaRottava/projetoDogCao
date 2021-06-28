@extends('layouts.app')

@section('title', 'Edição de Clientes')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\ClienteController@salvar', $cliente->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome" value="{{$cliente->nome}}"><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone" value="{{$cliente->telefone}}"><br>
        <label>CPF</label><br>
        <input type="text" name="cpf" value="{{$cliente->cpf}}"><br>

        <button type="submit">Salvar</button>

    </form>
@endsection
