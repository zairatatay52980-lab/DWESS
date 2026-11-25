<html>
    <head>
        <title>ejercicio 30</title>
    </head>
    <body>
        <h3>Notas</h3>

        <ul>
            <?php foreach($numerosAleatorios as $numeros){
            ?>

            <li>El array generado es: <?=$numeros?></li>
            <li>El valor mas bajo: <?=$numeros?></li>
            <li>El valor mas alto: <?=$numeros?></li>


            <?php } ?>
        
        </ul>
     
    </body>
</html>