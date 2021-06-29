@extends('layouts.app')

@section('title', 'Listagem de Donos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

    <a href="{{ url('/dono/cadastrar') }}">Cadastrar Dono</a>

    <form action="{{ action('App\Http\Controllers\DonoController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>

        <button type="submit">Pesquisar</button>

    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        @foreach ($donos as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->endereco}}</td>
            <td>
                <a href="{{ action('App\Http\Controllers\DonoController@editar',$item->id )}}"> Editar </a>
                <a href="{{ action('App\Http\Controllers\DonoController@deletar',$item->id )}}"> Deletar </a>
            </td>
        </tr>

        @endforeach

    </table>
    @endsection
