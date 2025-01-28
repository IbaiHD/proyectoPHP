<html>
<head>
    <title>EJ-3 FICHEROS - html</title>
</head>

<body>

<table>
        <tr>
            <td>
                <a href="index.html">inicio</a>
            </td>
            <td>
                <a href="insertar.php">insertar</a>
            </td>
            <td>
                <a href="borrar.php">borrar</a>
            </td>
            <td>
                <a href="multiplos.php">multiplos</a>
            </td> 
            <td>
                <a href="buscar.php">buscar</a>
            </td>              
        </tr>
        <tr>
            <td>
                <a href="mostrar.php">mostrar</a>
            </td>
            <td>
                <a href="sumatorio.php">sumatorio</a>
            </td>
            <td>
                <a href="ordenar.php">ordenar</a>
            </td>
            <td>
                <a href="invertir.php">invertir</a>
            </td>            
            <td>
                <a href="quitarduplicados.php">quitar duplicados</a>
            </td>   
        </tr>
    </table>

<form action="insertar.php" method="post">
    <p>Mete un numero: <input type="number" name="insertar"><input type="submit" value="Enviar"></p>
</form>

<?php

if(isset($_POST["insertar"]) && trim(strip_tags($_POST["insertar"])) != ""){

    $fichero = fopen("fichero.txt","a");

    $texto = trim(strip_tags($_POST["insertar"]));

    fwrite($fichero, $texto);

    fclose($fichero);

    echo "N&uacute;mero insertado correctamente.";

}

?>

</body>
</html>