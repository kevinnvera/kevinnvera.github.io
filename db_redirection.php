<html>
	<head>
		<meta charset="utf-8">
		<link href="\styles\db_redirection_styles.css" rel="stylesheet" />
		<link href="\styles\icons\1.png" rel="shortcut icon" />
   		<title>Ferreteria</title>
		<META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://localhost/list.php">
		<style>
			.img{
			    width: 100px;
			}

			p{
				width: 800px;
			}


		</style>
	</head>

	<body>
		<div class="box-area">
			<header>
				<img src="\imagenes\logo 2.jpg" width="470px" class="imagenlogo">  
				<br/>
			</header>
		</div>
		<div class="content-area">
			<p>Cargando...</p>

<?php
ini_set('display_startup_errors', '1');
ini_set('display_errors', '1');
error_reporting(E_ALL);

$sql = 'INSERT INTO materiales (nombre, precio, medidas, codigo) VALUES ("';
$sql .= $_POST['nombre'];
$sql .= '", "';
$sql .= $_POST['precio'];
$sql .= '", "';
$sql .= $_POST['medidas'];
$sql .= '", "';
$sql .= $_POST['codigo'];
$sql .= '")';
///echo $sql;

$bd = new SQLite3('base.sqlite3');
$resultado = $bd->exec($sql);

if($resultado){
	echo ' ';
} else {
	echo 'Hubo un error: ';
	echo $bd->lastErrorMsg();
}

?>
		<img  class="img" src="\styles\images\obrero-04.gif">
		</div>
	</body>
</html>
	


