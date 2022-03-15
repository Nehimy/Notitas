<?php
	require('conectar_db.php');
	$resultado = $mysqli->query("select * from libros limit 0,5");
	print_r($resultado);
	$aux = $resultado->fetch_assoc();
	echo $nota['title'].": ". $contenido["contenido"];
	/*for($i=1 ;$i<= 5; $i++){
    		$nota = $resultado->fetch_assoc();
    		echo $nota['title'].": ". $contenido["contenido"];
  }*/
?>
