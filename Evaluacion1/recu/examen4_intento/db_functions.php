<?php
require 'database.php';

function getAll(){
    $db = getDbConnection();
    $query = $db->prepare("SELECT * FROM eventos");
    $query -> execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
}

function detalleEvento($id){
    $db = getDbConnection();
    $query = $db->prepare("SELECT titulo, categoria, descripcion, fecha, plazas_totales, estado FROM eventos WHERE id = :id");
    $query->execute(["id"=>$id]);
    return $query->fetch(PDO::FETCH_OBJ);
}

function guardarEvento($data){
    $db = getDbConnection();
    $query=$db->prepare("INSERT INTO eventos(titulo, categoria, descripcion, fecha, plazas_totales, estado) VALUES (:titulo, :categoria, :descripcion, :fecha, :plazas_totales, :estado)");
    $query->execute($data);
}

function deleteEvento($id){
    $db = getDbConnection();
    $query=$db->prepare("DELETE FROM eventos WHERE id = :id");
    $query->execute($id);
}

function updateEvento($data){
    $db = getDbConnection();
    $query=$db->prepare("UPDATE eventos SET estado = :estado WHERE id = :id AND estado = 'abierto' ");
    $query->execute($data);
}

function mostrarAsistentes($id){
    $db = getDbConnection();
    $query=$db->prepare("SELECT nombre FROM asistentes WHERE evento_id = :id");
    $query->execute(["id"=>$id]);
    return $query->fetchAll(PDO::FETCH_OBJ);
}