<?php


function getDbConnection() {
    global $db_connection;
    
    if ($db_connection === null) {
        try {
            $db_connection = new PDO(
                "mysql:host=".DB_HOST.";dbname=".DB_NAME, 
                DB_USER, 
                DB_PASS
            );
            $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
    
    return $db_connection;
}

define('DB_HOST', 'localhost');
define('DB_NAME', 'tema4ejerc02');
define('DB_USER', 'root');
define('DB_PASS', '');

function llenarTabla($db){
    $stmt = $db->prepare("SELECT * FROM empleados");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertEmpleado(array $datos): void{
    $db = getDbConnection();
    $stmt =  $db->prepare("INSERT INTO empleados (nombre, apellidos, edad, fechaNacimiento, email, dni, sexo, curriculum) 
                        VALUES(:nombre, :apellidos, :edad, :fechaNacimiento, :email, :dni, :sexo, :curriculum)");
    $stmt->execute($datos);
    
}

function eliminar($dni){
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM empleados WHERE dni = :dni" );
 
    $stmt = execute([':dni' => $dni]);
}



?>