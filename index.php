<?php
	require('conectar_db.php');

	if(isset($_GET["pg"]) && is_numeric($_GET["pg"]) && $_GET["pg"]>0 ){
		$pg = $_GET["pg"];
	}else{
		$pg=1;
	}


	$initial_position = ($pg-1)*5;
	#$resultado = $mysqli->query("select * from to_do_list");
	$resultado = $mysqli->query("select * from to_do_list limit $initial_position,5");
	#$resultado = $mysqli->query("SELECT title, contenido FROM to_do_list");
	
	if ($resultado->num_rows == 0) {
		header('Location: ./index.php');
		exit();
	}
	
	if (isset($resultado)){
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
    		<!-- Indie Flower -->
				
			</head>
			<body>
				<div id="contenedor1">
					<div id="contenedor2">
						<a id="titulo"href="index.php"> <h1>Notitas</h1></a>
						<!--<h1>To do list</h1> -->
						<a id="NewPost" href="form.html">New</a>
			<?php
 			while($nota = $resultado->fetch_assoc()){
		  	?>  		
		  	<!-- <hr> -->  	
		  		<div class="contenedor3">
						<h3> <?=$nota['title'] ?> </h3>
			 			<p> <?=$nota['contenido'] ?> </p>
			 			 
			 			<a id="botton" href="ver.php?id=<?php echo $nota["id"] ?>">Ver</a>
			 			<a id="botton" href="editar.php?id=<?php echo $nota["id"] ?>">Editar</a>
						<a id="botton" href="eliminar.php?id=<?php echo $nota["id"] ?>">Eliminar</a>
					</div>
		  	<?php
		  }
    	?>
    		<!--<a id="botton" href="pagina.php?num=<?php echo "1"."&i=".$i?>">Next</a> -->
    		
    		<a id="botton" href="index.php?pg=<?php echo $pg+1 ?>">Next</a>
    	<?php
    
   }
     
	?>
				
			</div>
		</div>
	</body>
</html>
