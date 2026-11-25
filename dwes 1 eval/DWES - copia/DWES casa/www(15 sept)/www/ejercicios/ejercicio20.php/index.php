<?php 



function sumas($numero){
$suma= 0;

    for($i=0; $i <= $numero; $i ++){
        $suma += $i;
    }
    return $suma;
}



require "indexView.php";


?>