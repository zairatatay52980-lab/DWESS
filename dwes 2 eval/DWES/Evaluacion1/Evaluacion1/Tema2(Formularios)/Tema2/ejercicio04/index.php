<?php

$usuarios = [
    "user1" => [
        "nombre" => 'Ane',
        "apellidos" => 'López',
        "password" => '123Abc'
    ],
    "user2" => [
        "nombre" => 'Amaia',
        "apellidos" => 'Otsoa',
        "password" => '456Xyz'
    ]
];

$mensajeBienvenida = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validamos la existencia del usuario y la contraseña
    if (empty($usuario) || empty($password)) {
        $error = "Por favor, rellenanos ambos campos.";
    } elseif (!array_key_exists($usuario, $usuarios)) {
        $error = "El usuario introducido no existe.";
    } elseif ($usuarios[$usuario]['password'] !== $password) {
        $error = "La contraseña introducida es incorrecta.";
    } else {
        $datosUsuario = $usuarios[$usuario];
        $mensajeBienvenida = "¡Bienvenido/a, {$datosUsuario['nombre']} {$datosUsuario['apellidos']}!";
    }
}

require 'index.view.php';