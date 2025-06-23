<?php include('header.php'); ?>

<h2>Caminhões à Venda</h2>

<div class="listagem">
  <?php
    $caminhoes = [
      ["modelo" => "Scania R440", "preco" => "R$ 220.000", "img" => "caminhao1.jpg", "desc" => "Ano 2017, 440cv, ótimo estado"],
      ["modelo" => "Volvo FH 540", "preco" => "R$ 315.000", "img" => "caminhao2.jpg", "desc" => "Ano 2019, 540cv, baixa km"],
      ["modelo" => "Mercedes-Benz Actros", "preco" => "R$ 340.000", "img" => "caminhao3.jpg", "desc" => "Ano 2020, câmbio automático"],
      ["modelo" => "DAF XF 105", "preco" => "R$ 280.000", "img" => "caminhao4.jpg", "desc" => "Ano 2018, confortável e eficiente"]
    ];

    foreach ($caminhoes as $i => $c) {
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
  const caminhoes = <?php echo json_encode($caminhoes); ?>;

  function abrirModal(i) {
    const c = caminhoes[i];
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
