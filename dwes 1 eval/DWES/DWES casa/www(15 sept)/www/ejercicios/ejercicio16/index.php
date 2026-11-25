<?php 
$diccionario = array(
    
    "jvadillo" => array(
        "Nombre" => "Jon",
        "Apellidos" => "Vadillo",
        "Email" => "jvadillo@egibide.org",
    ),
    "jlopez" => array(
        "Nombre" => "Juan",
        "Apellidos" => "Lopez",
        "Email" => "jlopez@egibide.org",
    )

);


function getDatos($diccionario, $usuario, $dato){

    return $diccionario[$usuario][$dato];

}

$resultado = getDatos($diccionario, "jvadillo", "Apellidos");

require "indexView.php";



?>