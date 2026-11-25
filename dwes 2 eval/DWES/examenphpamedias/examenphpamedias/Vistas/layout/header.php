<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen PHP</title>
</head>

<body>



<?php 

if($idioma == "espanol") : ?>
    <h1>EVENTOS</h1>
    <?php else : ?>
        <h1>EKITALDIAK</h1>
    <?php endif; ?>


<?php if(!isset($_SESSION["usuario"])) : ?>
    <p>Debes iniciar sesión:</p>
    <form action="index.php" method="post">
        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario"> <br>
        <label for="password">Contraseña: </label>
        <input type="password" name="password"> 
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php if (!empty($error)) : ?>
        <p><?= $error ?></p>
    <?php endif; ?>
    <?php else : ?>
        <p>BIENVENIDO <?= htmlspecialchars($_SESSION["nombre"]) ?> 
            <a href="index.php?accion=logout">Cerrar sesión</a>
        </p>
    <?php endif ; ?>

