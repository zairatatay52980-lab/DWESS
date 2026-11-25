<?php 

function convertirTemperatura(float $temperatura, string $unidad): float
{
    if ($unidad === 'celsius') {
        $conversion = 1.8 * $temperatura + 32;
    } else {
        $conversion = ($temperatura - 32) / 1.8;
    }
    return round($conversion, 2);
}

$resultado = null;
$temperatura = null;
$unidad = null;


if (isset($_GET["temperatura"]) && isset($_GET["unidad"])) {
    $temperatura = (float) $_GET["temperatura"];
    $unidad = $_GET["unidad"];
    $resultado = convertirTemperatura($temperatura, $unidad);
}

require "index.View.php";
?>