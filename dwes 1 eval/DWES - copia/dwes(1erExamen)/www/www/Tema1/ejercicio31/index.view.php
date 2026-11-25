<html>
    <head>
        <title>ejercicio 30</title>
    </head>
    <body>
        <h3>Notas</h3>

        <ul>
            <?php foreach($estudiantes as $nombre => $nota){
            ?>

            <li>La nota media de <?=$nombre?> es <?=$nota?></li>

            <?php } ?>
        
        </ul>
     
    </body>
</html>