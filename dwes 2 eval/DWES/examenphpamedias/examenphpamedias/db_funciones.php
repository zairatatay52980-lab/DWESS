<?php
require_once 'config.php';


function obtenerListadoEventos($db) {
    $select = $db -> prepare("SELECT id, titulo, categoria, descripcion, fecha, plazas_totales, estado FROM eventos");
    $select -> execute();
    $resultados = $select -> fetchAll(PDO::FETCH_ASSOC);

    return $resultados;
}

function obtenerEvento($db, $id) {
    $select = $db -> prepare("SELECT id, titulo, categoria, descripcion, fecha, plazas_totales, estado FROM eventos WHERE id = :id");
    $select -> execute([':id' => $id]);

    return $select -> fetch(PDO::FETCH_ASSOC);
}

function obtenerAsistentes($db, $eventoId) {
    $select = $db -> prepare("SELECT nombre FROM asistentes WHERE evento_id = :evento_id");
    $select -> execute([':evento_id' => $eventoId]);

    return $select -> fetchAll(PDO::FETCH_ASSOC);
}

function insertarEvento($db, $titulo, $categoria, $descripcion, $fecha, $plazas) {
    $insert = $db -> prepare("INSERT INTO eventos (titulo, categoria, descripcion, fecha, plazas_totales, estado) VALUES (:titulo, :categoria, :descripcion, :fecha, :plazas, 'abierto')");
    $insert -> execute([
        ':titulo' => $titulo,
        ':categoria' => $categoria,
        ':descripcion' => $descripcion,
        ':fecha' => $fecha,
        ':plazas' => $plazas
    ]);
}

function cerrarEvento($db, $id) {
    $update = $db -> prepare("UPDATE eventos SET estado = 'cerrado' WHERE id = :id AND estado = 'abierto'");
    $update -> execute([':id' => $id]);
}

function eliminarEvento($db, $id) {
    $delete = $db -> prepare("DELETE FROM eventos WHERE id = :id");
    $delete -> execute([':id' => $id]);
}
