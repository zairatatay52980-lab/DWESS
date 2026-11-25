<?php


 $estudiantes = array(
    "Eathan" => 6.5,
    "Andres" => 7.4,
    "Garzon" => 9.1
);

function mostarMedias($estudiantes){
   foreach($estudiantes as $estud => $nota){
      echo ("La nota media de " . $estud . " es " . $nota . "<br>");
   }
}

    


 require "ejercicio30.view.php";

?>