
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login con intentos</title>
</head>
<body>

<?php if (isset($bloqueado)): ?>

    <h2 style="color:red;">Has superado el numdero mqaximo de intentos en esta sesionn</h2>

<?php elseif (!isset($_SESSION["login"])): ?>

    <h2>Iniciar sesion</h2>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?= $error ?></p>
        <p>Intentos usados: <?= $_SESSION["intentos"] ?> / 3</p>
    <?php endif; ?>

    <form action="index.php" method="post">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Entrar">
    </form>

<?php else: ?>

    <h2>Bienvenida, <?= htmlspecialchars($_SESSION["login"]) ?></h2>
    <a href="index.php?logout=1">Cerrar sesion</a>

<?php endif; ?>

</body>
</html>
