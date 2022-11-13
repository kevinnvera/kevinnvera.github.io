<html>
	<head>
		<title>Contactos</title>
		<meta charset="UTF-8" />
		<link href="hojadeestilos.css" rel="stylesheet" />
	</head>
	<body>

<?php
ini_set('display_startup_errors', '1');
ini_set('display_errors', '1');
error_reporting(E_ALL);

$sql = 'SELECT * FROM contactos';
$bd = new SQLite3('agenda.sqlite');
$resultado = $bd->query($sql);

$items = array();
while($item=$resultado->fetchArray(SQLITE3_NUM)){
	$items[] = $item;
}

$cantidad = count($items);
echo '<h1>Agenda</h1>';
echo '<h2>Lista de contactos</h2>';
echo '<a href="crear_contacto.html">Crear contacto</a>';
echo '<hr />';

echo '<table border="1">';
echo '<tr><th>Nombre</th><th>Número telefónico</th><th>Opciones</th></tr>';
for($i=0; $i<$cantidad; $i++){
	echo '<tr>';
	echo '<td>';
	echo $items[$i][1];
	echo '</td>';
	echo '<td>';
	echo $items[$i][2];
	echo '</td>';
	echo '<td>';
	echo '<a href="borrar_contacto.php?id='.$items[$i][0].'">Borrar</a>';
	echo '<br />';
	echo '<a href="cambiar_numero.php?id='.$items[$i][0].'">Cambiar número</a>';
	echo '</td>';
	echo '</tr>';
}
echo '</table>';

?>

</body>
</html>
