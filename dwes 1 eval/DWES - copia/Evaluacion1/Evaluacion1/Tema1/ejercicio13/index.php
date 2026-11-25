<?php
$pais = ['Paris', 'Berlin', 'Amsterdam', 'Praga'];


$posicion = $_GET["pais"];

function getValor($pais, $posicion){

    return $posicion;
}

echo "$posicion";


function setValor($pais, $posicion, $valor){
    return $pais.$posicion.$valor
}

echo "$pais.$posicion.$valor";


require "indexView.php";
?>


/**solucion */
