<?php

require_once 'database.php';
require_once 'config.php';


function obtenerPartidos($db) {

    $stmt = $db -> prepare("SELECT * FROM partidos");
    $stmt -> execute();

    $resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

$partidos = obtenerPartidos($db);

function obtenerPartido($db, $id) {

    $stmt = $db -> prepare("SELECT * FROM partidos WHERE id = :id");
    $stmt -> execute([$id]);

    $resultado = $stmt -> fetch(PDO::FETCH_ASSOC);

    return $resultado;

}
