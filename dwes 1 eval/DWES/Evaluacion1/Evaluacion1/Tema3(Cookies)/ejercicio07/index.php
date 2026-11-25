<?php
session_start();

$productos = [
    1 => ["nombre" => "Camiseta", "descripcion" => "Camiseta de algodón", "precio" => 15],
    2 => ["nombre" => "Pantalón", "descripcion" => "Pantalón vaquero", "precio" => 35],
    3 => ["nombre" => "Sudadera", "descripcion" => "Sudadera con capucha", "precio" => 40],
    4 => ["nombre" => "Zapatillas", "descripcion" => "Zapatillas deportivas", "precio" => 60]
];

if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = [];
}

if (isset($_GET["add"])) {
    $id = intval($_GET["add"]);
    if (isset($productos[$id])) {
        $_SESSION["cesta"][] = $productos[$id];
    }
    header("Location: index.php");
    exit;
}

if (isset($_GET["comprar"])) {
    $_SESSION["cesta"] = [];
    header("Location: index.php");
    exit;
}

require "index.view.php";

?>

