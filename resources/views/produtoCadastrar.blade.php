
@extends('layouts.app')

@section('title', 'Cadastro de Produtos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br>
    <form action="{{ action('App\Http\Controllers\ProdutoController@salvar', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" name="nome" class="form-control"><br>
            </div>
            <div class="form-group col-md-6">
        <label>Marca</label><br>
        <input type="text" name="marca" class="form-control"><br>
            </div></div>
        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Quantidade em Estoque</label><br>
        <input type="text" name="qtd_estoque" class="form-control" placeholder="X unidades"><br>
            </div>
        <div class="form-group col-md-6">
        <label>Custo</label><br>
        <input type="text" name="custo" class="form-control" placeholder="R$---,--"><br>
        </div></div>

        <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
