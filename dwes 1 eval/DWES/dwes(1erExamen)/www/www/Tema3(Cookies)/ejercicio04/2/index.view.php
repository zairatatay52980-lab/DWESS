
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de asistentes</title>
</head>
<body>

<h2>Lista de asistentes</h2>

<?php if (!empty($_SESSION["asistentes"])): ?>
    <ul>
        <?php foreach ($_SESSION["asistentes"] as $persona): ?>
            <li><?= htmlspecialchars($persona) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No hay asistentes registrados</p>
<?php endif; ?>

<form action="index.php" method="get">
    <label>Añadir asistente:</label><br>
    <input type="text" name="nombre" required>
    <input type="submit" value="Añadir">
</form>

<br>
<a href="index.php?vaciar=1">Vaciar lista</a>
</body>
</html>
