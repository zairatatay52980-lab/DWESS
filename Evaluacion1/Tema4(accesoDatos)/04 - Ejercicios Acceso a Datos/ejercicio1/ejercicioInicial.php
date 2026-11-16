<?php

function connect($host, $dbname, $user, $pass){
    try {
        # MySQL
        $dbh= new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user, $pass
        );
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }catch(PDOException $e) {
        echo $e->getMessage();
    }
}

$dbh = connect("localhost","dbAlumnado","root","");

function getDatos($dbh){
    $stmt = $dbh->prepare("select * from alumnos");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$alumno = getDatos($dbh);

$mensaje = "";

foreach ($alumno as $row) {
    $mensaje .= $row["nombre"] . " ";
    $mensaje .= $row["apellidos"] . " ";
    $mensaje .= $row["email"] . " ";
    $mensaje .= $row["edad"] . " --- ";
}

$dbh = connect("localhost","dbAlumnado","root","");

$stmt2 = $dbh->prepare("insert into alumnos ( nombre, apellidos, email, edad)
                    values ('Eathan Andres', 'Garzon Cortes', 'eathanandres@egibide.org', 20);");

$stmt2->execute();

require "ejercicioInicial.view.php";

?>