<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

 
 
 <?php 

 $a = $_GET["a"];
 $b = $_GET["b"];

function esMayor($num1,$num2){
      return $num1 > $num2;
   }
   $si = esMayor(3,2);
 


   $resta = $a - $b;

   echo "Resta resultado: {$resta} <br>";
   echo "Es mayor: ";
   var_export($si);

?>






 </body>
</html>