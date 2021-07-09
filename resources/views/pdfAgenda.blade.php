<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF da listagem da agenda </title>
</head>
<body>
    <h1>Listagem da agenda de atendimentos cadastrados no sistema do Pet Shop LavaCão <img src="https://comofazeremcasa.net/wp-content/uploads/2020/04/desenhos-de-cachorrinhos-para-colorir-2.jpg
        " width="30" height="30" alt=""></h1><br>

    @foreach ($agenda as $agendas)<br>
        <h2>Título do atendimento: {{$agendas->titulo}}</h2>
        <h2>Dia: {{$agendas->dia = date('d/m/Y')}}</h2>
        <h2>Horário: {{$agendas->hora}}</h2>
        <h2>Funcionário responsável: {{$agendas->funcionario->nome}}</h2>
        <h2>Cachorro: {{$agendas->cachorro->nome}}</h2>
        <h2>Produto que será usado: {{$agendas->produto->nome}}</h2>
        <h2>Dono do cachorro: {{$agendas->dono->nome}}</h2>
        <h2>Preço: {{$agendas->preco}}</h2>
        <h2>Informações adicionais: {{$agendas->info}}</h2>

    @endforeach
</body>
</html>
