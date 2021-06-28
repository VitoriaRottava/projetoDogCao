@extends('layouts.app')

@section('title', 'Edição de Produtos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\ProdutoController@salvar', $produto->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome" value="{{$produto->nome}}"><br>
        <label>Marca</label><br>
        <input type="text" name="marca" value="{{$produto->marca}}"><br>
        <label>Quantidade em Estoque</label><br>
        <input type="text" name="qtd_estoque" value="{{$produto->qtd_estoque}}"><br>
        <label>Custo</label><br>
        <input type="text" name="custo" value="{{$produto->custo}}"><br>

        <button type="submit">Salvar</button>

    </form>
@endsection
