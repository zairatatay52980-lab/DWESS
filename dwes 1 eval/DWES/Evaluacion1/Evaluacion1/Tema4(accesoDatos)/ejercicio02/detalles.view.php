<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de empelados</title>
</head>
<body>
    <hr>

<h5>Detalles del empleado:</h5>
<table class="table">
    <tr>
        <td>DNI</td><td><?= $dni?></td>
    </tr>
    <tr>
        <td>Nombre</td><td><?= $nombre ?></td>
    </tr>
    <tr>
        <td>Apellidos</td><td><?= $apellidos ?></td>
    </tr>
    <tr>
        <td>Edad</td><td><?= $edad ?></td>
    </tr>
    <tr>
        <td>Sexo</td><td><?= $sexo ?></td>
    </tr>
    <tr>
        <td>Fecha de nacimiento</td><td><?= $fecha ?></td>
    </tr>
    <tr>
        <td>Curriculum</td><td><?= $curriculum ?></td>
    </tr>
</table>

<p>
    <a class="btn btn-primary" href="ejercicio09.php">Volver</a>
</p>
</body>
</html>