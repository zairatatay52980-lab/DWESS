 <?php

function calcular(float $n1, float $n2 ,string $operacion){
    switch ($operacion){
        case "suma": 
            return $n1 + $n2;
        case "resta":
            return $n1 - $n2;
        case "multiplicacion":
            return $n1*$n2;
        case "division":
            if($n2 == 0){
                return "no se puede dividir entre 0";
            }else{
                return $n1/$n2;
            }
            
        }
}

$resultado = null;

    if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["operacion"])){

        $n1 = (float) $_POST["numero1"];
        $n2 = (float) $_POST["numero2"];
        $operacion = (string) $_POST["operacion"];

        $resultado = calcular($n1 , $n2 , $operacion);

    }

    require "index.view.php";
    






?>