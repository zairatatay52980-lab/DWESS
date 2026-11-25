<?php

require 'layout/header.php';


?>

<h2>LISTADO DE EVENTOS:</h2>
<?php if (isset($_SESSION['usuario'])) : ?>
    <p><a href="index.php?accion=crear">Crear evento</a></p>
<?php endif; ?>

<table border="1">
    <tr>
        <th>Título</th>
        <th>Categoría</th>
        <th>Estado</th>
        <th>Opciones</th>
    </tr>

    <?php foreach ($resultados as $resultado) : ?>
        <tr>
            <td><?= htmlspecialchars($resultado["titulo"]) ?></td>
            <td><?= htmlspecialchars($resultado["categoria"]) ?></td>
            <td>
                <?php if ($resultado["estado"] == "abierto") : ?>
                    Abierto
                <?php else : ?>
                    Cerrado
                <?php endif; ?>
            </td>
            <td>
                <a href="index.php?accion=detalle&id=<?= $resultado["id"] ?>">Ver más</a>
                <?php if (isset($_SESSION['usuario'])) : ?>
                    <form action="index.php" method="get" style="display: inline;">
                        <input type="hidden" name="accion" value="cerrar">
                        <input type="hidden" name="id" value="<?= $resultado["id"] ?>">
                        <input type="submit" value="Cambiar estado">
                    </form>
                    <form action="index.php" method="get" style="display: inline;">
                        <input type="hidden" name="accion" value="eliminar">
                        <input type="hidden" name="id" value="<?= $resultado["id"] ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table><br><br>

<?php require 'layout/footer.php'; ?>
