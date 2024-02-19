<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nr 1</title>
</head>
<body>
	<?php 
    $menu = array(
	'Inicio' => 'Inicio',
	'Sobre Nos' => array('Visao', 'Missao', 'Valores'),
	'Contactos' => 'Contactos',
	'Redes Sociais' => array('Facebook', 'Twitter', 'Instagram'),
);

echo '<ol>';

foreach ($menu as $key => $value) {
	echo '<li>';

	if (is_array($value)) {
		echo $key;
		echo '<ol>';
		foreach ($value as $subvalue) {
			echo '<li>' . $subvalue . '</li>';
		}
		echo '</ol>';
	}
	
	else {
		echo '<a href="#">' . $value . '</a>';
	}

	echo '</li>';
}

echo '</ol>';
?>

</body>
</html>