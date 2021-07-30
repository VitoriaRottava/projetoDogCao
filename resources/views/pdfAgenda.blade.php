<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF da listagem da agenda </title>
</head>
<body>
<img src="https://uploaddeimagens.com.br/images/003/335/177/full/LOGO_LAVACAO_NO_BG.png?1626290976" width="100" height="30" alt="">
    <h1>Listagem da agenda de atendimentos cadastrados no sistema do LavaCão</h1>

    @foreach ($agenda as $agendas)<br>
        <p><strong>ID: {{$agendas->id}}</strong>
        <br>Título do atendimento: {{$agendas->titulo}}
        <br>Dia: {{ date( 'd/m/Y' , strtotime($agendas->dia))}}
        <br>Horário: {{$agendas->hora}}
        <br>Funcionário responsável: {{$agendas->funcionario->nome}}
        <br>Cachorro: {{$agendas->cachorro->nome}}
        <br>Produto que será usado: {{$agendas->produto->nome}}
        <br>Dono do cachorro: {{$agendas->dono->nome}}
        <br>Preço: {{$agendas->preco}}
        <br>Informações adicionais: {{$agendas->info}}</p>
        <hr>
    @endforeach
</body>
</html>
