@extends('layouts.app')

@section('title', 'Cadastro de Agenda de Banhos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\AgendaController@salvar', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Título</label><br>
        <input type="text" name="titulo"><br>
        <label>Dia</label><br>
        <input type="date" name="dia"><br>
        <label>Hora</label><br>
        <input type="time" name="hora"><br>
        <label>Funcionário responsável</label><br>
        <select name="id_funcionario">
            @foreach ($funcionarios as $item)
            <option value="{{$item->id}}"> {{$item->nome}} </option>
            @endforeach
        </select>
    <br>
        <label>Cachorro</label><br>
        <select name="id_cachorro">
            @foreach ($cachorros as $item)
            <option value="{{$item->id}}"> {{$item->nome}} </option>
            @endforeach
        </select>
    <br>
        <label>Produto que será usado</label><br>
        <select name="id_produto">
            @foreach ($produtos as $item)
            <option value="{{$item->id}}"> {{$item->nome}} </option>
            @endforeach
        </select>
    <br>
        <label>Dono do cachorro</label><br>
        <select name="id_dono">
            @foreach ($donos as $item)
            <option value="{{$item->id}}"> {{$item->nome}} </option>
            @endforeach
        </select>
    <br>
        <label>Preço</label><br>
        <input type="text" name="preco"><br>
        <label>Informações adicionais</label><br>
        <input type="text" name="info"><br>


        <button type="submit" >Salvar</button>

    </form>
@endsection

