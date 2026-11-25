<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Online</title>
</head>
<body>

<h2>Productos disponibles</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripci0n</th>
        <th>Precio</th>
        <th>Añadir</th>
    </tr>

    <?php foreach ($productos as $id => $prod): ?>
        <tr>
            <td><?= $id ?></td>
            <td><?= $prod["nombre"] ?></td>
            <td><?= $prod["descripcion"] ?></td>
            <td><?= $prod["precio"] ?> $</td>
            <td><a href="index.php?add=<?= $id ?>">Añadir</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<hr>

<h2>Cesta de la compra</h2>

<?php if (empty($_SESSION["cesta"])): ?>

    <p>No hay productos en la cesta</p>

<?php else: ?>

    <ul>
        <?php 
        $total = 0;
        foreach ($_SESSION["cesta"] as $item): 
            $total += $item["precio"];
        ?>
            <li><?= $item["nombre"] ?> — <?= $item["precio"] ?> $</li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Total: <?= $total ?> $</strong></p>

    <a href="index.php?comprar=1">Realizar compra</a>

<?php endif; ?>

</body>
</html>