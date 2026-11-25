<?php
require 'db_functions.php';

//putas cookies 
if (!isset($_COOKIE["idioma"])) {
    setcookie("idioma", "es");
}
$idioma = $_COOKIE["idioma"] ?? "es";

function recogerPost(){
    return [
        "titulo" => $_POST["titulo"],
        "categoria" => $_POST["categoria"],
        "descripcion" => $_POST["descripcion"],
        "fecha" => $_POST["fecha"],
        "plazas_totales" => $_POST["plazas_totales"],
        "estado" => "abierto"
    ];
}

function redirect($url){
    header("Location:$url");
    die();
}

$accion = $_REQUEST["accion"] ?? null;

if($accion !== null){
    switch($accion){
        case "cambiarIdioma":
            $idioma = $_GET["idioma"];
            setcookie("idioma", $idioma);
            redirect("index.php");

        case "annadirEvento":            
            require 'views/annadirEvento.view.php';
            exit;
            
        case "guardarEvento":
            annadirEventoBD(recogerPost());
            redirect('index.php');
            break;

        case "detalleEvento": 
            $evento = detalleEvento($_GET["id"]);
            $asistentes = getAsistente($_GET["id"]);
            require 'views/detalleEvento.view.php';
            exit;

        case "cerrarEvento": 
            $id = $_GET["id"];
            updateEvento(["id" => $id, "estado" => "cerrado"]);
            redirect('index.php');

        case "eliminarEvento":
            $id = $_GET["id"];
            deleteEvento(["id"=>$id]);
            redirect('index.php');
    }

}

$eventos = getAll();
require 'views/index.view.php';