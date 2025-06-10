<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $numero = $_POST["numero"];
    $cpf = $_POST["cpf"];
    $nascimento = $_POST["nascimento"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Simulação de envio
    echo "Obrigado, $nome $sobrenome! Sua mensagem foi enviada com sucesso.";
}
?>
