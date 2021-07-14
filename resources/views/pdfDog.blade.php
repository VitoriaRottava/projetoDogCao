<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF da listagem dos cachorros</title>
</head>
<body>
    <h1>Listagem de cachorros cadastrados no sistema do Pet Shop LavaCão <img src="https://uploaddeimagens.com.br/images/003/335/177/full/LOGO_LAVACAO_NO_BG.png?1626290976" width="100" height="30" alt=""></h1>

    @foreach ($cachorro as $cachorros)<br>
        <h4>ID: {{$cachorros->id}}</h4>
        <h4>Nome: {{$cachorros->nome}}</h4>
        <h4>Porte: {{$cachorros->porte}}</h4>
        <h4>Pelagem: {{$cachorros->pelagem}}</h4>
        <h4>Sexo: {{$cachorros->sexo}}</h4>
        <h4>Idade: {{$cachorros->idade}}</h4>
        <h4>Produto preferido: {{$cachorros->produto->nome}}</h4>
        <h4>Dono: {{$cachorros->dono->nome}}</h4>
    @endforeach
</body>
</html>
