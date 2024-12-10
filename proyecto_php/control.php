<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Redireccionando...</title>
</head>

<body>
	<?php
		if(isset($_POST["nombre_usuario"])){
			if(trim(strip_tags($_POST["nombre_usuario"]))==""){
				header("location:index.html");
				
			}else{
				session_start();
				$_SESSION["usuario"]=trim(strip_tags($_POST["nombre_usuario"]));
				$_SESSION["monstruo1"]="imagenes/monstruo" .rand(1,8). ".jpg";
				$_SESSION["monstruo2"]="imagenes/monstruo" .rand(1,8). ".jpg";
				$_SESSION["monstruo3"]="imagenes/monstruo" .rand(1,8). ".jpg";
				header("location:juego.php");
			}
		}else{
			header("location:index.html");
		}
	?>
</body>
</html>