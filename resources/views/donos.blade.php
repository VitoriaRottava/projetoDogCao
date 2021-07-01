@extends('layouts.app')

@section('title', 'Listagem de Donos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

<br><br>
    <form action="{{ action('App\Http\Controllers\DonoController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-row">
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Digite o nome que deseja buscar" name="nome" id="">
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary"> <i class="fas fa-search"></i> Buscar</button>
                    <a href="{{ url('/dono/cadastrar') }}" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Cadastrar Dono</a>
            </div></div>
    </form><br>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($donos as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->endereco}}</td>

            <td><a href="{{ action('App\Http\Controllers\DonoController@editar',$item->id )}}" style='color:orange;' ><i class='fas fa-edit'></i>   Editar</a> </td>
            <td><a href="{{ action('App\Http\Controllers\DonoController@deletar',$item->id )}}"style='color:red;'><i class='fas fa-trash'></i>   Deletar</a> </td>
 </tr>

        @endforeach

    </table>
    @endsection
