@extends('layouts.app')

@section('title', 'Petshop Lavacão')

@section('content')
<br><br> <br><br><br>



<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://itlife.com.br/portal/wp-content/uploads/2019/08/download-2.jpg"  height=180px alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title">Agenda de Banhos</h5>
        <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/agenda" class="btn btn-dark  btn-block"> Ver</a></small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="http://blog.petix.com.br/wp-content/uploads/2017/05/saiba-como-treinar-os-funcionarios-seu-pet-shop-e-aumente-vendas.jpg"  height=180px alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">Equipe de Funcionários</h5>
        <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
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
        <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/funcionario" class="btn btn-dark  btn-block"> Ver</a></small>
        </div>
    </div>
  </div>
<br><br>
<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="https://static.vix.com/pt/sites/default/files/c/cachorro-lambendo-dono-0217-1400x800.jpg"  height=180px alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title">Donos dos cachorros</h5>
        <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/dono" class="btn btn-dark  btn-block"> Ver</a></small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://meupet.elanco.com/sites/g/files/adhwdz661/files/styles/paragraph_image/public/2020-04/bpc-48_-_filhotes.jpg?itok=A-H2qFJ7"  height=180px alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">Cachorros</h5>
        <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/cachorro" class="btn btn-dark  btn-block"> Ver</a></small>
        </small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="https://br.bolavip.com/export/sites/bolavip/img/2021/06/19/gremio-2.jpg_657093033.jpg" height=180px alt="Imagem de capa do card">
      <div class="card-body">
        <h5 class="card-title">precisamos achar algo pra por aq :((( pra poder ficar 3 em cima e 3 embaixo bem lindo</h5>
        <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted"><a href="/home" class="btn btn-dark  btn-block"> Ver</a></small>
        </div>
    </div>
  </div>

  @endsection
