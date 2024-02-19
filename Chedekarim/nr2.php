<html>
	<body>
	<h1>Formulário de Registro de Dados do Cidadão</h1>
	<form method="post" action="nr2pt2.php">
		<label for="nome">Nome Completo:</label>
		<input type="text" id="nome" name="nome" required><br><br>

		<label for="data_nascimento">Data de Nascimento:</label>
		<input type="date" id="data_nascimento" name="data_nascimento" min="1973-01-01" max="2002-12-31" required><br><br>

		<label for="filiacao">Filiação:</label>
		<input type="text" id="filiacao" name="filiacao" required><br><br>

		<label for="prov_cidade">Província/Cidade:</label>
		<input type="text" id="prov_cidade" name="prov_cidade" required><br><br>

		<label for="bairro">Bairro:</label>
		<input type="text" id="bairro" name="bairro" required><br><br>

		<label for="quarteirao">Quarteirão:</label>
		<input type="text" id="quarteirao" name="quarteirao" required><br><br>

		<label for="local_nascimento">Local de Nascimento:</label>
		<input type="text" id="local_nascimento" name="local_nascimento" required><br><br>

		<label for="nacionalidade">Nacionalidade:</label>
		<input type="text" id="nacionalidade" name="nacionalidade" required><br><br>

		<label for="email">E-mail:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="celular">Celular:</label>
		<input type="text" id="celular" name="celular"><br><br>

		<label for="website">Website/Blog:</label>
		<input type="text" id="website" name="website"><br><br>

		<label for="estado_civil">Estado Civil:</label>
		<select id="estado_civil" name="estado_civil" required>
			<option value="">Selecione</option>
			<option value="Solteiro(a)">Solteiro(a)</option>
			<option value="Casado(a)">Casado(a)</option>
			<option value="Divorciado(a)">Divorciado(a)</option>
			<option value="Viúvo(a)">Viúvo(a)</option>
		</select><br><br>

		<label for="sexo">Sexo:</label>
        	<input type="radio" id="masculino" name="sexo" value="Masculino" required>
	<label for="masculino">Masculino</label>
	<input type="radio" id="feminino" name="sexo" value="Feminino" required>
	<label for="feminino">Feminino</label><br><br>

	<input type="submit" value="Enviar">
</form>


</body>
<html>