<?php

if (isset($_GET["idioma"])) {
    $idioma = $_GET["idioma"];
    setcookie("idioma", $idioma, time() + 60); 
    header("Location: index.php");
    exit;
}

$idiomaGuardado = $_COOKIE["idioma"] ?? null;

require "index.view.php";

?>