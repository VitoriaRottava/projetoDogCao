
@extends('layouts.app')

@section('title', 'Listagem de Produtos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br> <br><br><br>

    <form action="{{ action('App\Http\Controllers\ProdutoController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-row">
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Digite o nome que deseja buscar" name="nome" id="">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
                    <a href="{{ url('/produto/cadastrar') }}" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Cadastrar Produto</a>
            </div></div>
    </form><br>

    <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Marca</th>
            <th scope="col">Quantidade em Estoque</th>
            <th scope="col">Custo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->marca}}</td>
            <td>{{$item->qtd_estoque}}</td>
            <td>{{$item->custo}}</td>

            <td><a href="{{ action('App\Http\Controllers\ProdutoController@editar',$item->id )}}" style='color:orange;' ><i class='fas fa-edit'></i>   Editar</a> </td>
            <td><a href="{{ action('App\Http\Controllers\ProdutoController@deletar',$item->id )}}"style='color:red;'><i class='fas fa-trash'></i>   Deletar</a> </td>
 </tr>

        @endforeach

    </table>

    @endsection

