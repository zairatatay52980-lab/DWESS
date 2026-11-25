<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ejercicio2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>App de Gestión de Empleados</h1>
            <p>Bienvenido a la aplicación de aprendizaje Gestión de Empleados. Este ejercicio tiene como objetivo repasar el acceso a datos mediante PDO y comenzar a separar la lógica de las páginas de la presentación y del acceso a datos.</p>
        </header>
        <main class="contenedor-principal">
            <div class="columna-listado">
                <h3>Listado de empleados</h3>
                <table border=1 >
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Opciones</th>
                    </tr>
                    <?php
                        foreach ($resultado as $empleado):
                    ?>
                        <tr>
                            <td><?=$empleado["dni"]?></td>
                            <td><?=$empleado["nombre"]?></td>
                            <td><?=$empleado["apellidos"]?></td>
                            <td><a href="ejercicio2.php?accion=detalles&dni=<?=$empleado['dni']?>">Ver detalles</a> | 
                                <a href="ejercicio2.php?accion=eliminar&dni=<?=$empleado['dni']?>">Eliminar</a></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </table>
                <p><a href="ejercicio2.php?accion=vaciar">Vaciar lista</a></p>
            </div>
            
            <div class="columna-formulario">
                <h3>Añadir nuevo empleado</h3>
                <form action="ejercicio2.php" method="post">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="apellidos" placeholder="Apellidos">
                    <input type="text" name="edad" placeholder="Edad">
                    <input type="date" name="fechaNac">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="dni" placeholder="DNI">
                    <select name="sexo">
                        <option value="mujer">Mujer</option>
                        <option value="hombre">Hombre</option>
                    </select>
                    <textarea name="curriculum" placeholder="Curriculum"></textarea>
                    <input type="submit" value="Añadir">
                    <input type="hidden" name="accion" value="insertar">
                </form>
            </div>

        </main>
    </body>
</html>