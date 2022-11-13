<html>
	<head>
		<meta charset="utf-8">
		<link href="\styles\list_styles.css" rel="stylesheet" />
		<link href="\styles\icons\1.png" rel="shortcut icon" />
   		<title>Ferreteria</title>
		<style>
			table{
				border: 1px solid #00000036;
				border-collapse: collapse;
				padding: 10px;
				background-color: white;
				font-size: 12px;
				margin: 0 auto;
				margin-top: 35px;

			}

			td{
				padding: 10px;
				color: #00000099;
				font-family: monospace;
			}

			th{
				padding: 10px;
				color: #000000c9;
				font-family: monospace;

			}

			.delete-button{
				padding: 5px;
   				background-color: red;
   				border-radius: 5px;
				color: white;
   				font-size: 13px;
   				margin: 0 AUTO;
   				text-decoration: solid;	
				font-family:monospace;
			}
		
			.vinculo{
   				 margin-left: 10px;
   				 font-family: monospace;
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
		<a class= "vinculo" href="index.html">Añadir Material</a>

<?php

ini_set('display_startup_errors', '1');
ini_set('display_errors', '1');
error_reporting(E_ALL);

$sql = 'SELECT * FROM materiales';
$bd = new SQLite3('base.sqlite3');
$resultado = $bd->query($sql);
echo '<br/>';
$items = array();
while($item=$resultado->fetchArray(SQLITE3_NUM)){
	$items[] = $item;
}

$cantidad = count($items);

echo '<table border="1">';
echo '<tr><th>Nombre</th><th>Precio</th><th>Medidas</th><th>Codigo</th><th>Opciones</th></tr>';
for($i=0; $i<$cantidad; $i++){
    /*echo '<br>';*/
	echo '<tr>';
	echo '<td>';
	echo $items[$i][1];
	echo '</td>';
	echo '<td>';
	echo $items[$i][2];
	echo '</td>';
	echo '<td>';
	echo $items[$i][3];
	echo '</td>';
	echo '<td>';
	echo $items[$i][4];
	echo '</td>';
	echo '<td>';
	echo '<a class="delete-button" href="db_delete.php?id='.$items[$i][0].'">BORRAR</a>';
	echo '</td>';
	echo '</tr>';
}
echo '</table>';

?>
            <br/>

		</div>

	</body>
</html>
	


