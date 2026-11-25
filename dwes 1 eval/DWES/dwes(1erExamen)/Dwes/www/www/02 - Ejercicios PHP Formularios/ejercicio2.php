<?php

    $ultimoResultado = "";

    if(isset($_POST["numeroUno"]) || isset($_POST["numeroDos"])){

        $numero1 = $_POST["numeroUno"];
        $numero2 = $_POST["numeroDos"];
        $operacion = $_POST["operacion"];
        
        switch($operacion){
            case "suma":
                $ultimoResultado = $numero1+$numero2;
                echo "La suma de " . $numero1 ." mas " . $numero2 . " es: " . $ultimoResultado;
                break;
            case "resta":
                $ultimoResultado = $numero1-$numero2;
                echo "La resta de " . $numero1 ." menos " . $numero2 . " es: " . $ultimoResultado;
                break;
            case "multiplicacion":
                $ultimoResultado = $numero1*$numero2;
                echo "La multiplicacion de " . $numero1 ." por " . $numero2 . " es: " . $ultimoResultado;
                break;
            case "division":
                if($numero2 != 0){
                    $ultimoResultado = $numero1/$numero2;
                    echo "La division de " . $numero1 ." entre " . $numero2 . " es: " . $ultimoResultado;
                }else{
                    echo "Error: No se puede dividir entre 0";
                    $ultimoResultado = "Error";
                }
                break;
            default:
                echo "Opcion de operacion incorrecta";
        }

    }

    require "ejercicio2.view.php";

?>