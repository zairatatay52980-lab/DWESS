<?php


    if(isset($_GET["texto"])){
        $texto = $_GET["texto"];
        setcookie('usuario', $texto);
    }


        
    $usuario = $_COOKIE['usuario'] ?? null;
     



require "index.view.php";
?>