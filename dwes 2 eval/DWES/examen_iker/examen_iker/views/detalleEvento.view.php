<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "layouts/header.php";?>

    <h3><?=$evento->titulo?></h3>
    <form action="index.php" method="GET">
        <table>
            <tr>
                <td>Titulo</td>
                <td><?=$evento->titulo?></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td><?=$evento->categoria?></td>
            </tr>
            <tr>
                <td>Descripcion</td>
                <td><?=$evento->descripcion?></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><?=$evento->fecha?></td>
            </tr>
            <tr>
                <td>Numero de plazas</td>
                <td><?=$evento->plazas_totales?></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><?=$evento->estado?></td>
            </tr>
        </table>
    </form>

    <h3>Asistentes (<?=count($asistentes)?>)</h3>

    <?php if(count($asistentes) == 0) : ?>
        <p>Este evento todavia no tiene asistentes.</p>
    <?php else : ?>
        <ul>
            <?php foreach($asistentes as $asistente) : ?>
                <li><?=$asistente->nombre?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;?>

    <a href="index.php">Volver al listado</a>

    <?php require "layouts/idioma.php";?>
    
    
</body>
</html>