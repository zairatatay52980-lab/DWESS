<?php

    $mensajeFinal = "";

    $asunto = $_POST["asunto"];
    $email = $_POST["email"];

    $motivo = $_POST["motivo"];

    $mensaje = $_POST["mensaje"];

    if(empty($asunto) || empty($email) || empty($motivo) || empty($mensaje)){
        $mensajeFinal = "Error: Hay que completar todos los campos del formulario";
    } else {
        $mensajeFinal .= "Asunto: " . $asunto. "<br>" . 
                            "Email: ".  $email . "<br>". 
                            "Motivo " . $motivo ."<br>".
                            "Mensaje " . $mensaje;
    }
    
    require "ejercicio3.view.php";

?>