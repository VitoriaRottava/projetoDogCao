@extends('layouts.app')

@section('title', 'Edição de Cachorros')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br> <br><br><br>

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error )
            <p>{{$error}}</p>
        @endforeach
    </div>
    @endif

    <form action="{{ action('App\Http\Controllers\CachorroController@salvar', $cachorro->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" name="nome" class="form-control" value="{{$cachorro->nome}}"><br>
            </div>
            <div class="form-group col-md-3">
        <label>Porte</label><br>
        <input type="text" name="porte" class="form-control" value="{{$cachorro->porte}}"><br>
            </div>
            <div class="form-group col-md-3">
        <label>Pelagem</label><br>
        <input type="text" name="pelagem" class="form-control" value="{{$cachorro->pelagem}}"><br>
            </div></div>
        <div class="form-row">
            <div class="form-group col-md-4">
        <label>Sexo</label><br>
        <input type="text" name="sexo" class="form-control" value="{{$cachorro->sexo}}"><br>
            </div>
        <div class="form-group col-md-4">
        <label>Idade</label><br>
        <input type="text" name="idade" class="form-control" value="{{$cachorro->idade}}"><br>
        </div>
        <div class="form-group col-md-4">
        <label>Cor</label><br>
        <input type="text" name="cor" class="form-control" value="{{$cachorro->cor}}"><br>
        </div></div>
        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Produto preferido</label><br>
        <select name="id_produto" class="form-control">
            @foreach ($produtos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_produto', $cachorro->id_produto))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br></div>
        <div class="form-group col-md-6">
        <label>Dono</label><br>
        <select name="id_dono" class="form-control">
            @foreach ($donos as $item)
            <option value="{{ $item->id }}"
            @if ($item->id == old('id_dono', $cachorro->id_dono))
                selected="selected"
            @endif
            >{{$item->nome}}</option>
            @endforeach
        </select>
        <br></div></div>
        <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
