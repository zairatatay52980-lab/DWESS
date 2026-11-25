<?php

function calcular(float $num1, float $num2, string $operacion) {
    switch ($operacion) {
        case 'suma':
            return $num1 + $num2;
        case 'resta':
            return $num1 - $num2;
        case 'multiplicacion':
            return $num1 * $num2;
        case 'division':
            if ($num2 == 0.0) {
                return null; // Error de división entre cero
            }
            return $num1 / $num2;
        default:
            return null;
    }
}

$resultado = null;
$error = null;

if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacion'])) {
    $num1 = (float) $_GET['num1'];
    $num2 = (float) $_GET['num2'];
    $operacion = $_GET['operacion'];

    if ($operacion === 'division' && $num2 == 0.0) {
        $error = "No es posible dividir entre cero.";
    } else {
        $resultado = calcular($num1, $num2, $operacion);
    }
}

require 'index.view.php';

?>