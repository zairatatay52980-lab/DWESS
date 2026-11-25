<?php

require 'layouts/header.php';

?>

<h3>Detalles del evento</h3>

<table>    
        <tr>
            <th>Titulo</th>
            <td><?=$evento->titulo?></td>
        </tr>

        <tr>
            <th>Categoria</th>
            <td><?=$evento->categoria?></td>

        </tr>

        <tr>
            <th>Descripcion</th>
            <td><?=$evento->descripcion?></td>

        </tr>

        <tr>
            <th>Fecha</th>
            <td><?=$evento->fecha?></td>

        </tr>

        <tr>
            <th>Numero de plazas</th>
            <td><?=$evento->plazas_totales?></td>

        </tr>

        <tr>
            <th>Estado</th>
            <td><?=$evento->estado?></td>

        </tr>
    </table>

    <h3>Asistentes (<?= count($asistentes)?>)</h3>

    <?php if(count($asistentes) == 0) : ?>
        No hay asistentes en este evento.
    
    <?php else : ?>
    <ul>
        <?php foreach($asistentes as $asistente) : ?>
        <li><?=$asistente->nombre?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <a href="index.php">Volver a inicio</a>


<?php

require 'layouts/footer.php';

?>