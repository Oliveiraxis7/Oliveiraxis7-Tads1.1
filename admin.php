<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel de Administração</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Caminhões</h1>
        <a href="adicionar_caminhao.php">Adicionar Caminhão</a>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
