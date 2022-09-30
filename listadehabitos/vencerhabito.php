<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "listadehabito2";

$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$id = $_GET["id"];
$sql = " UPDATE habito " . " SET status='V' " . "WHERE id=" . $id;

if (!($conn->query($sql) === TRUE)) {
    $conn->close();
    die("Erro ao atrualizar: " . $conn->error);
}

$conn->close();

header("Location: index.php");
