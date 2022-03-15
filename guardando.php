<?php
	require('conectar_db.php');

	$titulo = $_POST["titulo"];
	$contenido = $_POST["contenido"];

	/*Guardar lo que acabo de obtener*/
	$id = $_POST["id"];
	#$resultado = $mysqli->query("INSERT INTO	to_do_list WHERE id=$id (title,contenido) VALUES ('$titulo','$contenido')");
	#$resultado = $mysqli->query("UPDATE to_do_list  WHERE id=$id SET title='$titulo', contenido='$contenido'");
	
	$resultado = $mysqli->query("UPDATE to_do_list  SET title='$titulo', contenido='$contenido' WHERE id=$id");

	/*mostar lo guardado*/
	#$id = $mysqli->insert_id;
	header('Location: ver.php?id='.$id);

?>
