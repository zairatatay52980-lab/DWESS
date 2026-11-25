<?php 
function conectar(): PDO {
    return new PDO("mysql:host=localhost;
                    dbname=tema4ejerc02;
                    charset=utf8", 
                    "root", 
                    "");
}


$db = conectar();


$accion = $_GET['accion'] ?? '';

require "funciones.php";

switch($accion){
    case 'mostrarEmpleado':
        if(!empty($_GET['empleado'])){
            mostrarEmpleado($db, $_GET['empleado']);
            header("Location : index_php"); 

        }else{
            echo "La lista de empleados esta vacia";
        }
        


    break;
    case 'insertar':
        


    break;
    case 'eliminar':

    break;
    case 'mostrarDetalle':


    break;
    case 'vaciar':
        vaciarLista($db);
        header("Location: index.php");
    exit;

    case 'detalle':

        if(isset($_GET['dni'])){
            mostrarDetalles($db, $_GET['dni']);
            require_once 'funciones.php';
        }
        
       $dni = $_GET["dni"];



        $nombre
        $apellidos
        $edad
        $sexo
        $fecha
        $curriculum

$id = $_GET["idProducto"];
            // Cargar los datos
            require_once 'ejercicio09-datos.php';
            // Dejar disponible los datos a la vista:
            $nombre = $productos[$id]["nombre"];
            $descripcion = $productos[$id]["descripción"];
            $precio = $productos[$id]["precio"];

            require "ejercicio09detalle.view.php";
            die();
            
            */

}

$empleados = mostrarEmpleado($db);

require "login.view.php";

?>