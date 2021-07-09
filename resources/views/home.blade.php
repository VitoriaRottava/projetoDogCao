@extends('layouts.app')

@section('title', 'Petshop Lavacão')

@section('content')
<br><br> <br><br><br>



<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://itlife.com.br/portal/wp-content/uploads/2019/08/download-2.jpg"  height=180px alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title">Agenda de Banhos</h5>
        <p class="card-text">O pet shop LavaCão possui vários tipos de banhos, cada qual com seu respectivo preço. Além disso, é necessário informar o dia e o horário que o atendimento está marcado, para que seja possível a organização da agenda.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/agenda" class="btn btn-dark  btn-block"> Ver</a></small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="http://blog.petix.com.br/wp-content/uploads/2017/05/saiba-como-treinar-os-funcionarios-seu-pet-shop-e-aumente-vendas.jpg"  height=180px alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">Equipe de Funcionários</h5>
        <p class="card-text">A equipe de funcionários do pet shop LavaCão é muito competente, além de amar o que faz. É importante manter todos os dados da equipe atualizados, bem como cadastrar novos contratados.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/funcionario" class="btn btn-dark  btn-block"> Ver</a></small>
        </small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://static.wixstatic.com/media/43b968_0e73cbb477124a94830738199d867635~mv2.jpg/v1/fill/w_800,h_533,al_c,q_90/43b968_0e73cbb477124a94830738199d867635~mv2.jpg" height=180px alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">Estoque de Produtos</h5>
        <p class="card-text">O pet shop LavaCão possui uma grande variedade de produtos para melhor atender nossos clientes patudos. Mantenha os produtos atualizados e preste atenção no controle de estoque. </p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/produto" class="btn btn-dark  btn-block"> Ver</a></small>
        </div>
    </div>
  </div>
<br><br>
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://static.vix.com/pt/sites/default/files/c/cachorro-lambendo-dono-0217-1400x800.jpg"  height=180px alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title">Donos dos cachorros</h5>
        <p class="card-text">Toda a equipe do pet shop LavaCão sabe o quanto os nossos clientes patudos são amados pelos seus donos. Para que possamos melhor cuidar dos cachorros, mantenha os dados dos seus respectivos donos atualizados.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/dono" class="btn btn-dark  btn-block"> Ver</a></small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://meupet.elanco.com/sites/g/files/adhwdz661/files/styles/paragraph_image/public/2020-04/bpc-48_-_filhotes.jpg?itok=A-H2qFJ7"  height=180px alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">Cachorros</h5>
        <p class="card-text">Os cachorros são o motivo para nosso pet shop existir. Enquanto a equipe cuida bem deles durante o atendimento, fique responsável por cuidar bem dos seus dAUdos.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/cachorro" class="btn btn-dark  btn-block"> Ver</a></small>
        </small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://br.bolavip.com/export/sites/bolavip/img/2021/06/19/gremio-2.jpg_657093033.jpg" height=180px alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">apaga delete exclói</h5>
        <p class="card-text"></p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/home" class="btn btn-dark  btn-block"> Ver</a></small>
        </div>
    </div>
  </div>

  @endsection
