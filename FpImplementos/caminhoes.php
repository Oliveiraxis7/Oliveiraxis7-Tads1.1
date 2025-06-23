<?php include('header.php'); ?>

<h2>Caminhões Disponíveis</h2>

<div class="listagem">
  <?php
    $caminhoes = [
      [
        "modelo" => "Scania R440 2017",
        "preco" => "R$ 210.000",
        "img" => "caminhao1.jpg",
        "detalhes" => "Motor 13L, 440cv, 6x2, câmbio automático. IPVA pago, manutenção em dia."
      ],
      [
        "modelo" => "Volvo FH 540 2019",
        "preco" => "R$ 320.000",
        "img" => "caminhao2.jpg",
        "detalhes" => "Motor 13L, 540cv, ar-condicionado, suspensão a ar. Baixa km."
      ],
      [
        "modelo" => "Mercedes-Benz Actros 2651 2020",
        "preco" => "R$ 355.000",
        "img" => "caminhao3.jpg",
        "detalhes" => "Cabine leito, 510cv, multimídia, pneus novos."
      ],
      [
        "modelo" => "DAF XF 105 2018",
        "preco" => "R$ 295.000",
        "img" => "caminhao4.jpg",
        "detalhes" => "Super espaço interno, motor Paccar MX-13, econômico."
      ],
      [
        "modelo" => "MAN TGX 29.480 2016",
        "preco" => "R$ 240.000",
        "img" => "caminhao5.jpg",
        "detalhes" => "Motor MAN D26, ótimo para longas distâncias. Revisado."
      ],
      [
        "modelo" => "Iveco Hi-Way 2017",
        "preco" => "R$ 215.000",
        "img" => "caminhao6.jpg",
        "detalhes" => "Indicador de fadiga, climatizador, ótimo custo-benefício."
      ]
    ];

    foreach ($caminhoes as $index => $c) {
      echo "
        <div class='card' onclick='abrirModal($index)'>
          <img src='{$c['img']}' alt='{$c['modelo']}'>
          <h3>{$c['modelo']}</h3>
          <p>{$c['preco']}</p>
        </div>
      ";
    }
  ?>
</div>

<!-- Modal -->
<div id="modal" class="modal">
  <div class="modal-conteudo">
    <span class="fechar" onclick="fecharModal()">&times;</span>
    <img id="modal-img" src="" alt="" style="max-width: 100%; height: auto;">
    <h3 id="modal-modelo"></h3>
    <p id="modal-preco"></p>
    <p id="modal-detalhes"></p>
  </div>
</div>

<script>
  const caminhoes = <?php echo json_encode($caminhoes); ?>;

  function abrirModal(index) {
    const c = caminhoes[index];
    document.getElementById('modal-img').src = c.img;
    document.getElementById('modal-modelo').innerText = c.modelo;
    document.getElementById('modal-preco').innerText = c.preco;
    document.getElementById('modal-detalhes').innerText = c.detalhes;
    document.getElementById('modal').style.display = "block";
  }

  function fecharModal() {
    document.getElementById('modal').style.display = "none";
  }
</script>

<style>
  .listagem {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
  }

  .card {
    background: white;
    border: 1px solid #ccc;
    padding: 10px;
    width: 250px;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 999;
    left: 0; top: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
  }

  .modal-conteudo {
    background: white;
    margin: 10% auto;
    padding: 20px;
    max-width: 500px;
    border-radius: 8px;
    position: relative;
  }

  .fechar {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 22px;
    cursor: pointer;
  }
</style>

<?php include('footer.php'); ?>
