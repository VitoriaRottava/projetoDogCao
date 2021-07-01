@extends('layouts.app')

@section('title', 'Listagem de Agendas de Banhos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

<br><br>
    <form action="{{ action('App\Http\Controllers\AgendaController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-row">
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Digite o nome que deseja buscar" name="nome" id="">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
                    <a href="{{ url('/agenda/cadastrar') }}" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Cadastrar Agenda de Banhos</a>
            </div></div>
    </form><br>

    <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Dia</th>
            <th scope="col">Hora</th>
            <th scope="col">Funcionário responsável</th>
            <th scope="col">Cachorro</th>
            <th scope="col">Produto que será usado</th>
            <th scope="col">Dono do cachorro</th>
            <th scope="col">Preço</th>
            <th scope="col">Informações adicionais</th>
        </tr>
    </thead>
    <tbody>
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

            <td><a href="{{ action('App\Http\Controllers\AgendaController@editar',$item->id )}}" style='color:orange;' ><i class='fas fa-edit'></i>Editar</a> </td>
            <td><a href="{{ action('App\Http\Controllers\AgendaController@deletar',$item->id )}}"style='color:red;'><i class='fas fa-trash'></i>Deletar</a> </td>
 </tr>

        @endforeach

    </table>
    @endsection
