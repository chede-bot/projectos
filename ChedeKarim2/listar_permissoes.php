<?php
$usuario = $_POST['usuario'];

$mysqli = new mysqli('localhost', 'usuario', 'senha', 'gestao_acesso');

$query = "SELECT permissao FROM atribuir_permissao WHERE utilizador = '$usuario'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    echo "Permissões do utilizador $usuario:<br>";
    while ($row = $result->fetch_assoc()) {
        echo $row['permissao'] . "<br>";
    }
} else {
    echo "Nenhuma permissão encontrada para o utilizador $usuario.";
}

$mysqli->close();
?>