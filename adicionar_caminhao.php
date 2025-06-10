<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modelo = $_POST["modelo"];
    $placa = $_POST["placa"];
    $ano = $_POST["ano"];

    $stmt = $conn->prepare("INSERT INTO caminhoes (modelo, placa, ano) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $modelo, $placa, $ano);

    if ($stmt->execute()) {
        echo "Caminhão adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar caminhão.";
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="POST">
    <input type="text" name="modelo" placeholder="Modelo" required>
    <input type="text" name="placa" placeholder="Placa" required>
    <input type="number" name="ano" placeholder="Ano" required>
    <button type="submit">Adicionar Caminhão</button>
</form>
