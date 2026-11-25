<!DOCTYPE html>
<html>
    <?php

        /*declaro variables a y b*/
        $a = $_GET["a"];
        $b = $_GET["b"];

        /*funcion multiplicar */
        function multiplicar($a , $b) {
            return $a * $b ;
        }

        $resultado = multiplicar($a , $b);

        echo "Resultado de $a x $b es $resultado .";

        ?>




</html>