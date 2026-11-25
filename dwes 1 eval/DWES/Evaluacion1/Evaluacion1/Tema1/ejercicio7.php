<!DOCTYPE html>
<html>
    <?php

        

        /*funcion multiplicar */
        function multiplicar($a , $b) {
            return $a * $b ;
        }
        
        /*declaro variables a y b*/
        $a = $_GET["a"];
        $b = $_GET["b"];

        $resultado = multiplicar($a , $b);

        echo "Resultado de $a x $b es $resultado .";

        ?>




</html>