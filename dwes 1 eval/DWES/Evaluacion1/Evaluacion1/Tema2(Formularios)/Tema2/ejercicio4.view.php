<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body> 

<?php if(!empty($resultado)): ?>
<p><?= htmlspecialchars($resultado) ?></p>
    <?php endif; ?>

    
    <form action="ejercicio4.php" method="post">
    
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="text" name="password" required><br><br>

        <input type="submit" value="Enviar">
        
    </form>

</body>
</html>