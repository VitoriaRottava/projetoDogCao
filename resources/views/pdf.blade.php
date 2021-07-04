<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <h1>Listagem de cachorros cadastrados no sistema do Pet Shop LavaCão</h1><br>
    @foreach ($cachorro as $cachorros)<br>
        <h2>Nome: {{$cachorros->nome}}</h2>
        <h2>Porte: {{$cachorros->porte}}</h2>
        <h2>Pelagem: {{$cachorros->pelagem}}</h2>
        <h2>Sexo: {{$cachorros->sexo}}</h2>
        <h2>Idade: {{$cachorros->idade}}</h2>
        <h2>Produto preferido: {{$cachorros->produto->nome}}</h2>
        <h2>Dono: {{$cachorros->dono->nome}}</h2>
    @endforeach
</body>
</html>
