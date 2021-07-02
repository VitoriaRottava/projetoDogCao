@extends('layouts.app')

@section('title', 'Edição de Donos')

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

    <form action="{{ action('App\Http\Controllers\DonoController@salvar', $dono->id) }}" method="post">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <div class="form-row">
            <div class="form-group col-md-6">
        <label>Nome</label><br>
        <input type="text" placeholder="Lucas Ferreira" name="nome" class="form-control" value="{{$dono->nome}}"><br>
    </div>
    <div class="form-group col-md-6">
        <label>CPF</label><br>
        <input type="text" placeholder="000.000.000-00" name="cpf" class="form-control" value="{{$dono->cpf}}"><br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Telefone</label><br>
        <input type="text" placeholder="(00) 0000-0000" name="telefone" class="form-control" value="{{$dono->telefone}}"><br>
    </div>
    <div class="form-group col-md-6">
        <label>Email</label><br>
        <input type="text" placeholder="lucasferreira@gmail.com" name="email" class="form-control" value="{{$dono->email}}"><br>
    </div></div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label>Endereço</label><br>
        <input type="text" placeholder="Av. Brasil, 1172" name="endereco" class="form-control" value="{{$dono->endereco}}"><br>
    </div></div>
    <button type="submit" class="btn btn-success  btn-block"> <i class="fas fa-save"></i>   Salvar</button>

    </form>
@endsection
