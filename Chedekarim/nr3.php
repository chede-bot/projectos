<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nr 3</title>
</head>
<body>
    <?php

// array bidimensional com lista de animais
$animais = array(
  "Peixes" => array("tilapia", "golfinho", "piranha", "garoupa", "sardinha", "carapau"),
  "Mamíferos" => array("homem", "cao", "boi", "macaco", "urso", "raposa", "leao"),
  "Aves" => array("rouxinol", "sabia", "gaivota", "aguia", "galinha", "pato", "pombo")
);

// animais em cada classe em ordem alfabética decrescente
foreach ($animais as $classe => $lista) {
  rsort($animais[$classe]);
}

foreach ($animais as $classe => $lista) {
  echo "<h3>" . $classe . "</h3>";
  echo "<ul>";
  foreach ($lista as $animal) {
    echo "<li>" . $animal . "</li>";
  }
  echo "</ul>";
}

// número de animais em cada classe
echo "<h2>Numero de animais em cada classe</h2>";
foreach ($animais as $classe => $lista) {
  echo "<p>A classe " . $classe . " tem " . count($lista) . " animais.</p>";
}

?>
</body>
</html>