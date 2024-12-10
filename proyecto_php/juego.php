<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Juego</title>
</head>

<body>
	<?php
		session_start();
		$creditos=0;
		$nombre="hola";
		$fecha=date("d-m-Y");
	?>
	<h4>COMBINACIÓN MÁGICA</h4>
	<img src="<?php echo $_SESSION["monstruo1"]?>" id="monstruo_1" class="monstruo" alt="imagen_1">
	<img src="<?php echo $_SESSION["monstruo2"]?>" id="monstruo_2" class="monstruo" alt="imagen_2">
	<img src="<?php echo $_SESSION["monstruo3"]?>" id="monstruo_3" class="monstruo" alt="imagen_3">
	<br>
	<input type=button name="credito" value="Incrementar Crédito">
	<div id="cantidad_cretidos"><?php echo $creditos?></div>
	<br><br>
	<input type=button name="jugar" value="Probar Suerte">
	<br><br>
	<hr>
	<div id="info_usuario"><?php echo $_SESSION["usuario"]." ".$fecha ?></div>

</body>
</html>