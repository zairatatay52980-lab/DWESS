<?php

//conexion a la base de datos  

$dbname = "tema4";
$host = "localhost";
$user = "root";
$pass = "";

function connect($host, $dbname, $user, $pass){
    try {

        $db= new PDO("mysql:host=$host;dbname=$dbname", $user , $pass );

        return $db;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

$db = connect($host, $dbname , $user , $pass);

//hacer la consulta
$data = array ('id' => 1);
$stmt = $db->prepare("SELECT nombre, apellidos, email, edad FROM alumnos 
                        WHERE id = :id");


$stmt->execute($data);
$resultado = ""; 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $resultado .= $row['nombre'] . "--";
    $resultado .= $row['apellidos'] . "--";
    $resultado .= $row['email'] . "--";
    $resultado .= $row['edad'] . "<br>";
}


require "index.view.php";


$db = null;



?>