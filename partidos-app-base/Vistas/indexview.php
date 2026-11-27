
<?php 

require 'layout/header.php'; 
require_once 'dbfunciones.php'; 
require_once 'database.php'; 
require_once 'config.php';

?>

<?php if(isset($_SESSION['usuario'])) : ?>
    <p> Bienvenido <?= $_SESSION['nombre'] ?> </p>
<?php endif; ?>
<a href="index.php?accion=logout">Cerrar sesión</a>
<table border=1>
    <tr>
        <th>Equipo local</th>
        <th>Equipo visitante</th>
        <th>Liga</th>
        <th>Estado</th>
        <th>Detalles</th>
    </tr>
    
<?php foreach($partidos as $partido): ?>
    <tr>
        <td> <?= $partido['equipo_local'] ?> </td>
        <td> <?= $partido['equipo_visitante'] ?> </td>
        <td> <?= $partido['liga'] ?> </td>
        <td> <?= $partido['estado'] ?> </td>
        <td> <a href="index.php?accion=detalle?id=<?= $partido['id'] ?> ">Ver detalles</a></td>

        
    </tr>
<?php endforeach ; ?>
    
</table>



<?php require 'layout/footer.php'; ?>