<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $servico = $_POST['servico'];
  $mensagem = $_POST['mensagem'];

  echo "<h2>Obrigado, $nome!</h2>";
  echo "<p>Recebemos sua mensagem sobre '$servico'. Entraremos em contato em breve no e-mail $email.</p>";
}
?>
