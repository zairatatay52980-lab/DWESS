<?php require 'layout/header.php'; ?>

<h2>DETALLES DEL EVENTO:</h2>
<p><strong>Título:</strong> <?= htmlspecialchars($evento["titulo"]) ?></p>
<p><strong>Categoría:</strong> <?= htmlspecialchars($evento["categoria"]) ?></p>
<p><strong>Descripción:</strong> <?= htmlspecialchars($evento["descripcion"]) ?></p>
<p><strong>Fecha:</strong> <?= $evento["fecha"] ?></p>
<p><strong>Número de plazas:</strong> <?= $evento["plazas_totales"] ?></p>
<p><strong>Estado:</strong> <?php if ($evento["estado"] == "abierto") : ?>Abierto<?php else : ?>Cerrado<?php endif; ?></p>

<h3>Asistentes:</h3>
<?php if (empty($asistentes)) : ?>
    <p>Este evento todavía no tiene asistentes.</p>
<?php else : ?>
    <ul>
        <?php foreach ($asistentes as $asistente) : ?>
            <li><?= htmlspecialchars($asistente["nombre"]) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<p><a href="index.php">Volver al listado de eventos</a></p>

<?php require 'layout/footer.php'; ?>
