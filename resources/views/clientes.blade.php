@extends('layouts.app')

@section('title', 'Listagem de Clientes')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

    <a href="{{ url('/cliente/cadastrar') }}">Cadastrar Cliente</a>

    <form action="{{ action('App\Http\Controllers\ClienteController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>

        <button type="submit">Pesquisar</button>

    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
        @foreach ($clientes as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->cpf}}</td>
            <td>
                <a href="{{ action('App\Http\Controllers\ClienteController@editar',$item->id )}}"> Editar </a>
                <a href="{{ action('App\Http\Controllers\ClienteController@deletar',$item->id )}}"> Deletar </a>
            </td>
        </tr>

        @endforeach

    </table>
    @endsection
