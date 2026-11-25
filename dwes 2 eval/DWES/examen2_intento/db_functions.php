<?php

require 'database.php';

//funciones

function getAll(){
    $db = getDbConnection();
    $query=$db->prepare("SELECT * FROM eventos");
    $query->execute();
    return $query -> fetchAll(PDO::FETCH_OBJ);
}

function annadirEventoBD($data){
    $db = getDbConnection();
    $query = $db -> prepare("INSERT INTO eventos(titulo, categoria, descripcion, fecha, plazas_totales, estado)
                            VALUES (:titulo, :categoria, :descripcion, :fecha, :plazas_totales, :estado)");
    $query->execute($data);

}

function detalleEvento($id){
    $db = getDbConnection();
    $query = $db->prepare("SELECT titulo, categoria, descripcion, fecha, plazas_totales, estado FROM eventos WHERE id = :id");
    $query->execute(["id" => $id]);
    return $query -> fetch(PDO::FETCH_OBJ);
}

function updateEvento($data){
    $db = getDbConnection();
    $query = $db -> prepare("UPDATE eventos SET estado = :estado WHERE id = :id");
    $query -> execute($data);

}

function deleteEvento($data){
    $db = getDbConnection();
    $query = $db -> prepare("DELETE FROM eventos WHERE id = :id"); 
    $query -> execute($data);

}

function getAsistente($id){
    $db = getDbConnection();
    $query = $db->prepare("SELECT nombre FROM asistentes WHERE id = :id");
    $query->execute(["id"=>$id]);
    return $query -> fetchAll(PDO::FETCH_OBJ);

}

