
<h1>
    <?php if($idioma === "es") : ?>
        <h1>Eventos</h1>
    <?php else : ?>
        <h1>Ekitaldiak</h1>
    <?php endif; ?>
</h1>

<?php if(!isset($usuarioLogeado)) : ?>

    <form action="index.php" method="GET">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>

        <input type="hidden" name="accion" value="iniciarSesion">
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php if($error == 1) : ?>
    <p>El usuario o la contraseña no son validas.</p>
    <?php endif;

    else : ?>
    <br>
    <span>Bienvenido, <?=$usuarioLogeado?></span> | 
    <a href="index.php?accion=cerrarSesion">Cerrar Sesión</a>
    
<?php endif; ?>