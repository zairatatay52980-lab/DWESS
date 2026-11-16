<?php

function connect($host, $dbname, $user, $pass){
    try {
        $dbh= new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user, $pass
        );
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }catch(PDOException $e) {
        echo $e->getMessage();
    }
}

$dbh = connect("localhost","dbCompra","root","");

function agregarProducto($nombre, $dbh){
    $data = array('nombre' => $nombre);
    $stmt = $dbh->prepare("INSERT INTO productos (nombre) VALUES (:nombre);");
    $stmt->execute($data);
}

function eliminarPorId($id, $dbh){
    $data = array('id' => $id);
    $stmt = $dbh->prepare("DELETE FROM productos WHERE id = :id");
    $stmt->execute($data);
}

function vaciarLista($dbh){
    $stmt = $dbh->prepare("DELETE FROM productos");
    $stmt->execute();
}

if (isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'agregar':
            $nombreProd = $_GET["nombre"];
            agregarProducto($nombreProd,$dbh);
            break;
        case 'vaciar':
            vaciarLista($dbh);  
            break;
        case 'eliminar':
            $id = $_GET["id"];
            eliminarPorId($id, $dbh);
            break;
        default:
            break;
    }
}

$stmt = $dbh->query("SELECT * FROM productos");

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "ejercicio1.view.php";

?>