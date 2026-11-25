<?php 

$paises = ["Brasil","Portugal","Islandia","Mexico","Filipinas","Marruecos"];

function comprobarArray($paises,$paisBuscar){

    for ($i = 0 ; $i<=$paises ; $i++ ){
        if($paisBuscar === $paises[$i]){
            return $i;
        }
        return -1;
    }

}



require "indexView.php";




?>