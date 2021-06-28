
@extends('layouts.app')

@section('title', 'Cadastro de Produtos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\ProdutoController@salvar', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>
        <label>Marca</label><br>
        <input type="text" name="marca"><br>
        <label>Quantidade em Estoque</label><br>
        <input type="text" name="qtd_estoque"><br>
        <label>Custo</label><br>
        <input type="text" name="custo"><br>

        <button type="submit" >Salvar</button>

    </form>
@endsection
