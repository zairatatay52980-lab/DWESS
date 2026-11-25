<?php 

$usuario = $_GET["usuario"];
$contraseña = $_GET["contraseña"];

$usuarios = [
    "user1" => [
        "nombre"=> "Zaira",
        "contraseña" => "1234",
        "email" => "zaira@php.net"
    ],
    "user2" => [
        "nombre"=> "Eathan",
        "contraseña" => "12345",
        "email" => "eathan@php.net"
    ]

];

function ifExiste($usuario , $contraseña){
    //no 
    //$password != $usuarios[$usuario]["password"]
    if (!array_key_exists($usuario, $usuarios)){
        echo "No existe el usuario";
    }elseif($contraseña != $usuarios[$usuario]["contraseña"]){
            echo "La contraseña es incorrecta";
    }
        
    }

    $resultado = ifExiste($usuario, $contraseña);

    require "indexView.php";

?>