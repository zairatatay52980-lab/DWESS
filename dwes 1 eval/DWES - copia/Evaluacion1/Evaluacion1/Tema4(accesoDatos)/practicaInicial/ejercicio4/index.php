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


//hacer el insert

$stmt = $db -> prepare ("INSERT INTO alumnos(nombre, apellidos, email, edad)
                        VALUES ('Zaira', 'TatayAguirre', 'zaira@gmail.com', '19')");

$stmt ->execute($db);

//hacer la consulta
$data = array ("nombre" => "Zaira");
$stmt = $db -> prepare("SELECT nombre, apellidos, email, edad 
                        FROM alumnos 
                        WHERE nombre = :nombre
                        ");


$stmt ->execute($data);
$resultado = ""; 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $resultado .= $row['nombre'] . "--" . "<br>";
    $resultado .= $row['apellidos'] . "--" . "<br>";
    $resultado .= $row['email'] . "--" . "<br>";
    $resultado .= $row['edad'] . "<br>";
}


require "index.view.php";


$db = null;



?>