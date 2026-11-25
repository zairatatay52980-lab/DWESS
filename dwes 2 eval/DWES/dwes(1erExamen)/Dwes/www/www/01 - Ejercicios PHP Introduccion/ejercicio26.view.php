<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

    <ul>
        
    <?php
    $i = 0;
        do{
    ?>
            <li id=<?= $i?>> <?= $estudiantes[$i] ?> </li>
    <?php
        $i++;
        }while($i < count($estudiantes))
    ?>

    </ul>

 </body>
</html>