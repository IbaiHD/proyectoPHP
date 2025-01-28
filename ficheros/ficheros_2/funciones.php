<?php

function mostrarLineas(){
    $fichero = fopen("fichero.txt", "r");
    $num_lineas = 0;

    while(!feof($fichero)){
        $linea = fgets($fichero);
        $num_lineas++;
    }
    fclose($fichero);

    return $num_lineas;
}

function mostrarLetras(){
    $fichero = fopen("fichero.txt", "r");
    $num_letras = 0;

    while(!feof($fichero)){
        $letras = fgets($fichero);
        $letras = preg_replace('/\s+/',"",$letras);
        $num_letras += strlen($letras);
    }

    fclose($fichero);

    return $num_letras;
}

?>