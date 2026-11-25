<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h2>Bienvenida, <?= htmlspecialchars($_SESSION["login"]) ?></h2>
    <a href="index.php?logout=1">Cerrar sesion</a>

</body>
</html>