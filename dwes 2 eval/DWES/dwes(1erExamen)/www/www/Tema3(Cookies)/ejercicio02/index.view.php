<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejercicio01</title>
</head>
<body> 

<?php if($usuario): ?>
<p>Nombre del usuario: <?= $usuario ?></p>
<?php else: ?>
    <p>No hay ningun usuario almacenado</p>
    <?php endif; ?>

    
    <form action="index.php" method="get">
    
        <label>Introduce el texto que deseas almacenar:</label><br>
        <input type="text" name="texto" required><br><br>

        <input type="submit" value="Guardar"></input>

        <a href="index.php?borrar=1">Borrar cookie</a>
    </form>

</body>
</html>