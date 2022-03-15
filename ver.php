<?php
	if ( !( isset($_GET['id']) && is_numeric($_GET['id']) ) )
		exit('Error 404.');
	
	require('conectar_db.php');
		
	$id = $_GET['id'];
	$resultado = $mysqli->query("SELECT * FROM to_do_list WHERE id='$id'");
	
	if ($post = $resultado->fetch_assoc()):
		?>
		<html>
			<head>
				<meta charset="UTF-8">
				<link rel="stylesheet" href="style.css">
				<link href="http://fonts.cdnfonts.com/css/snappy-dresser" rel="stylesheet">
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sniglet|Raleway:900">
						
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
			 	<link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
			</head>
			<body>
				<div class="contenedor1_form" id="contenedor1">
					<div id="contenedor2">
						<a id="titulo"href="index.php"> <h1>Notitas</h1></a>
						<!--<h1>To do list</h1> -->
						<h3><?=$post['title']?></h3>
						
						<h4 class="text"><?=$post['contenido']?></h4>
						<a id="botton" href="editar.php?id=<?php echo $post["id"] ?>">Editar</a>
						<a id="botton" href="eliminar.php?id=<?php echo $post["id"] ?>">Eliminar</a>
						<!--<a id="botton" href="index.php?<?php echo $post["id"] ?>">Inicio</a> -->
					</div>
				</div>
			</body>
		</html>
	<?php
endif;
