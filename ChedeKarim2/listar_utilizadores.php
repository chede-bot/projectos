<?php
$permissao = $_POST['permissao'];

$mysqli = new mysqli('localhost', 'usuario', 'senha', 'gestao_acesso');

$query = "SELECT utilizador FROM atribuir_permissao WHERE permissao = '$permissao'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    echo "Utilizadores com a permissão $permissao:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row['utilizador'] . "<br>";
    }
} else {
    echo "Nenhum utilizador encontrado com a permissão $permissao.";
}

$mysqli->close();
?>