<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de la compra</title>
</head>
<body>
    <h4>Lista de la compra</h4>

    <?php if (count($productos) > 0): ?>
        <ul>
            <?php foreach ($productos as $item): ?>
                <li>
                    <?= htmlspecialchars($item['nombre']) ?> 
                    <a href="index.php?accion=eliminar&id=<?= $item['id'] ?>">(Eliminar)</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>La lista está vacía</p>
    <?php endif; ?>

    <br>
    <h5>Añadir elemento</h5>
    <form action="index.php" method="get">
        <input type="text" name="producto" required>
        <input type="hidden" name="accion" value="insertar">
        <input type="submit" value="Añadir">
    </form>

    <br>
    <a href="index.php?accion=vaciar">Vaciar lista</a>
</body>
</html>