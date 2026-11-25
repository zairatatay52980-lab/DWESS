<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>
<body>
    <?= echo "Hola" ?>

    <h3>Listado de eventos</h3>
    <br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        <tr>
            <?php foreach($eventos as $evento) : ?>
                <td><?= $evento -> titulo ?></td>
                <td><?= $evento -> categoria ?></td>
                <td><?= $evento -> estado ?></td>
                <td>
                    <a href="index.php?accion=detalleEvento&id=<?=$evento->id?>">Ver mas</a> |
                    <a href="index.php?accion=cerrarEvento&id=<?=$evento->id?>">Cerrar Evento</a>|
                    <a href="index.php?accion=eliminarEvento&id=<?=$evento->id?>">Eliminar Evento</a>
                    
                </td>

            <?php endforeach; ?>
        </tr>
    </table>
    
</body>
</html>