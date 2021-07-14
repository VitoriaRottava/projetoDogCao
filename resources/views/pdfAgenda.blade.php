<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF da listagem da agenda </title>
</head>
<body>
    <h1>Listagem da agenda de atendimentos cadastrados no sistema do <img src="https://uploaddeimagens.com.br/images/003/335/177/full/LOGO_LAVACAO_NO_BG.png?1626290976" width="100" height="30" alt=""></h1>

    @foreach ($agenda as $agendas)<br>
        <h4>ID: {{$agendas->id}}</h4>
        <h4>Título do atendimento: {{$agendas->titulo}}</h4>
        <h4>Dia: {{$agendas->dia = date('d/m/Y')}}</h4>
        <h4>Horário: {{$agendas->hora}}</h4>
        <h4>Funcionário responsável: {{$agendas->funcionario->nome}}</h4>
        <h4>Cachorro: {{$agendas->cachorro->nome}}</h4>
        <h4>Produto que será usado: {{$agendas->produto->nome}}</h4>
        <h4>Dono do cachorro: {{$agendas->dono->nome}}</h4>
        <h4>Preço: {{$agendas->preco}}</h4>
        <h4>Informações adicionais: {{$agendas->info}}</h4>

    @endforeach
</body>
</html>
