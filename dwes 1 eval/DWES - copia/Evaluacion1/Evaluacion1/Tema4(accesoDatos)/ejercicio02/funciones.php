<?php 
function conectar(): PDO {
    return new PDO("mysql:host=localhost;dbname=tema4ejerc02;charset=utf8", "root", "");
}

$db = conectar();

function mostrarEmpleado(PDO $db): array{
    return $db->query(SELECT * FROM  empleados)->fetchAll(PDO::FETCH_ASSOC);
}

function mostrarDetalles(PDO $db, $_GET['dni']){

    return $db -> query(SELECT * FROM empleados WHERE dni = :dni)
    ->fetchAll(PDO::FETCH_ASSOC);

}


require "index.php";
?> 