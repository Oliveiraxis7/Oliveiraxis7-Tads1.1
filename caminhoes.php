<?php
include "config.php";
$result = $conn->query("SELECT * FROM caminhoes");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Caminhões</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Caminhões Disponíveis</h1>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li><?php echo $row['modelo'] . " - Placa: " . $row['placa'] . " (" . $row['ano'] . ")"; ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
