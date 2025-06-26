<?php
$modais = [
  [
    'id' => 'corolla',
    'nome' => 'Corolla 2022',
    'imagem' => 'imagens/corola2.jpg',
    'descricao' => 'Versão XEi, automático, bancos de couro, multimídia. IPVA 2025 pago.',
    'preco' => 'R$ 111.000'
  ],
  [
    'id' => 'scania',
    'nome' => 'Scania R440',
    'imagem' => 'imagens/scania.png',
    'descricao' => 'Truck 6x2, 440cv, Opticruise, revisado, pneus novos.',
    'preco' => 'R$ 211.999'
  ],
  [
    'id' => 'gol',
    'nome' => 'Gol 2019',
    'imagem' => 'imagens/gol.jpg',
    'descricao' => 'Motor 1.6, completo, direção hidráulica, ar-condicionado, único dono.',
    'preco' => 'R$ 42.999'
  ],
  [
    'id' => 'onix',
    'nome' => 'Onix 2023',
    'imagem' => 'imagens/onix.jpg',
    'descricao' => 'Turbo, multimídia, rodas de liga, 6 airbags, garantia de fábrica.',
    'preco' => 'R$ 71.999'
  ],
  [
    'id' => 'argo',
    'nome' => 'Argo 2021',
    'imagem' => 'imagens/argo.webp',
    'descricao' => '1.3 Drive Flex, câmbio manual, som original, baixa quilometragem.',
    'preco' => 'R$ 57.999'
  ],
  [
    'id' => 'volvo',
    'nome' => 'Volvo FH 540',
    'imagem' => 'imagens/volvo.jpg',
    'descricao' => '6x4, I-Shift, teto alto, 2021, rastreador, impecável.',
    'preco' => 'R$ 314.999'
  ],
  [
    'id' => 'actros',
    'nome' => 'Actros',
    'imagem' => 'imagens/mercedes.jpg',
    'descricao' => 'Axor 2644, conforto top-line, ar digital, suspensão pneumática.',
    'preco' => 'R$ 339.999'
  ],
  [
    'id' => 'daf',
    'nome' => 'DAF XF 105',
    'imagem' => 'imagens/daf.jpg',
    'descricao' => '13L 460cv, Euro 5, ar-condicionado, bancos pneumáticos.',
    'preco' => 'R$ 279.999'
  ]
];
?>

<?php foreach ($modais as $modal): ?>
  <div id="modal-<?= $modal['id'] ?>" class="modal">
    <div class="modal-conteudo">
      <span class="fechar-modal">&times;</span>
      <h3><?= $modal['nome'] ?></h3>
      <img src="<?= $modal['imagem'] ?>" alt="<?= $modal['nome'] ?>">
      <p><?= $modal['descricao'] ?></p>
      <p><strong><?= $modal['preco'] ?></strong></p>
    </div>
  </div>
<?php endforeach; ?>
