<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01</title>
</head>
<body>

    

    <form action="ejercicio01.php" method="GET">
        <p>
            <label for="temperatura">Introduce la temperatura:</label>
            <input type="number" step="any" id="temperatura" name="temperatura" required>
        </p>
        <p>
            <label for="unidad">Indica la unidad de la temperatura introducida:</label>
            <select id="unidad" name="unidad" required>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
            </select>
        </p>
        <input type="submit" value="Enviar">
    </form>
    <?php if ($resultado !== null): ?>
        <p>
            <b>Resultado de la conversión (<?= $temperatura ?>,<?= $unidad ?>): <?= $resultado ?></b>
        </p>
    <?php endif; ?>

</body>
</html>