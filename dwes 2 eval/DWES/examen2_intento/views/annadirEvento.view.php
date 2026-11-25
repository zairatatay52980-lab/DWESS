<?php require 'layouts/header.php';?>

<h3>Nuevo Evento</h3>

<form action="index.php?accion=guardarEvento" method="POST">
    <table>
        <tr>
            <td>Titulo</td>
            <td><input type="text" name="titulo" required></td>
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

        <input type="hidden" name="accion" value="guardarEvento">  
        <input type="submit" value="Crear evento">

    </table>
</form>

<a href="index.php">Volver a inicio</a>

<?php require 'layouts/footer.php';?>
