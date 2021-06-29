@extends('layouts.app')

@section('title', 'Listagem de Cachorros')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

    <a href="{{ url('/cachorro/cadastrar') }}">Cadastrar Cachorro</a>

    <form action="{{ action('App\Http\Controllers\CachorroController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>

        <button type="submit">Pesquisar</button>

    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Porte</th>
            <th>Pelagem</th>
            <th>Sexo</th>
            <th>Idade</th>
            <th>Cor</th>
            <th>Shampoo Preferido</th>
            <th>Dono</th>
            <th>Ações</th>
        </tr>
        @foreach ($cachorros as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->porte}}</td>
            <td>{{$item->pelagem}}</td>
            <td>{{$item->sexo}}</td>
            <td>{{$item->idade}}</td>
            <td>{{$item->cor}}</td>
            <td>{{$item->shampoo_preferido}}</td>
            <td>{{$item->id_dono}}</td>

            <td>
                <a href="{{ action('App\Http\Controllers\CachorroController@editar',$item->id )}}"> Editar </a>
                <a href="{{ action('App\Http\Controllers\CachorroController@deletar',$item->id )}}"> Deletar </a>
            </td>
        </tr>

        @endforeach

    </table>
    @endsection
