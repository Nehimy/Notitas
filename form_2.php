<?php
	require('conectar_db.php');

	/*Obtengo los datos del html*/
	$titulo = $_POST["titulo"];
	$contenido = $_POST["contenido"];

	/*Guardar lo que acabo de obtener*/
	$mysqli->query("INSERT INTO	to_do_list (title,contenido) VALUES ('$titulo','$contenido')");
	
	/*mostar lo guardado*/
	$id = $mysqli->insert_id;
	header('Location: ver.php?id='.$id);

