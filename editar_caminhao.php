<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $modelo = $_POST["modelo"];
    $placa = $_POST["placa"];
    $ano = $_POST["ano"];

    $stmt = $conn->prepare("UPDATE caminhoes SET modelo=?, placa=?, ano=? WHERE id=?");
    $stmt->bind_param("ssii", $modelo, $placa, $ano, $id);

    if ($stmt->execute()) {
        echo "Caminhão atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar caminhão.";
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="POST">
    <input type="number" name="id" placeholder="ID do Caminhão" required>
    <input type="text" name="modelo" placeholder="Modelo" required>
    <input type="text" name="placa" placeholder="Placa" required>
    <input type="number" name="ano" placeholder="Ano" required>
    <button type="submit">Atualizar Caminhão</button>
</form>
