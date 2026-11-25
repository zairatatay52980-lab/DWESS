<?php

// base de datos
function conectar(): PDO {
    return new PDO("mysql:host=localhost;dbname=tema4ejerc01;charset=utf8", "root", "");
}

//Funciones
function obtenerProductos(PDO $db): array {
    return $db->query("SELECT * FROM listacompra")
    ->fetchAll(PDO::FETCH_ASSOC);
}

function insertarProducto(PDO $db, string $nombre): void {
    $stmt = $db->prepare("INSERT INTO listacompra (nombre) VALUES (:nombre)");
    $stmt->execute([':nombre' => trim($nombre)]);
}

function eliminarProducto(PDO $db, int $id): void {
    $stmt = $db->prepare("DELETE FROM listacompra WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

function vaciarLista(PDO $db): void {
    $db->exec("TRUNCATE TABLE listacompra");
}

// ESQUELETO
$db = conectar();
$accion = $_GET['accion'] ?? '';

switch ($accion) {
    case 'insertar':
        if (!empty($_GET['producto'])) {
            insertarProducto($db, $_GET['producto']);
            header("Location: index.php");
            exit;
        }
        break;

    case 'eliminar':
        if (isset($_GET['id'])) {
            eliminarProducto($db, (int)$_GET['id']);
            header("Location: index.php");
            exit;
        }
        break;

    case 'vaciar':
        vaciarLista($db);
        header("Location: index.php");
        exit;
}


$productos = obtenerProductos($db);

require "index.view.php";