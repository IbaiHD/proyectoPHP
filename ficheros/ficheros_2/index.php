<html>
<head>
    <title>EJ-2 FICHEROS - php</title>
</head>

<body>

<?php require "funciones.php"; ?>

<form action = "index.php" method = "post">
    <p><label>¿Qu&iacute;eres saber cu&aacute;ntas l&iacute;neas tiene el fichero?</label><p>
    <input type="submit" value = "¡S&iacute;!" name="lineas">  
        <?php
        if(isset($_POST["lineas"]) && trim(strip_tags($_POST["lineas"])) != ""){
            $num_lineas = mostrarLineas();
            echo $num_lineas;
        }
        ?>

    <p><label>¿Y cu&aacute;ntas letras tiene?</label><p>
    <input type="submit" value = "Tambi&eacute;n" name="letras">
        <?php

        if(isset($_POST["letras"]) && trim(strip_tags($_POST["letras"])) != ""){
            $num_letras = mostrarLetras();
            echo $num_letras;
        }


        ?>
</form>
</body>
</html>