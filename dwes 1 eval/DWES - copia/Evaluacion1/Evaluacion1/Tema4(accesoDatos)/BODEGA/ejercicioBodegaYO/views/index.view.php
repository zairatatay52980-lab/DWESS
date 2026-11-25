<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <header>
            <h1>Ejercicio Bodegas</h1>
    </header>

    <main class="contenedor">
        <div class="listado-bodegas">
            <h3>Lista de bodegas</h3>

            <a href="index.php?accion=bodegaNueva"> Añadir bodega</a>
            <table border=1>
                <thead>
                <tr>
                    <th>Nombre</th><th>Localizacion</th><th>Telefono</th><th>Email</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- foreach recargar contenido-->
                 <?php foreach($bodegas as $bodega): ?>
                <tr>
                    <td><?= htmlspecialchars($bodega->nombre)?></td>
                    <td><?=htmlspecialchars($bodega->direccion)?></td>
                    <td><?=htmlspecialchars($bodega->telefono ?? '')?></td>
                    <td><?= htmlspecialchars($bodega->email ?? '')?></td>
                    <td><a href="index.php?accion=bodegaDetalle&id=<?=$bodega->id ?>">Entrar</a>||
                        <a href="index.php?accion=bodegaEliminar&id=<?=$bodega->id?>">Borrar</a>
                    </td>
            
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>

        </div>


















    </main>
</body>
</html>