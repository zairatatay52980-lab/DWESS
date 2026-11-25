<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 03</title>
</head>
<body>

<?php if ($idiomaGuardado): ?>
    <p>Idioma: <?= $idiomaGuardado ?></p>
<?php else: ?>
    <p>No hay ningun idioma almacenado</p>
<?php endif; ?>

<form action="index.php" method="get">
    <label>Elige tu idioma:</label><br>

    <select name="idioma">
        <option value="Euskera" <?= ($idiomaGuardado === "Euskera") ? "selected" : "" ?>>Euskera</option>
        <option value="Castellano" <?= ($idiomaGuardado === "Castellano") ? "selected" : "" ?>>Castellano</option>
    </select>

    <br><br>
    <input type="submit" value="Guardar">
</form>

</body>
</html>