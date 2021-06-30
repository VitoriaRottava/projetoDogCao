@extends('layouts.app')

@section('title', 'Edição de Agenda de Banhos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <form action="{{ action('App\Http\Controllers\AgendaController@salvar', $agenda->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Título</label><br>
        <input type="text" name="titulo" value="{{$agenda->titulo}}"><br>
        <label>Dia</label><br>
        <input type="date" name="dia" value="{{$agenda->dia}}"><br>
        <label>Hora</label><br>
        <input type="time" name="hora" value="{{$agenda->hora}}"><br>
        <label>Funcionário responsável</label><br>
        <select name="id_funcionario">
            @foreach ($funcionarios as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_funcionario', $agenda->id_funcionario))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
        <label>Cachorro</label><br>
        <select name="id_cachorro">
            @foreach ($cachorros as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_cachorro', $agenda->id_cachorro))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
        <label>Produto que será usado</label><br>
        <select name="id_produto">
            @foreach ($produtos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_produto', $agenda->id_produto))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
        <label>Dono do cachorro</label><br>
        <select name="id_dono">
            @foreach ($donos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_dono', $agenda->id_dono))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
        <label>Preço</label><br>
        <input type="text" name="preco" value="{{$agenda->preco}}"><br>
        <label>Informações adicionais</label><br>
        <input type="text" name="info" value="{{$agenda->info}}"><br>

        <button type="submit">Salvar</button>

    </form>
@endsection
