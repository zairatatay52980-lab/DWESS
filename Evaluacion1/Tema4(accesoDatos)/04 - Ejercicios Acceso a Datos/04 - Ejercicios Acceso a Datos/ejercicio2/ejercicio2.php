<?php

require_once "funcionesEjercicio2.php";

if(isset($_GET["accion"])){
    
    $accion = $_GET['accion'];

    switch ($accion) {

        case 'insertar':
            $datos = array(
                'nombre' => $_GET['nombre'],
                'apellidos' => $_GET['apellidos'],
                'edad' => $_GET['edad'],
                'fechaNacimiento' => $_GET['fechaNac'],
                'email' => $_GET['email'],
                'dni' => $_GET['dni'],
                'sexo' => $_GET['sexo'],
                'curriculum' => $_GET['curriculum']);
                
            insertarEmpleado($datos);
            break;
        case 'eliminar':
            eliminar($_GET['dni']);
            redirect("ejercicio2.php");

    }

}



$resultado = llenarTabla($db);



require "ejercicio2.view1.php";


?>