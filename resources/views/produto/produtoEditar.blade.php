@extends('layouts.app')

@section('title', 'Edição de Produtos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br> <br><br><br>

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
            <p>{{$error}}</p>
        @endforeach
    </div>
    @endif

    <form action="{{ action('App\Http\Controllers\ProdutoController@salvar', $produto->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" name="nome" class="form-control" value="{{$produto->nome}}"><br>
            </div>
        <div class="form-group col-md-6">
        <label>Marca</label><br>
        <input type="text" name="marca" class="form-control" value="{{$produto->marca}}"><br>
        </div></div>
        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Quantidade em Estoque</label><br>
        <input type="text" name="qtd_estoque" class="form-control" value="{{$produto->qtd_estoque}}"><br>
            </div>
        <div class="form-group col-md-6">
        <label>Custo</label><br>
        <input type="text" name="custo" class="form-control" value="{{$produto->custo}}"><br>
        </div></div>

        <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
