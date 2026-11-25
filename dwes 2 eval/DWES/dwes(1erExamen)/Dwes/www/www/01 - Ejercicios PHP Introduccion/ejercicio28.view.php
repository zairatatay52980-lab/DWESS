<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

    <ul>
        
    <?php
        foreach($estudiantes as $estu){
    ?>
            <li> <?= $estudiantes[$estu] ?> </li>
    <?php
        }
    ?>

    </ul>

 </body>
</html>