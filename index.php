<?php include('header.php'); ?>

<main>
  <section class="hero">
    <h1>OFERTAS!!!</h1>
    <p>Confira nossos destaques da semana com descontos exclusivos!</p>

    <div class="listagem">
      <div class="card">
        <img src="imagens/corola.jpg" alt="Corolla 2022">
        <h3>Corolla 2022</h3>
        <p><s>R$ 115.000</s><br><strong>R$ 111.999</strong></p>
        <button class="btn abrir-modal" data-modal="corolla">Ver Detalhes</button>
      </div>
      <div class="card">
        <img src="imagens/scania.png" alt="Scania R440">
        <h3>Scania R440</h3>
        <p><s>R$ 220.000</s><br><strong>R$ 212.989</strong></p>
        <button class="btn abrir-modal" data-modal="scania">Ver Detalhes</button>
      </div>
    </div>
  </section>

 <section id="carros" class="catalogo">
  <h2>Carros à Venda</h2>
  <div class="listagem">
    <div class="card">
      <img src="imagens/gol.jpg" alt="Gol 2019">
      <h3>Gol 2019</h3>
      <div class="card-footer">
        <p><strong>R$ 43.990</strong></p>
        <button class="btn abrir-modal" data-modal="gol">Ver Detalhes</button>
      </div>
    </div>
    <div class="card">
      <img src="imagens/onix.jpg" alt="Onix 2023">
      <h3>Onix 2023</h3>
      <div class="card-footer">
        <p><strong>R$ 72.992</strong></p>
        <button class="btn abrir-modal" data-modal="onix">Ver Detalhes</button>
      </div>
    </div>
    <div class="card">
      <img src="imagens/argo.webp" alt="Argo 2021">
      <h3>Argo 2021</h3>
      <div class="card-footer">
        <p><strong>R$ 58.776</strong></p>
        <button class="btn abrir-modal" data-modal="argo">Ver Detalhes</button>
      </div>
    </div>
  </div>
</section>

<section id="caminhoes" class="catalogo">
  <h2>Caminhões à Venda</h2>
  <div class="listagem">
    <div class="card">
      <img src="imagens/volvo.jpg" alt="Volvo FH 540">
      <h3>Volvo FH 540</h3>
      <div class="card-footer">
        <p><strong>R$ 314.999</strong></p>
        <button class="btn abrir-modal" data-modal="volvo">Ver Detalhes</button>
      </div>
    </div>
    <div class="card">
      <img src="imagens/mercedes.jpg" alt="Actros">
      <h3>Actros</h3>
      <div class="card-footer">
        <p><strong>R$ 339.999</strong></p>
        <button class="btn abrir-modal" data-modal="actros">Ver Detalhes</button>
      </div>
    </div>
    <div class="card">
      <img src="imagens/daf.jpg" alt="DAF XF 105">
      <h3>DAF XF 105</h3>
      <div class="card-footer">
        <p><strong>R$ 279.999</strong></p>
        <button class="btn abrir-modal" data-modal="daf">Ver Detalhes</button>
      </div>
    </div>
  </div>
</section>

  <section id="sobre" class="sobre">
    <h2>Sobre Nós</h2>
    <p>
      A <strong>Fp Implementos</strong> é especializada na compra e venda de veículos leves e pesados com qualidade, confiança e atendimento padrao cuiabano. Nosso compromisso é entregar soluções sob medida para cada cliente, com transparência e agilidade em todo o Brasil.
    </p>
  </section>

  <?php include('modais.php'); ?>
</main>

<?php include('footer.php'); ?>
<link rel="icon" href="imagens/lgoo.png" type="image/png">
