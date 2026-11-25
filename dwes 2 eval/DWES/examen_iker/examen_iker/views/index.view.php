<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "layouts/header.php";?>

    <h3>Listado de eventos</h3>
    <a href="index.php?accion=nuevoEventoView">Nuevo evento</a>
    <br>
    <br>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Categoría</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
        <?php foreach($eventos as $evento) : ?>
            <tr>
                <td><?=$evento->titulo?></td>
                <td><?=$evento->categoria?></td>
                <td><?=$evento->estado?></td>
                <td>
                    <a href="index.php?accion=detalleEvento&id=<?=$evento->id?>">Ver más</a> 
                    <?php if(isset($usuarioLogeado)) : ?>
                         | 
                        <a href="index.php?accion=cerrarEvento&id=<?=$evento->id?>">Cerrar evento</a> | 
                        <a href="index.php?accion=eliminarEvento&id=<?=$evento->id?>">Eliminar</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    
    <?php require "layouts/idioma.php";?>
</body>
</html>