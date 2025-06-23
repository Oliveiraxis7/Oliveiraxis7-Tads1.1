<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = htmlspecialchars($_POST['nome']);
  $email = htmlspecialchars($_POST['email']);
  $telefone = htmlspecialchars($_POST['telefone']);
  $interesse = htmlspecialchars($_POST['interesse']);
  $mensagem = htmlspecialchars($_POST['mensagem']);
  echo "<!DOCTYPE html>
  <html lang='pt-BR'>
  <head>
    <meta charset='UTF-8'>
    <title>Mensagem Enviada</title>
    <link rel='stylesheet' href='style.css'>
  </head>
  <body>
    <section class='contato'>
      <h2>Obrigado, $nome!</h2>
      <p>Recebemos sua mensagem sobre <strong>$interesse</strong>.</p>
      <p>Em breve entraremos em contato pelo número <strong>$telefone</strong> ou pelo e-mail <strong>$email</strong>.</p>
    </section>
  </body>
  </html>";
}
?>
