<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "listadehabito2";

$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

if ($conexao->connect_error) {
    die("A conexão falhou: " . $conexao->connect_errno);
}

$nome = $_GET["nome"];

$sql = "INSERT INTO habito (nome, status)  VALUES ('" . $nome . "', 'A')";

if (!($conexao->query($sql) === TRUE)) {
    $conexão->close();
    die("Erro: " . $sql . "<br>" . $conexao->error);
}
$conexao->close();

header("Location: index.php");
