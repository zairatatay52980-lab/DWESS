<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

    <lu>
        <?php
            for($i = 0;$i < count($estudiantes);$i++){
        ?>
                <li id=<?=$i?>><?=$estudiantes[$i]?></li>
        <?php
            }
        ?>
    </lu>

 </body>
</html>