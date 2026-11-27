<?php
require 'layout/header.php';
require 'views/layout/idioma.php';
?>
    
    <h3>Listado de eventos</h3>

    <a href="index.php?accion=nuevoEvento">Nuevo Evento</a>
    <table border=1>

        <tr>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>

        <?php foreach ($eventos as $evento) : ?>
        <tr>
            <td><?=$evento->titulo?></td>
            <td><?=$evento->categoria?></td>
            <td><?=$evento->estado?></td>
            <td>
                <a href="index.php?accion=detallesEvento&id=<?=$evento->id?>">Ver detalles</a>
                <a href="index.php?accion=cerrarEvento&id=<?=$evento->id?>">Cerrar Evento</a>
                <a href="index.php?accion=eliminarEvento&id=<?=$evento->id?>">Eliminar Evento</a>
            </td>
            
        </tr>
        <?php endforeach; ?>
       
    </table>

<?php
require 'layout/footer.php';
?>