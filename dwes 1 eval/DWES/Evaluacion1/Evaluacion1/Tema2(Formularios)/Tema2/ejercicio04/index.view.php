<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 04 - Login</title>
</head>
<body>

    <h2>Iniciar Sesión</h2>

    <?php if ($mensajeBienvenida): ?>
        <p style="color: green;"><b><?= htmlspecialchars($mensajeBienvenida) ?></b></p>
    <?php endif; ?>

    <?php if ($error): ?>
        <p style="color: red;"><b><?= htmlspecialchars($error) ?></b></p>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <p>
            <label for="usuario">Usuario:</label><br>
            <input type="text" id="usuario" name="usuario" required>
        </p>
        <p>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required>
        </p>
        <input type="submit" value="Iniciar sesión">
    </form>

</body>
</html>