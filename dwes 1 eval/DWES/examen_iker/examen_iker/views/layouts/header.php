<h1><?= ($idioma === "es") ? "Eventos" : "Ekitaldiak" ?></h1>

<?php if(!isset($usuarioLogeado)) : ?>

    <form action="index.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>

        <input type="hidden" name="accion" value="iniciarSesion">
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php if(isset($error) && $error == 1) : ?>
        <p>El usuario o la contraseña no son válidas.</p>
    <?php endif; ?>

<?php else : ?>
    <br>
    <span>Bienvenido, <?= htmlspecialchars($usuarioLogeado) ?></span> | 
    <a href="index.php?accion=cerrarSesion">Cerrar Sesión</a>
<?php endif; ?>