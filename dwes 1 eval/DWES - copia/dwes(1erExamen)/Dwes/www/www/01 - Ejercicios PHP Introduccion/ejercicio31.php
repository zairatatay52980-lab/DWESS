<?php
 $estudiantes=[];

function generarArray($estudiantes,$longitud){

    for($i = 0;$i < $longitud;$i++){
        $estudiantes[$i] = random_int(1, 999);
    }

    return $estudiantes;

}

 require "ejercicio31.view.php";

?>