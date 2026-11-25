<?php

require "database.php";

//funciones

function getAll(){
    $db = getDbConnection();
    $query=$db->prepare("SELECT * FROM eventos");
    $query->execute();
    return $query -> fetchAll(PDO::FETCH_OBJ);
}

