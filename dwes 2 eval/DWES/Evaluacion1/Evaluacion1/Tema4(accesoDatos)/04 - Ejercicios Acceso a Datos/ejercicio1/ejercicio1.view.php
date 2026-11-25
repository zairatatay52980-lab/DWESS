<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body> 
    <h3>Lista de la compra</h3>

    <ul>
        <?php
            foreach ($resultado as $producto):
        ?>
            <li>
                <?= $producto["nombre"]?><a href="ejercicio1.php?accion=eliminar&id=<?=$producto["id"]?>">Eliminar</a>
            </li>
        <?php
            endforeach;
        ?>
    </ul>

    <form action="" method="GET">
        <h4>Añadir elemento</h4>
        <input type="text" name="nombre">
        <input type="submit" value="Añadir">
        <input type="hidden" name="accion" value="agregar"><br><br>
    </form>
    <a href="ejercicio1.php?accion=vaciar">Vaciar lista</a>
</body>
</html>