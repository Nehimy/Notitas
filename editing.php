<?php
if ( !( isset($_GET['id']) && is_numeric($_GET['id']) ) )
		exit('Error 404.');
	
	require('conectar_db.php');
	/*Editando*/
	$id = $_GET['id'];
	$resultado = $mysqli->query("SELECT * FROM to_do_list WHERE id='$id'");
	
	if ($fila = $resultado->fetch_assoc()):
	?>
	<html>
		<head>
			<meta charset="utf-8">
    	<link rel="stylesheet" href="style.css">
    	<link href="http://fonts.cdnfonts.com/css/snappy-dresser" rel="stylesheet">
   		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sniglet|Raleway:900">
    		
   		<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
			<link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
		</head>
		<body>
		  <!-- Escribir nueva publicación -->
			<div id="contenedor1">
				<div id="contenedor2">		  
					<form action="guardando.php" method="post">
						<h3>Título:</h3>
						<br>
						<input id="cajaDeText" type = "text" name = "titulo" value= "<?php echo $fila["title"]?>" >
						<br>
						<h3>Contenido:</h3>
						<br>
					  <input name="id" type="hidden" type="text" value= <?php echo $fila["id"]?>> </input>
						<textarea id="cajaDeText" name="contenido" rows="10" cols="50"> <?php echo $fila['contenido'] ?> </textarea>
						<br>
						<input id="botton_input" type="submit" value="Guardar">		    
					</form>
				</div>
			</div>		
		</body>
	</html>
	<?php
endif;
