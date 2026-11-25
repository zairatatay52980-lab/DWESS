<?php
session_start();

$usuarios = [
    "zaira" => "1234",
    "admin" => "adminpass",
    "usuario" => "pass"
];

if (!isset($_SESSION["intentos"])) {
    $_SESSION["intentos"] = 0;
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

if ($_SESSION["intentos"] >= 3) {
    $bloqueado = true;
}

if (isset($_POST["usuario"]) && isset($_POST["password"]) && !isset($bloqueado)) {

    $user = $_POST["usuario"];
    $pass = $_POST["password"];

    if (isset($usuarios[$user]) && $usuarios[$user] === $pass) {
        $_SESSION["login"] = $user;
        $_SESSION["intentos"] = 0; 
        header("Location: index.php");
        exit;
    } else {
        $_SESSION["intentos"]++;
        $error = "Usuario o contraseña incorrectos";
    }
}


require "index.view.php";


?>