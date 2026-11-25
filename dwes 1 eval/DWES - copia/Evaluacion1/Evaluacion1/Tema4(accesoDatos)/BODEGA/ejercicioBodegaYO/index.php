<?php

require "db_functions.php";

//recoge datos del form BODEGA
function bodegaFromPost(): array{
    return array(
        "nombre" =>$_POST["nombre"],
        "direccion" =>$_POST["direccion"],
        "email" =>$_POST["email"],
        "telefono" =>$_POST["telefono"],
        "contacto" =>$_POST["contacto"],
        "nombre" =>$_POST["nombre"],
    );
}

//recoge datos form VINO 
function vinoFromPost(): array{
    return array(
        "nombre" => $_POST["nombre"],
        "descripcion" => $_POST["descripcion"],
        "anio" =>$_POST["anio"],
        "alcohol" => $_POST["alcohol"],
        "tipo" => $_POST["tipo"]
    );
}

//redirigir + terminar
function redirect($url): void{
    header("Location: $url");
    die();
}

//switch general

function realizarAccion($accion):void{
    switch($accion){
        /*BODEGAS*/ 
        case 'bodegaNueva':
            echo "annadir bodega";
            die();

        case 'bodegaInsertar':
            die();

        case 'bodegaDetalle':
            echo "bodega detalle";
            die();

        case 'bodegaActualizar':
            die();
        
        case 'bodegaEliminar':
            echo "bodega eliminar";
            die();
        /*VINOS */
        case 'vinoNuevo':
            die();

        case 'vinoInsertar':
            die();

        case 'vinoDetalle':
            die();

        case 'vinoActualizar':
            die();
        
        case 'vinoEliminar':
            die();

    }
}

//comprobar que se ha hecho accion
if(isset($_GET["accion"])){
    realizarAccion($_GET["accion"]);
}

$bodegas = getAllBodegas();

require "views/index.view.php";




?>