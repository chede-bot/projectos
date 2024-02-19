<?php

	$nome = $_POST["nome"];
	$data_nascimento = $_POST["data_nascimento"];
	$filiacao = $_POST["filiacao"];
	$prov_cidade = $_POST["prov_cidade"];
	$bairro = $_POST["bairro"];
	$quarteirao = $_POST["quarteirao"];
	$local_nascimento = $_POST["local_nascimento"];
	$nacionalidade = $_POST["nacionalidade"];
	$email = $_POST["email"];
	$celular = $_POST["celular"];
	$website = $_POST["website"];
	$estado_civil = $_POST["estado_civil"];
	$sexo = $_POST["sexo"];

	// imprimir dados na página
	echo "<h2>Dados do Cidadão:</h2>";
	echo "<p><strong>Nome Completo:</strong> " . $nome . "</p>";
	echo "<p><strong>Data de Nascimento:</strong> " . $data_nascimento . "</p>";
	echo "<p><strong>Filiação:</strong> " . $filiacao . "</p>";
	echo "<p><strong>Endereço:</strong> " . $prov_cidade . ", " . $bairro . ", " . $quarteirao . "</p>";
	echo "<p><strong>Local de Nascimento:</strong> " . $local_nascimento . "</p>";
	echo "<p><strong>Nacionalidade:</strong> " . $nacionalidade . "</p>";
	echo "<p><strong>E-mail:</strong> " . $email . "</p>";
	echo "<p><strong>Celular:</strong> " . $celular . "</p>";
	echo "<p><strong>Website/Blog:</strong> " . $website . "</p>";
	echo "<p><strong>Estado Civil:</strong> " . $estado_civil . "</p>";
	echo "<p><strong>Sexo:</strong> " . $sexo . "</p>";

	// alterar fundo da página de acordo com o sexo
	if ($sexo == "Feminino") {
		echo '<style>body {background-color: #f2cee6;}</style>';
	} else {
		echo '<style>body {background-color: #aedeff;}</style>';
	}

?>