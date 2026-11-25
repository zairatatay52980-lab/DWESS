<html>
    <head>
        <title>ejercicio 23 </title>
    </head>
    <body>
        <h1>Estudiantes</h1>

        <ul>
        <?php for($i = 0 ; $i <count($estudiantes) ; $i++){
            ?>

            <li id= <?= $i ?>><?= $estudiantes[$i]?></li>

        <?php
        }
        ?>
        
        </ul>
     
    </body>
</html>