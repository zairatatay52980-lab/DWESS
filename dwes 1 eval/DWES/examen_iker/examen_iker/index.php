<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();


require_once "db_functions.php";

$usuarios = [
    "admin" => [
        "nombre" => "admin",
        "contrasena" => "1234"
    ]
];

function redirect($url){
    header("Location:$url");
    die();
}

function validarUsuario($usuario, $contrasena, $usuarios){

    if(array_key_exists($usuario, $usuarios) && $usuarios[$usuario]["contrasena"] === $contrasena){
        return 0;
    } else return 1;

}

function recogerGet(){
    return [
        "titulo" => $_GET["titulo"],
        "categoria" => $_GET["categoria"],
        "descripcion" => $_GET["descripcion"],
        "fecha" => $_GET["fecha"],
        "plazas_totales" => $_GET["plazas_totales"],
        "estado" => "abierto"
    ];
}

if(!isset($_COOKIE["idioma"])){
    setcookie("idioma", "es");
    $idioma = "es";
} else {
    $idioma = $_COOKIE["idioma"];
}


if(isset($_POST["accion"]) && $_POST["accion"] === "iniciarSesion"){
    $usuario = $_POST["usuario"] ?? "";
    $contrasena = $_POST["contrasena"] ?? "";
    $error = validarUsuario($usuario, $contrasena, $usuarios);

    if($error === 0){
        $_SESSION["usuario"] = $usuarios[trim($usuario)]["nombre"];
        redirect("index.php");
    }
}

if(isset($_GET["accion"])){
    switch($_GET["accion"]){
        case "cambiarIdioma":
            $idioma = $_GET["idioma"];
            setcookie("idioma", $idioma);
            redirect("index.php");
            
        case "iniciarSesion":
            $error = validarUsuario($_GET["usuario"], $_GET["contrasena"], $usuarios);
            if($error === 0){
                $_SESSION["usuario"] = $usuarios[$_GET["usuario"]]["nombre"];
                redirect("index.php");
            }
        break;
        case "cerrarSesion";
            session_destroy();
            redirect("index.php");

        case "cerrarEvento":
            $id = $_GET["id"];
            updateEvento(["id" => $id, "estado" => "cerrado"]);
            redirect("index.php");

        case "eliminarEvento": 
            $id = $_GET["id"];
            deleteEvento(["id" => $id]);
            redirect("index.php");

        case "nuevoEventoView":
            require "views/nuevoEvento.view.php";
            die();

        case "crearEvento":
            insertEvento(recogerGet());

            redirect("index.php");

        case "detalleEvento":
            $id = $_GET["id"];
            $evento = getEventoById(["id" => $id]);
            $asistentes = getAsistentesByEventoId(["evento_id" => $id]);
            require "views/detalleEvento.view.php";
            die();
    }
}

if(isset($_SESSION["usuario"])){
    $usuarioLogeado = $_SESSION["usuario"];
}

$eventos = getAll();
require "views/index.view.php";

?>