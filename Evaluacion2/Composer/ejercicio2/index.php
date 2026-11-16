<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class Paciente{
    private string $nombre;
    private string $apellidos;
    private int $edad;
    private Logger $logger;


    public function __construct(string $nombre, string $apellidos, int $edad){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;

        $this->logger = new Logger('paciente');
        $this->logger->pushHandler(new StreamHandler('app.log', Logger::INFO));

    }

    public function enfermar(): void{
        $this->logger->info("He enfermado");
    }

    public function curar(): void{
        $this->logger->info("Me he curado");
    }
}

if(isset($_GET['accion'])){
    $paciente = new Paciente('Zaira', 'Tatay Aguirre', 19);

    if($_GET['accion'] === 'enfermar'){
        $paciente->enfermar();
        echo("Accion ejecutada: has clickado enfermar");
    }elseif($_GET['accion'] === 'curar'){
        $paciente->curar();
        echo("Accion ejecutada: has clickado curar");
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2>Opciones del Paciente</h2>
    <ul>
        <li><a href="index.php?accion=enfermar">Enfermar</a></li>
        <li><a href="index.php?accion=curar">Curar</a></li>
    </ul>
</body>
</html>