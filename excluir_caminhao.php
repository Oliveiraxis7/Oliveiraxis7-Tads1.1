<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $stmt = $conn->prepare("DELETE FROM caminhoes WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Caminhão excluído com sucesso!";
    } else {
        echo "Erro ao excluir caminhão.";
    }

    $stmt->close();
    $conn->close();
}
?>

<form method="POST">
    <input type="number" name="id" placeholder="ID do Caminhão" required>
    <button type="submit">Excluir Caminhão</button>
</form>
