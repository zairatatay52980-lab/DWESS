<?php


    if(isset($_GET["texto"])){
        $texto = $_GET["texto"];
        setcookie('usuario', $texto);
        exit;
    }      

    if(isset($_GET["borrar"])){
        setcookie('usuario', $texto, -1);
        exit;
    }

    $usuario = $_COOKIE["usuario"] ?? null;


require "index.view.php";
?>