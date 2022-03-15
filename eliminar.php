<?php
	require('conectar_db.php');
	
	if ( !( isset($_GET['id']) && is_numeric($_GET['id']) ) )
	exit('Error 404.');
	
	$id = $_GET["id"];
	$mysqli->query("DELETE FROM to_do_list WHERE id='$id'");
	
	header('Location: index.php');
	


?>
