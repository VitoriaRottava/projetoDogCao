@extends('layouts.app')

@section('title', 'Edição de Donos')

@section('sidebar')
@parent

@endsection

<body>
    @section('content')
    <br><br>
    <form action="{{ action('App\Http\Controllers\DonoController@salvar', $dono->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" name="nome" class="form-control" value="{{$dono->nome}}"><br>
    </div>
    <div class="form-group col-md-6">
        <label>CPF</label><br>
        <input type="text" name="cpf" class="form-control" value="{{$dono->cpf}}"><br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Telefone</label><br>
        <input type="text" name="telefone" class="form-control" value="{{$dono->telefone}}"><br>
    </div>
    <div class="form-group col-md-6">
        <label>Email</label><br>
        <input type="text" name="email" class="form-control" value="{{$dono->email}}"><br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label>Endereço</label><br>
        <input type="text" name="endereco" class="form-control" value="{{$dono->endereco}}"><br>
    </div></div>
    <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
