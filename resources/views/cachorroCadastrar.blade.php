@extends('layouts.app')

@section('title', 'Cadastro de Cachorros')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\CachorroController@salvar', 0) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome"><br>
        <label>Porte</label><br>
        <input type="text" name="porte"><br>
        <label>Pelagem</label><br>
        <input type="text" name="pelagem"><br>
        <label>Sexo</label><br>
        <input type="text" name="sexo"><br>
        <label>Idade</label><br>
        <input type="text" name="idade"><br>
        <label>Cor</label><br>
        <input type="text" name="cor"><br>
        <label>Shampoo preferido</label><br>
        <input type="text" name="shampoo_preferido"><br>
        <label>Dono</label><br>
        <select name="id_dono">
            @foreach ($donos as $item)
            <option value="{{$item->id}}"> {{$item->nome}} </option>
            @endforeach
        </select>
    <br>
        <button type="submit" >Salvar</button>

    </form>
@endsection

