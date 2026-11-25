<html>
    <head>
        <title>ejercicio 26 </title>
    </head>
    <body>
        <h1>Coches</h1>

        <ul>
            <?php  $i = 0;
            
                do{

            ?>

            <li><?=  $coches[$i]?></li>

            <?php 
            $i++;
            
            } while($i < count($coches)); ?>
        
        </ul>
     
    </body>
</html>