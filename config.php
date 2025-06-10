<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "trucksecure";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    header("Location: erro.php?msg=Falha na conexão com o banco de dados");
    exit();
}
?>
