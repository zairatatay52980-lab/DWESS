<!DOCTYPE html>

<html>

    <?php
    /*declaracion variables*/
    $a = $_GET["a"];
    $b = $_GET["b"];

    /* funciones */

    function resta($a , $b){
        
        return $a - $b;
    }

    function division($a , $b){

        return $a / $b ;
    }

    function comparacionMayor($a , $b){

        return $a > $b;
    }

    function comparacionMenorIgual($a , $b){

        return $a <= $b;
    }

        $resultadoResta = resta($a , $b);
        $resultadoDivision = division($a , $b);
        $comparacionMayor = comparacionMayor($a , $b);
        $comparacionMenorIgual = comparacionMenorIgual($a , $b);
        
    echo "Resta : $resultadoResta <br>"; 
    echo "Division : $resultadoDivision <br> ";

    echo "a mayor que b : ";
    var_export($comparacionMayor);
    echo " <br> a menor o igual a b : ";
    var_export($comparacionMenorIgual); 
    
    ?>




</html>