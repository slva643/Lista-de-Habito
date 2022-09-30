<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "listadehabito2";

$conn = new mysqli($servidor, $usuario, $senha, $bancodedados);

if ($conn->conect_error) {
    die("A conexão falhou: " . $conn->connect_error);
}

$id = $_GET["id"];

$sql = "DELETE FROM habito WHERE id=" . $id;

if (!($conn->query($sql) === TRUE)) {
    die("Erro ao excluir: " . $conn->error);
}

$conn->close();

header("Location: index.php");
