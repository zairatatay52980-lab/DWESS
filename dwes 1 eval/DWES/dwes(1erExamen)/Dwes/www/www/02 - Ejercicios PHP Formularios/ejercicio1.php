<?php
if (isset($_POST['temperatura'])) {
    
    $temperatura = $_POST['temperatura'];
    $unidad = $_POST['unidad'];

    if ($unidad == "celsius") {
        $resultado = ($temperatura * 1.8) + 32;
        echo "<h3>Resultado de la conversión ($temperatura celsius): $resultado</h3>";
    } 
    
    if ($unidad == "fahrenheit") {
        $resultado = ($temperatura - 32) / 1.8;
        echo "<h3>Resultado de la conversión ($temperatura fahrenheit): $resultado</h3>";
    }
}


require "ejercicio1.view.php";

?>
