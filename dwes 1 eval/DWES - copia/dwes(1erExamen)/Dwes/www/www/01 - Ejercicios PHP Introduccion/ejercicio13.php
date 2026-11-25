<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

 <?php
   
   $animalesArray = ["Insectivoros","Patativoros","Mamiferos"];
   $coloresArray = ["Azul","Rojo","Negro","Blanco"];

   echo count($animalesArray);
   

 ?>
<br>
 <?php
    echo count($coloresArray);

 ?>
 
 <?php
    echo array_push($animalesArray,"Salmon");º

 ?>





 </body>
</html>