@extends('layouts.app')

@section('title', 'Edição de Cachorros')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\CachorroController@salvar', $cachorro->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome</label><br>
        <input type="text" name="nome" value="{{$cachorro->nome}}"><br>
        <label>Porte</label><br>
        <input type="text" name="porte" value="{{$cachorro->porte}}"><br>
        <label>Pelagem</label><br>
        <input type="text" name="pelagem" value="{{$cachorro->pelagem}}"><br>
        <label>Sexo</label><br>
        <input type="text" name="sexo" value="{{$cachorro->sexo}}"><br>
        <label>Idade</label><br>
        <input type="text" name="idade" value="{{$cachorro->idade}}"><br>
        <label>Cor</label><br>
        <input type="text" name="cor" value="{{$cachorro->cor}}"><br>
        <label>Produto preferido</label><br>
        <select name="id_produto">
            @foreach ($produtos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_produto', $cachorro->id_produto))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
        <label>Dono</label><br>
        <select name="id_dono">
            @foreach ($donos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_dono', $cachorro->id_dono))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Salvar</button>

    </form>
@endsection
