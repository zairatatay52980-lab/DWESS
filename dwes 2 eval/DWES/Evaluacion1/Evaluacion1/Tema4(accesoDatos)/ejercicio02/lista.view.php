<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Empleados</title>
</head>
<body>
    <h3>Listado de empleados</h3>
    <?php if (count($empleados) > 0): ?>
        <ul>
            <?php foreach ($empleados as $empleado): ?>
                <li>
                    <?= htmlspecialchars($empleadp['dni']) ?> 
                    <?= htmlspecialchars($empleado['nombre']) ?>
                    <?= htmlspecialchars($empleado['apellidos']) ?>
                    
                    <a href="index.php?accion=detalle&id=<?= $empleado['detalle'] ?>">Ver detalles</a>
                    <a href="index.php?accion=eliminar&id=<?= $empleado['id'] ?>">Eliminar</a>

                                 

                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>La lista de empleados está vacía</p>
    <?php endif; ?>
    
</body>
</html>