<?php


$usuarios = array(
    "user1" => array (
    "nombre" => "Ane",
    "apellidos" => "López",
    "password" => "123Abc"
    ),
    "user2" => array (
    "nombre" => "<user></user>",
    "apellidos" => "Otsoa",
    "password" => "456Xyz"
    )
);




if(isset($_POST["usuario"], $_POST["password"])){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $resultado = "El usuario no existe"; 


    foreach($usuarios as $user => $value){
        if($user === $usuario ){
            if($value["password"] === $password){
                $resultado = "Bienvenido/a:" . $value["nombre"] . " " . $value["apellidos"];
            } else {
                $resultado = "Contraseña incorrecta";
            }
            break;
        }
    }

    
}

require "ejercicio4.view.php";

?>