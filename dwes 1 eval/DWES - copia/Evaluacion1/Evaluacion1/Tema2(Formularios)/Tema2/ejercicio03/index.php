<?php

$datos = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $asunto = $_POST["asunto"] ?? "";
    $nombre = $_POST["nombre"] ?? "";
    $email = $_POST["email"] ?? "";
    $motivo = $_POST["motivo"] ?? "";
    $mensaje = $_POST["mensaje"] ?? "";

    if (empty($asunto) || empty($nombre) || empty($email) || empty($motivo) || empty($mensaje)) {
        $error = "Por favor, rellenanos todos los campos antes de enviar.";
    } else {
        $datos = [
            "asunto"  => $asunto,
            "nombre"  => $nombre,
            "email"   => $email,
            "motivo"  => $motivo,
            "mensaje" => $mensaje
        ];
    }
}

require "index.view.php";