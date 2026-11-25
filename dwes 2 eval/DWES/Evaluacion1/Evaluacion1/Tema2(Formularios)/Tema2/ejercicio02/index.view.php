<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

    <h2>Calculadora</h2>

    <?php if ($error !== null): ?>
        <p style="color: red;"><b><?= htmlspecialchars($error) ?></b></p>
    <?php elseif ($resultado !== null): ?>
        <p><b>Último resultado: <?= $resultado ?></b></p>
    <?php endif; ?>

    <form action="index.php" method="GET">
        <p>
            <label for="num1">Primer número:</label>
            <input type="number" step="any" id="num1" name="num1" required>
        </p>
        <p>
            <label for="num2">Segundo número:</label>
            <input type="number" step="any" id="num2" name="num2" required>
        </p>
        <p>
            <label for="operacion">Seleccione la operación deseada:</label>
            <select id="operacion" name="operacion" required>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
        </p>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>