<?php


session_start();


require_once 'database.php';
require_once 'config.php';
require 'db_funciones.php';


$ERROR_TYPES = [
    1 => "Contraseña incorrecta",
    2 => "Usuario inexistente",
    3 => "Login correcto"
];

$usuarios = [
    'Ana' => ['password' => 'clave1', 'nombre' => 'Ana'],
];

//IDIOMA

if (isset($_GET['idioma'])) {
    setcookie('idioma', $_GET['idioma']);
}
if (isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];
} elseif (isset($_COOKIE['idioma'])) {
    $idioma = $_COOKIE['idioma'];
} else {
    $idioma = 'espanol';
}


// LOGIN
$error = null;

if (isset($_POST['usuario'], $_POST['password'])) {
    $codigo = comprobarLogin($_POST['usuario'], $_POST['password'], $usuarios);

    if ($codigo === 3) {
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['nombre'] = $usuarios[$_POST['usuario']]['nombre'];
    } else {
        $error = $ERROR_TYPES[$codigo];
    }
}


// ACCIONES Y LISTADO
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];

    switch ($accion) {
        case 'logout':
            session_destroy();
            header('Location: index.php');
            exit;

        case 'crear':
            if (!isset($_SESSION['usuario'])) {
                header('Location: index.php');
                exit;
            }
            if (isset($_POST['titulo'], $_POST['categoria'], $_POST['descripcion'], $_POST['fecha'], $_POST['plazas'])) {
                insertarEvento($db, $_POST['titulo'], $_POST['categoria'], $_POST['descripcion'], $_POST['fecha'], (int) $_POST['plazas']);
                header('Location: index.php');
                exit;
            }
            require 'Vistas/crear.view.php';
            break;

        case 'detalle':
            $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
            $evento = obtenerEvento($db, $id);
            if ($evento === false) {
                header('Location: index.php');
                exit;
            }
            $asistentes = obtenerAsistentes($db, $id);
            require 'Vistas/detalles.view.php';
            break;

        case 'cerrar':
            if (isset($_SESSION['usuario']) && isset($_GET['id'])) {
                cerrarEvento($db, (int) $_GET['id']);
            }
            header('Location: index.php');
            exit;

        case 'eliminar':
            if (isset($_SESSION['usuario']) && isset($_GET['id'])) {
                eliminarEvento($db, (int) $_GET['id']);
            }
            header('Location: index.php');
            exit;

        default:
            header('Location: index.php');
            exit;
    }
} else {
    $resultados = obtenerListadoEventos($db);
    require 'Vistas/indexview.php';
}


function comprobarLogin(string $usuario, string $password, array $usuarios): int {
    if (!isset($usuarios[$usuario])) {
        return 2; // Usuario inexistente
    }
    if ($usuarios[$usuario]['password'] !== $password) {
        return 1; // Contraseña incorrecta
    }
    return 3; // Login correcto
}
