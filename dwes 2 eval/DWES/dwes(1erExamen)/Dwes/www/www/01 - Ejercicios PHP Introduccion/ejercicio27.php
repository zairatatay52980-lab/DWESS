<?php


 $estudiantes = ["Roch", "Reggeton", "Pop", "Clasica", "Instrumental", "Jazz"];

 require "ejercicio27.view.php";




 function imprimir($estudiantes){

    foreach($estudiantes as $grupo){
        echo "Grupo: " . $grupo . "<br>";
    }

 }

?>