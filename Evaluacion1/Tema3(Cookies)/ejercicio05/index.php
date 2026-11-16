<?php

session_start();

$usuarios =[

    $usuario = [
        "nombreUser" => "user1",
        "contraseña" => "123123"
    ]

    ];



    if(isset($_GET["logout"])){
        unset($_SESION["login"]);
        header("Location:index.php");
        exit;
    }

function iniciarLoggin($usuarios){
    if(isset($_GET["usuario"]) && isset($_GET["contraseña"])){
        $user = $_GET["usuario"];
        $password = $_GET["contraseña"];

        if(isset($usuarios[$user]) && $usuarios[$user] == $password){
            $_SESSION["login"]= $user;
            header("Location: index.php");
            exit;
        }else{
            $error="Usuario o contraseña incorrectos";
        }

    }


}

if (isset($_SESSION["login"])){
    header("Location: loggin.view.php");
    require "loggin.view.php";
}

require "index.view.php";


/*
session_start();

$usuarios = [
    "usuario" => "user1",
    "password" => "1234"
];

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $user = $_POST["usuario"];
    $pass = $_POST["password"];

    if (isset($usuarios[$user]) == $pass ) {
        $_SESSION["login"] = $user; 
        header("Location: index.php");
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}

if (isset($_SESSION["login"])){
    header("Location: loggin.view.php");
    require "loggin.view.php";
}

require "index.view.php";
*/

?>

