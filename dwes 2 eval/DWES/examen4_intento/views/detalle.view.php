<?php 
require 'layout/header.php';
?>

<h3>Detalles del evento</h3>

<ul>
    <li>Titulo: <?=$evento->titulo?></li>
    <li>Categoria: <?=$evento->categoria?></li>
    <li>Descripcion: <?=$evento->descripcion?></li>
    <li>Fecha: <?=$evento->fecha?></li>
    <li>Numero de plazas: <?=$evento->plazas_totales?></li>
    <li>Estado: <?=$evento->estado?></li>
</ul>


<h4>Asistentes ( <?=count($asistentes)?> )</h4>

<?php if(count($asistentes)==0): ?>
    <p>No hay asistentes en este evento</p>

<?php else: ?>

    <ul>
        <?php foreach($asistentes as $asistente) : ?>

            <li><?=$asistente->nombre?></li>

        <?php endforeach; ?>

    </ul>


<?php endif; ?>




<a href="index.php">Volver al inicio</a>

<?php
require 'layout/footer.php';
?>