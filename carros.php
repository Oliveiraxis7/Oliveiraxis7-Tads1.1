<?php include('header.php'); ?>

<h2>Carros à Venda</h2>

<div class="listagem">
  <?php
    $carros = [
      ["modelo" => "Corolla 2022", "preco" => "R$ 115.000", "img" => "carro1.jpg", "desc" => "Automático, 2.0 Flex, novo."],
      ["modelo" => "Gol 2019", "preco" => "R$ 43.000", "img" => "carro2.jpg", "desc" => "1.6, completo, ótimo estado."],
      ["modelo" => "Onix 2023", "preco" => "R$ 72.000", "img" => "carro3.jpg", "desc" => "Turbo, com multimídia."],
      ["modelo" => "Argo 2021", "preco" => "R$ 58.000", "img" => "carro4.jpg", "desc" => "1.3 Firefly, único dono."]
    ];

    foreach ($carros as $i => $c) {
      echo "
        <div class='card' onclick='abrirModal($i)'>
          <img src='{$c['img']}' alt='{$c['modelo']}'>
          <h3>{$c['modelo']}</h3>
          <p>{$c['preco']}</p>
        </div>
      ";
    }
  ?>
</div>

<div id="modal" class="modal">
  <div class="modal-conteudo">
    <span class="fechar" onclick="fecharModal()">&times;</span>
    <img id="modal-img" src="" alt="">
    <h3 id="modal-modelo"></h3>
    <p id="modal-preco"></p>
    <p id="modal-desc"></p>
  </div>
</div>

<script>
  const carros = <?php echo json_encode($carros); ?>;

  function abrirModal(i) {
    const c = carros[i];
    document.getElementById('modal-img').src = c.img;
    document.getElementById('modal-modelo').innerText = c.modelo;
    document.getElementById('modal-preco').innerText = c.preco;
    document.getElementById('modal-desc').innerText = c.desc;
    document.getElementById('modal').style.display = "block";
  }

  function fecharModal() {
    document.getElementById('modal').style.display = "none";
  }
</script>

<?php include('footer.php'); ?>
