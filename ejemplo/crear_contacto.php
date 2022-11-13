<?php
ini_set('display_startup_errors', '1');
ini_set('display_errors', '1');
error_reporting(E_ALL);

$sql = 'INSERT INTO contactos (nombre, telefono) VALUES ("';
$sql .= $_POST['nombre'];
$sql .= '", "';
$sql .= $_POST['telefono'];
$sql .= '")';
// echo $sql;

$bd = new SQLite3('agenda.sqlite');
$resultado = $bd->exec($sql);

if($resultado){
	echo 'Contacto guardado correctamente';
	echo '<br /><a href="lista.php">Ir a la lista</a>';
} else {
	echo 'Hubo un error: ';
	echo $bd->lastErrorMsg();
}
