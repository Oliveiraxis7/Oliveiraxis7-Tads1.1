<?php
$error_message = isset($_GET['msg']) ? $_GET['msg'] : "Ocorreu um erro inesperado.";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Erro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Erro!</h1>
        <p><?php echo htmlspecialchars($error_message); ?></p>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>
