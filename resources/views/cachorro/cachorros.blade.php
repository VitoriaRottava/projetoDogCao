@extends('layouts.app')

@section('title', 'Listagem de Cachorros')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br> <br><br><br>
    <form action="{{ action('App\Http\Controllers\CachorroController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-row">
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Digite o nome que deseja buscar" name="nome" id="">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
                    <a href="{{ url('/cachorro/cadastrar') }}" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Cadastrar Cachorro</a>
            </div></div>
    </form><br>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Porte</th>
                <th scope="col">Pelagem</th>
                <th scope="col">Sexo</th>
                <th scope="col">Idade</th>
                <th scope="col">Cor</th>
                <th scope="col">Produto Preferido</th>
                <th scope="col">Dono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cachorros as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->porte}}</td>
            <td>{{$item->pelagem}}</td>
            <td>{{$item->sexo}}</td>
            <td>{{$item->idade}}</td>
            <td>{{$item->cor}}</td>
            <td>{{$item->produto->nome}}</td>
            <td>{{$item->dono->nome}}</td>

            <td><a href="{{ action('App\Http\Controllers\CachorroController@editar',$item->id )}}" style='color:orange;' ><i class='fas fa-edit'></i>Editar</a> </td>
            <td><a href="{{ action('App\Http\Controllers\CachorroController@deletar',$item->id )}}"style='color:red;'><i class='fas fa-trash'></i>Deletar</a> </td>
     </tr>

        @endforeach

    </table>
    @endsection
