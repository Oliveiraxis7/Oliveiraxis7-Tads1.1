<?php include('header.php'); ?>

<main>
  <section class="hero">
    <h1>Fp Implementos</h1>
    <p>Compra e venda de caminhões e carros, novos e seminovos.</p>
    <div>
      <a href="#carros" class="btn">Carros</a>
      <a href="#caminhoes" class="btn">Caminhões</a>
    </div>
  </section>

  <section id="carros" class="catalogo">
    <h2>Carros à Venda</h2>
    <div class="listagem">
      <div class="card">
        <img src="carro-oferta.jpg" alt="Corolla 2022">
        <h3>Corolla 2022</h3>
        <p><s>R$ 115.000</s><br><strong>R$ 111.000</strong></p>
      </div>
      <div class="card">
        <img src="carro2.jpg" alt="Gol 2019">
        <h3>Gol 2019</h3>
        <p>R$ 43.000</p>
      </div>
      <div class="card">
        <img src="carro3.jpg" alt="Onix 2023">
        <h3>Onix 2023</h3>
        <p>R$ 72.000</p>
      </div>
      <div class="card">
        <img src="carro4.jpg" alt="Argo 2021">
        <h3>Argo 2021</h3>
        <p>R$ 58.000</p>
      </div>
    </div>
  </section>

  <section id="caminhoes" class="catalogo">
    <h2>Caminhões à Venda</h2>
    <div class="listagem">
      <div class="card">
        <img src="caminhao-oferta.jpg" alt="Scania R440">
        <h3>Scania R440</h3>
        <p><s>R$ 220.000</s><br><strong>R$ 212.000</strong></p>
      </div>
      <div class="card">
        <img src="caminhao2.jpg" alt="Volvo FH 540">
        <h3>Volvo FH 540</h3>
        <p>R$ 315.000</p>
      </div>
      <div class="card">
        <img src="caminhao3.jpg" alt="Actros">
        <h3>Mercedes-Benz Actros</h3>
        <p>R$ 340.000</p>
      </div>
      <div class="card">
        <img src="caminhao4.jpg" alt="DAF XF 105">
        <h3>DAF XF 105</h3>
        <p>R$ 280.000</p>
      </div>
    </div>
  </section>
</main>

<?php include('footer.php'); ?>
