<?php 

$a = $_GET["a"];
$b = $_GET["b"];

function numeros($a , $b){
    if($a == $b){
        $multiplicacion = $a * $b;
        echo "$a y $b son iguales; El resultado al multiplicarlos es $multiplicacion .";
    }else {
        $suma = $a + $b;
        echo "$a y $b son distintos; El resultado al sumarlos es $suma .";
    }
}

$resultados = numeros($a , $b);

?>