@extends('layouts.app')

@section('title', 'Edição de Agenda de Banhos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br> <br><br><br>

    <form action="{{ action('App\Http\Controllers\AgendaController@salvar', $agenda->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Título</label><br>
        <input type="text" name="titulo" class="form-control" value="{{$agenda->titulo}}"><br>
    </div>
    <div class="form-group col-md-3">
        <label>Dia</label><br>
        <input type="date" name="dia" class="form-control" value="{{$agenda->dia}}"><br>
    </div>
    <div class="form-group col-md-3">
        <label>Hora</label><br>
        <input type="time" name="hora" class="form-control"value="{{$agenda->hora}}"><br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Funcionário responsável</label><br>
        <select name="id_funcionario" class="form-control">
            @foreach ($funcionarios as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_funcionario', $agenda->id_funcionario))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
        </div>
    <div class="form-group col-md-6">
        <label>Cachorro</label><br>
        <select name="id_cachorro" class="form-control">
            @foreach ($cachorros as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_cachorro', $agenda->id_cachorro))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Produto que será usado</label><br>
        <select name="id_produto" class="form-control">
            @foreach ($produtos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_produto', $agenda->id_produto))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
    </div>
    <div class="form-group col-md-6">
        <label>Dono do cachorro</label><br>
        <select name="id_dono" class="form-control">
            @foreach ($donos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_dono', $agenda->id_dono))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Preço</label><br>
        <input type="text" name="preco" class="form-control" value="{{$agenda->preco}}"><br>
        </div>
        <div class="form-group col-md-6">
        <label>Informações adicionais</label><br>
        <input type="text" name="info" class="form-control" value="{{$agenda->info}}"><br></div></div>

        <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
