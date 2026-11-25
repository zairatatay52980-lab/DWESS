<?php

require_once "database.php";

// FUNCIONES DE EVENTOS

function getAll(){
    $db = getDbConnection();

    $query = $db->prepare("SELECT * FROM eventos");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
};

function updateEvento($data){

    $db = getDbConnection();

    $query = $db->prepare("UPDATE eventos SET estado = :estado WHERE id = :id");
    $query->execute($data);
    
}

function deleteEvento($data){
    $db = getDbConnection();

    $query = $db->prepare("DELETE FROM eventos WHERE id = :id");
    $query->execute($data);
}

function insertEvento($data){

    $db = getDbConnection();

    $query = $db->prepare("INSERT INTO eventos (titulo, categoria, descripcion, fecha, plazas_totales, estado)
                            VALUES (:titulo, :categoria, :descripcion, :fecha, :plazas_totales, :estado)");
    $query->execute($data);

}

function getEventoById($data){
    $db = getDbConnection();

    $query = $db->prepare("SELECT * FROM eventos WHERE id = :id");
    $query->execute($data);
    return $query->fetch(PDO::FETCH_OBJ);
}

// FUNCIONES DE ASISTENTES

function getAsistentesByEventoId($data){
        $db = getDbConnection();

    $query = $db->prepare("SELECT * FROM asistentes WHERE evento_id = :evento_id");
    $query->execute($data);
    return $query->fetchAll(PDO::FETCH_OBJ);
}

