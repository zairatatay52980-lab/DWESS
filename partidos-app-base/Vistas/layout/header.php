<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if($_GET['idioma'] === "euskara") : ?>
    <h1> PARTIDUAK </h1>

    <?php else: ?>
        <h1> PARTIDOS </h1>

<?php endif; ?>



    

<form action="index.php" method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario"> 
    <label for="password">Contraseña</label>
    <input type="text" name="password"> 
    <input type="submit">
</form>
