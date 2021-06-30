@extends('layouts.app')

@section('title', 'Listagem de Agendas de Banhos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

    <a href="{{ url('/agenda/cadastrar') }}">Cadastrar Agenda de Banhos</a>

    <form action="{{ action('App\Http\Controllers\AgendaController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>

        <button type="submit">Pesquisar</button>

    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Dia</th>
            <th>Hora</th>
            <th>Funcionário responsável</th>
            <th>Cachorro</th>
            <th>Produto que será usado</th>
            <th>Dono do cachorro</th>
            <th>Preço</th>
            <th>Informações adicionais</th>
            <th>Ações</th>
        </tr>
        @foreach ($agendas as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->titulo}}</td>
            <td>{{$item->dia}}</td>
            <td>{{$item->hora}}</td>
            <td>{{$item->funcionario->nome}}</td>
            <td>{{$item->cachorro->nome}}</td>
            <td>{{$item->produto->nome}}</td>
            <td>{{$item->dono->nome}}</td>
            <td>{{$item->preco}}</td>
            <td>{{$item->info}}</td>
            <td>
                <a href="{{ action('App\Http\Controllers\AgendaController@editar',$item->id )}}"> Editar </a>
                <a href="{{ action('App\Http\Controllers\AgendaController@deletar',$item->id )}}"> Deletar </a>
            </td>
        </tr>

        @endforeach

    </table>
    @endsection
