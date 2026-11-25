<?php
session_start();

if (!isset($_SESSION["asistentes"])) {
    $_SESSION["asistentes"] = [];
}

if (isset($_GET["nombre"]) && $_GET["nombre"] !== "") {
    $nombre = trim($_GET["nombre"]);
    $_SESSION["asistentes"][] = $nombre;
    header("Location: index.php");
    exit;
}

if (isset($_GET["vaciar"])) {
    $_SESSION["asistentes"] = [];
    header("Location: index.php");
    exit;
}

require "index.view.php";
?>