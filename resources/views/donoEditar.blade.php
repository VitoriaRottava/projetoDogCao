@extends('layouts.app')

@section('title', 'Edição de Donos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\DonoController@salvar', $dono->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome" value="{{$dono->nome}}"><br>
        <label>CPF</label><br>
        <input type="text" name="cpf" value="{{$dono->cpf}}"><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone" value="{{$dono->telefone}}"><br>
        <label>Email</label><br>
        <input type="text" name="email" value="{{$dono->email}}"><br>
        <label>Endereço</label><br>
        <input type="text" name="endereco" value="{{$dono->endereco}}"><br>

        <button type="submit">Salvar</button>

    </form>
@endsection
