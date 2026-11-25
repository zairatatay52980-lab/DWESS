<?php

require 'db_functions.php';

function getFromPost(){
    return [

        "titulo" => $_POST["titulo"],
        "categoria" => $_POST["categoria"],
        "descripcion" => $_POST["descripcion"],
        "fecha" => $_POST["fecha"],
        "plazas_totales" => $_POST["plazas_totales"],
        "estado" => "abierto"
    ];
}

//funcion redirect
function redirect($url){
    header("Location: $url");
    exit;
}

$accion = $_REQUEST["accion"] ?? null;

if($accion !== null){
    switch($accion){

        case "detalleEvento":
            $evento = detalleEvento($_GET["id"]);
            $asistentes = mostrarAsistentes($_GET["id"]);
            require 'views/detalleEvento.view.php';
            exit;
        
        case "nuevoEvento":
            require 'views/nuevoEvento.view.php';
            exit; 

        case "guardarEvento":
            guardarEvento(getFromPost());
            redirect('index.php');
            break;

        case "eliminarEvento" :
            $id = $_GET["id"];
            deleteEvento(["id"=>$id]);
            redirect('index.php');
            break;

        case "cerrarEvento" : 
            $id=$_GET["id"];
            updateEvento(["id"=> $id, "estado" => "cerrado"]);
            redirect('index.php');
            break;
            

       
    }
}








$eventos = getAll();
require 'views/index.view.php';







