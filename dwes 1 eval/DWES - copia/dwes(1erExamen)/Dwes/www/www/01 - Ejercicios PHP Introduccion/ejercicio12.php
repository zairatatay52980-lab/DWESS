<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

 <?php
    $nombresArray = ["Paris", "Berlin", "Amsterdam", "Praga"];

    function getValor($array, $posicion){
        return $array[$posicion];
    }

    function setValor($array, $posicion, $valor){
        $array[$posicion] = $valor;
        return $array;
    }


    echo getValor($nombresArray,0) ;

    print_r(setValor($nombresArray,0,"Madrid"));

    

 ?>
 






 </body>
</html>