
@extends('layouts.app')

@section('title', 'Listagem de Funcionários')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')

    <a href="{{ url('/funcionario/cadastrar') }}">Cadastrar Funcionário</a>

    <form action="{{ action('App\Http\Controllers\FuncionarioController@pesquisar')}}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>

        <button type="submit">Pesquisar</button>

    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Salário</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        @foreach ($funcionarios as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->salario}}</td>
            <td>{{$item->telefone}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a href="{{ action('App\Http\Controllers\FuncionarioController@editar',$item->id )}}"> Editar </a>
                <a href="{{ action('App\Http\Controllers\FuncionarioController@deletar',$item->id )}}"> Deletar </a>
            </td>
        </tr>

        @endforeach

    </table>

    @endsection

