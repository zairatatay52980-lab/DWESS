<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 03 - Formulario de Contacto</title>
</head>
<body>

    <h2>Solución:</h2>

    <?php if ($error): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php elseif ($datos): ?>
        <p>El formulario se ha enviado con éxito. Estos son los datos recibidos:</p>
        <ul>
            <li><b>Asunto:</b> <?= htmlspecialchars($datos['asunto']) ?></li>
            <li><b>Nombre:</b> <?= htmlspecialchars($datos['nombre']) ?></li>
            <li><b>Email:</b> <?= htmlspecialchars($datos['email']) ?></li>
            <li><b>Motivo:</b> <?= htmlspecialchars($datos['motivo']) ?></li>
            <li><b>Mensaje:</b> <?= htmlspecialchars($datos['mensaje']) ?></li>
        </ul>
    <?php else: ?>
        <p>Por favor, rellena el formulario de contacto:</p>
    <?php endif; ?>

    <form action="index.php" method="POST">
        <p>
            <label for="asunto">Asunto:</label><br>
            <input type="text" id="asunto" name="asunto">
        </p>
        <p>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre">
        </p>
        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email">
        </p>
        <p>
            <label for="motivo">Motivo:</label><br>
            <select id="motivo" name="motivo">
                <option value="">-- Selecciona --</option>
                <option value="Soporte técnico">Soporte técnico</option>
                <option value="Información de productos">Información de productos</option>
                <option value="Queja">Queja</option>
                <option value="Otro">Otro</option>
            </select>
        </p>
        <p>
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" cols="40"></textarea>
        </p>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>