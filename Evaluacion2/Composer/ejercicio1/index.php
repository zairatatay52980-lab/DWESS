<?php

require __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

$timer = new Timer;

$timer->start();


for($i=0; $i < 100000; $i++){
    echo rand(1,1000) . " ";
}

echo "<br><br>";


$duracion = $timer->stop();


echo "terminado. Se generaron 100.000 numeros.<br>";
echo "Tiempo transcurrido: " . $duracion->asSeconds() . " segundos.";