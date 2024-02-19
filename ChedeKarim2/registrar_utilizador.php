<?php
$email = $_POST['email'];
$permissoes = $_POST['permissoes'];

$mysqli = new mysqli('localhost', 'usuario', 'senha', 'gestao_acesso');

// Verificar se o utilizador já está registado
$query = "SELECT * FROM utilizador WHERE email = '$email'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    echo "Utilizador já registado!";
    exit;
}

// Registar o utilizador
$query = "INSERT INTO utilizador (email, username, password) VALUES ('$email', '', '1234')";
$mysqli->query($query);

// Atribuir permissões ao utilizador
foreach ($permissoes as $permissao) {
    $query = "INSERT INTO atribuir_permissao (utilizador, permissao) VALUES ('$email', '$permissao')";
    $mysqli->query($query);
}

$mysqli->close();

echo "Utilizador registado com sucesso!";
?>