<html>
    <head>
        <title>ejercicio 25 </title>
    </head>
    <body>
        <h1>Estudiantes</h1>

        <ul>
            <?php $i = 0;
            while($i < count($estudiantes)){
               
            
            ?>

            <li><?= $estudiantes[$i]?></li>

            <?php $i++; } ?>
        
        </ul>
     
    </body>
</html>