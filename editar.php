<?php
	if ( !( isset($_GET['id']) && is_numeric($_GET['id']) ) )
		exit('Error 404.');
	
	require('conectar_db.php');
	/*Editar lo que tengo*/
	$id = $_GET["id"];
	
  $mysqli->query("UPDATE FROM to_do_list WHERE id=$id ");

	header('Location: editing.php?id='.$id);
?>

