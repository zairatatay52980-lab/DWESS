<?php

$datos = null;
$error = null;

if(empty($asunto)||empty($nombre)||empty($email)||empty($motivo)||empty($mensaje)){
    $error = "Por favor rellene todos los campos ";
}else{
    $datos = [
        $asunto = $_POST["asunto"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $motivo = $_POST["motivo"];
        $mensaje = $_POST["mensaje"];

    ];
}


function recogerDatos($datos){
    
}






?>