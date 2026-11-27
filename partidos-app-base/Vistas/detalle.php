<?php 

require 'layout/header.php'; 
require_once 'dbfunciones.php'; 
require_once 'database.php'; 
require_once 'config.php';

?>




<h1>DETALLES DEL PARTIDO</h1>

<p>Equipo local: <?= $partido['equipo_local'] ?> </p>
<p>Equipo visitante: <?= $partido['equipo_visitante'] ?></p>
<p>Liga:<?= $partido['liga'] ?></p>
<p>Estado: <?= $partido['estado'] ?></p>
<p>Localización: <?= $partido['localizacion'] ?></p>
<p>Fecha: <?= $partido['fecha'] ?></p>
<p>Publico asistente: <?= $partido['publico_asistente'] ?></p>






<?php require 'layout/footer.php'; ?>