<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

 <?php

 function dintintoIgual($num1, $num2){

    if($num1 != $num2)
        return $num1 + $num2;
    else 
        return $num1 * $num2;
 }


 $num1 = $_GET["num1"];
 $num2 = $_GET["num2"];

 echo dintintoIgual($num1,$num2);


 ?>

 </body>
</html>