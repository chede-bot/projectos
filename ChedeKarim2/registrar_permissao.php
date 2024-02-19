<?php
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$mysqli = new mysqli('localhost', 'usuario', 'senha', 'gestao_acesso');


$query = "SELECT * FROM permissao WHERE nome = '$nome'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    echo "Permissão já registada!";
    exit;
}


$query = "INSERT INTO permissao (nome, descricao) VALUES ('$nome', '$descricao')";
$mysqli->query($query);

$mysqli->close();

echo "Permissão registada com sucesso!";
?>