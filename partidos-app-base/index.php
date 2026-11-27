<?php

require_once 'database.php';
require_once 'config.php';
require_once 'dbfunciones.php';

session_start();

//ERRORES

$ERROR_TYPES = [
    1=> "Usuario inexistente",
    2=> "Contraseña incorrecta",
    3=> "Login correcto",
];

//BASE DE DATOS USUARIOS



$usuarios = [
"u1" => ["nombre"=> "Unax", "password" => "clave1"]
];

  






//IDIOMA

if(isset($_GET['idioma'])){

    setcookie('idioma', $_GET['idioma']);
    
}elseif(isset($_COOKIE['idioma'])){

    $idioma = $_COOKIE['idioma'];
}else{

    $idioma = "espanol";
}


//LOGIN

function comprobarLogin(string $usuario, string $password, array $usuarios) {

if(!isset($usuarios[$usuario])){

    return 1;
}
if($usuario['password']  !== $password){

    return 2;
}

    return 3;

}



$error = null;

if(isset($_POST['usuario']) && $_POST['password']) {
    $codigo = comprobarLogin($_POST['usuario'], $_POST['password'], $usuarios);

    if($codigo === 3){

        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['nombre'] = $usuarios[$_POST['usuario']['nombre']];
    }else{

        $error = $ERROR_TYPES[$codigo];
    }
}

require 'Vistas/indexview.php';

if(isset($_GET['accion'])){

    $accion = $_GET['accion'];

    switch($accion) {
        case 'logout':
            session_destroy();
            header('Location : index.php');
            exit;
        
        case 'detalle': 
            if(isset($_GET['id'])){

                $id = $_GET['id'];
                $partido = obtenerPartido($id);
                require_once 'Vistas/detalle.php';
            };
            exit;

        
    }

}