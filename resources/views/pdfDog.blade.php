<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF da listagem dos cachorros</title>
</head>
<body>
<img src="https://uploaddeimagens.com.br/images/003/335/177/full/LOGO_LAVACAO_NO_BG.png?1626290976" width="100" height="30" alt="">
    <h1>Listagem de cachorros cadastrados no sistema do Pet Shop LavaCão</h1>

    @foreach ($cachorro as $cachorros)
        <p><strong>ID: {{$cachorros->id}}</strong>
        <br>Nome: {{$cachorros->nome}}
        <br>Porte: {{$cachorros->porte}}
        <br>Pelagem: {{$cachorros->pelagem}}
        <br>Sexo: {{$cachorros->sexo}}
        <br>Idade: {{$cachorros->idade}}
        <br>Produto preferido: {{$cachorros->produto->nome}}
        <br>Dono: {{$cachorros->dono->nome}}</p>
        <hr>
    @endforeach
</body>
</html>
