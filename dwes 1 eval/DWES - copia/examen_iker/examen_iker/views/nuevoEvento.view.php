<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "layouts/header.php";?>

    <h3>Nuevo evento</h3>
    <form action="index.php" method="GET">
        <table>
            <tr>
                <td>Titulo</td>
                <td><input type="text" name ="titulo" required></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                    <select name="categoria" required>
                        <option value="Concierto">Concierto</option>
                        <option value="Deporte">Deporte</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Descripcion</td>
                <td><textarea name="descripcion" required></textarea></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><input type="date" name="fecha" required></td>
            </tr>
            <tr>
                <td>Numero de plazas</td>
                <td><input type="number" name="plazas_totales" required></td>
            </tr>
            <tr>s
                <td>
                    <br>
                    <input type="hidden" name="accion" value="crearEvento">  
                    <input type="submit" value="Crear evento">
                    <a href="index.php">Cancelar</a>
                </td>
            </tr>
        </table>
    </form>

    <br>
    <br>

    <?php require "layouts/idioma.php";?>
    
</body>
</html>