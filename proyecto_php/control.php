<!doctype html>
<html>
<head>
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
				$_SESSION["monstruo1"]=rand(1,8);
				$_SESSION["monstruo2"]=rand(1,8);
				$_SESSION["monstruo3"]=rand(1,8);
				$_SESSION["creditos"]=0;
				
				header("location:juego.php");
			}
		}else{
			header("location:index.html");
		}
	?>
</body>
</html>