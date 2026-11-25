<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 9</title>
</head>
<body>
    <?php
    $a = $_GET["a"];
    $b = $_GET["b"];

    function esMayor($a , $b){
        return $a > $b ;
    }

    $comparacionMayor = esMayor($a, $b);

    echo "$a es mayor que $b ?: "; var_export($comparacionMayor);
    
    ?> 

</body>
</html>