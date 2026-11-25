<?php 
require 'layout/header.php' 
?>

<h3>Nuevo Evento</h3>

<form accion="index.php?accion=guardarEvento" method="POST">
    <table>
        <tr>
            <td>Titulo</td>
            <td>
                <input type="text" name="titulo" placeholder="Titulo">
            </td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria">
                    <option value="Concierto">Concierto</option>
                    <option value="Deporte">Deporte</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Descripcion</td>
            <td>
                <textarea name="descripcion"></textarea>
            </td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>
                <input type="date" name="fecha">
            </td>
        </tr>
        <tr>
            <td>Numero de plazas</td>
            <td>
                <input type="number" name="plazas_totales">
            </td>
        </tr>


    </table>

    <input type="hidden" name="accion" value="guardarEvento">
    <input type="submit" value="Guardar Evento">


</form>

<a href="index.php">Volver a inicio</a>

<?php 
require 'layout/footer.php' 
?>