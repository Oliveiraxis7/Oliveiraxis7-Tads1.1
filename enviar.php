<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $telefone = $_POST["telefone"];
  $interesse = $_POST["interesse"];
  $mensagem = $_POST["mensagem"];

  echo "<h2>Obrigado, $nome!</h2>";
  echo "<p>Recebemos sua mensagem sobre <strong>$interesse</strong>. Em breve entraremos em contato no e-mail $email.</p>";
}
?>
