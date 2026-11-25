 <?php

 $paises = ["Brasil", "Portugal", "Islandia", "Mexico", "Filipinas", "Marruecos"];



 function encontarPosicion($paises,$paisBuscar){
    
        for($i = 0; $i <= count($paises);$i++){
            if($paisBuscar == $paises[$i])
                return $i;
        }
        return -1;
 }


 require "ejercicio22.view.php";

?>