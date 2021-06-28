
@extends('layouts.app')

@section('title', 'Listagem de Produtos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

    <a href="{{ url('/produto/cadastrar') }}">Cadastrar Produto</a>

    <form action="{{ action('App\Http\Controllers\ProdutoController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>

        <button type="submit">Pesquisar</button>

    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Quantidade em Estoque</th>
            <th>Custo</th>
            <th>Ações</th>
        </tr>
        @foreach ($produtos as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->marca}}</td>
            <td>{{$item->qtd_estoque}}</td>
            <td>{{$item->custo}}</td>
            <td>
                <a href="{{ action('App\Http\Controllers\ProdutoController@editar',$item->id )}}"> Editar </a>
                <a href="{{ action('App\Http\Controllers\ProdutoController@deletar',$item->id )}}"> Deletar </a>
            </td>
        </tr>

        @endforeach

    </table>

    @endsection

