<?php
ini_set('display_errors', '1');
ini_set('display_statrup_errors', '1');
error_reporting(E_ALL);

$sql= 'DELETE FROM materiales WHERE id='.$_GET['id'];
$bd = new SQLite3('base.sqlite3');
$resultado = $bd->exec($sql);

if($resultado){
	echo "Se eliminó el registro";
	header('Location: list.php'); // Llevarnos a la lista
	}else{
	echo 'Hubo un error';
	}
