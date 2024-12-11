<!doctype html>
<html>
<head>
<title>Juego - Ibai Helguera</title>
<link rel="stylesheet" href="css.css">
</head>

<body id="juego">
	<?php
		require "funciones.php";
		session_start();
		$fecha=date("d-m-Y");
		$premiado=false;
		
		if (!tiene_sesion()){ 
			header("location:index.html");
		}
		
		if(isset($_POST["credito"])){
			incrementar_credito();
		}

		if(isset($_POST["jugar"])){
			jugar($premiado);
		
		}
		
	?>
	
	<form action="" method="post">
		<table>
		
			<tr>
				<td id="alertas">	
					<?php if($_SESSION["creditos"] <= 0){ ?>
					<span id=alerta>Introduce más monedas</span>
					<?php	} ?>
					
					<?php if($premiado){ ?>
					<span id=felicitacion>PREMIO</span>
					<?php	} ?>
				</td>

			</tr>
			
			<tr>
				<th>COMBINACIÓN MÁGICA</th>
			</tr>
			
			<tr>
				<td>
					<img src="imagenes/monstruo<?php echo $_SESSION["monstruo1"]?>.jpg" id="monstruo_1" class="monstruo" alt="imagen_1">
					<img src="imagenes/monstruo<?php echo $_SESSION["monstruo2"]?>.jpg" id="monstruo_2" class="monstruo" alt="imagen_2">
					<img src="imagenes/monstruo<?php echo $_SESSION["monstruo3"]?>.jpg" id="monstruo_3" class="monstruo" alt="imagen_3">
				</td>
			</tr>
			
			<tr>
				<td><input type=submit name="credito" value="Incrementar Crédito">
					<span id="creditos"><?php echo $_SESSION["creditos"];?>
				</td>
			</tr>
			
			<tr>
				<td><input type=submit name="jugar" value="Probar Suerte"></td>
			</tr>
		
		</table>
	</form>
	<hr>
	<div id="info_usuario"><?php echo $_SESSION["usuario"]." ".$fecha ?></div>
	
</body>
</html>