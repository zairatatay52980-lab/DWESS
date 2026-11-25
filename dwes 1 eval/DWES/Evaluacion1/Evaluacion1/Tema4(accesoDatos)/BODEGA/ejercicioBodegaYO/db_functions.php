<?php 

require_once "BBDD/database.php";

/**BODEGAS */

function getAllBodegas(): array{
    $db =  getDbConnection();
    $stmt = $db->prepare("SELECT * FROM bodega");
    $stmt->execute();

    return $stmt->fetchAll();
}





























/**vinos */