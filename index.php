<?php include('header.php'); ?>

<?php
$veiculos = [
  'ofertas' => [
    [
      'nome' => 'Corolla 2022',
      'imagem' => 'imagens/corola.jpg',
      'preco_original' => 'R$ 115.000',
      'preco_desconto' => 'R$ 111.999',
      'id' => 'corolla'
    ],
    [
      'nome' => 'Scania R440',
      'imagem' => 'imagens/scania.png',
      'preco_original' => 'R$ 220.000',
      'preco_desconto' => 'R$ 212.989',
      'id' => 'scania'
    ],
  ],
  'carros' => [
    [
      'nome' => 'Gol 2019',
      'imagem' => 'imagens/gol.jpg',
      'preco' => 'R$ 43.990',
      'id' => 'gol'
    ],
    [
      'nome' => 'Onix 2023',
      'imagem' => 'imagens/onix.jpg',
      'preco' => 'R$ 72.992',
      'id' => 'onix'
    ],
    [
      'nome' => 'Argo 2021',
      'imagem' => 'imagens/argo.webp',
      'preco' => 'R$ 58.776',
      'id' => 'argo'
    ],
  ],
  'caminhoes' => [
    [
      'nome' => 'Volvo FH 540',
      'imagem' => 'imagens/volvo.jpg',
      'preco' => 'R$ 314.999',
      'id' => 'volvo'
    ],
    [
      'nome' => 'Actros',
      'imagem' => 'imagens/mercedes.jpg',
      'preco' => 'R$ 339.999',
      'id' => 'actros'
    ],
    [
      'nome' => 'DAF XF 105',
      'imagem' => 'imagens/daf.jpg',
      'preco' => 'R$ 279.999',
      'id' => 'daf'
    ],
  ]
];
?>

<main>
  <section class="hero">
    <h1>OFERTAS!!!</h1>
    <p>Confira nossos destaques da semana com descontos exclusivos!</p>
    <div class="listagem">
      <?php foreach ($veiculos['ofertas'] as $oferta): ?>
        <div class="card">
          <img src="<?= $oferta['imagem'] ?>" alt="<?= $oferta['nome'] ?>">
          <h3><?= $oferta['nome'] ?></h3>
          <p><s><?= $oferta['preco_original'] ?></s><br><strong><?= $oferta['preco_desconto'] ?></strong></p>
          <button class="btn abrir-modal" data-modal="<?= $oferta['id'] ?>">Ver Detalhes</button>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="carros" class="catalogo">
    <h2>Carros à Venda</h2>
    <div class="listagem">
      <?php foreach ($veiculos['carros'] as $carro): ?>
        <div class="card">
          <img src="<?= $carro['imagem'] ?>" alt="<?= $carro['nome'] ?>">
          <h3><?= $carro['nome'] ?></h3>
          <div class="card-footer">
            <p><strong><?= $carro['preco'] ?></strong></p>
            <button class="btn abrir-modal" data-modal="<?= $carro['id'] ?>">Ver Detalhes</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="caminhoes" class="catalogo">
    <h2>Caminhões à Venda</h2>
    <div class="listagem">
      <?php foreach ($veiculos['caminhoes'] as $caminhao): ?>
        <div class="card">
          <img src="<?= $caminhao['imagem'] ?>" alt="<?= $caminhao['nome'] ?>">
          <h3><?= $caminhao['nome'] ?></h3>
          <div class="card-footer">
            <p><strong><?= $caminhao['preco'] ?></strong></p>
            <button class="btn abrir-modal" data-modal="<?= $caminhao['id'] ?>">Ver Detalhes</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="sobre" class="sobre">
    <h2>Sobre Nós</h2>
    <p>
      A <strong>Fp Implementos</strong> é especializada na compra e venda de veículos leves e pesados com qualidade, confiança e atendimento padrão cuiabano. Nosso compromisso é entregar soluções sob medida para cada cliente, com transparência e agilidade em todo o Brasil.
    </p>
  </section>

  <?php include('modais.php'); ?>
</main>

<?php include('footer.php'); ?>
<link rel="icon" href="imagens/lgoo.png" type="image/png">
