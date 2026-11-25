<!DOCTYPE html>
<html>
 <head>
 <title>PHP Test</title>
 </head>
 <body>

 <?php

$diccionario = [

        "user1" => [
            "nombre" => "Nora",
            "password" => "876876",
            "email" => "nora@php.net"
        ],
        "user2" => [
            "nombre" => "Andres",
            "password" => "000999",
            "email" => "andres@php.net"
            ]
 
    ];

 function getDatos($diccionario,$usuarioNombre,$obtenerD){

    return $diccionario[$usuarioNombre][$obtenerD];

 }

    echo getDatos($diccionario,"user1","email");



 ?>

 </body>
</html>