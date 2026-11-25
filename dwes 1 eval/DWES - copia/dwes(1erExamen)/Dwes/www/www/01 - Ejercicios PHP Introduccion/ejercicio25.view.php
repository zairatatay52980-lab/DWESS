<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

    <ul>
        
    <?php
    $i = 0;
        while($i < count($estudiantes)){
    ?>
            <li id=<?= $i?>> <?= $estudiantes[$i] ?> </li>
    <?php
        $i++;
        }
    ?>

    </ul>


    
    



 </body>
</html>