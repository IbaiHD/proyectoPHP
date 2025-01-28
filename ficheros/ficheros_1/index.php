<html>
<head>
    <title>EJ-1 FICHEROS - php</title>
</head>

<body>

<form action = "index.php" method = "post">
    <p><label>Introduce la cadena de b&uacute;squeda</label><p>
    <input type="text" name="busqueda">
    <input type="submit" value="Buscar">
</form>

    <?php

if (isset($_POST["busqueda"])){
    if(trim(strip_tags($_POST["busqueda"])) == ""){
        echo "Búsqueda vacía, vuelva a la página anterior";
    }else{

        $busqueda = trim(strip_tags($_POST["busqueda"]));
        $fichero = fopen("fichero.txt", "r");
    
        while(!feof($fichero)){
            $linea = trim(fgets($fichero));
            if ($linea == $busqueda) echo "<b>" . $linea . " </b>";
            else echo $linea . " ";
        }
        fclose($fichero);
    }

}else{
    echo "Búsqueda vacía, vuelva a la página anterior y rellene el formulario";
}


?>

<p><button><a href="index.html">Volver</a></button></p>
</body>
</html>