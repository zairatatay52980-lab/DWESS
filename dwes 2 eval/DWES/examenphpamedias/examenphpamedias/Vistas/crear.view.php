<?php require 'layout/header.php'; ?>

<h2>CREAR EVENTO:</h2>
<form action="index.php?accion=crear" method="post">
    <label for="titulo">Título: </label>
    <input type="text" name="titulo" id="titulo" required><br>
    <label for="categoria">Categoría: </label>
    <input type="text" name="categoria" id="categoria" required><br>
    <label for="descripcion">Descripción: </label>
    <textarea name="descripcion" id="descripcion"></textarea><br>
    <label for="fecha">Fecha: </label>
    <input type="date" name="fecha" id="fecha" required><br>
    <label for="plazas">Número de plazas: </label>
    <input type="number" name="plazas" id="plazas" min="1" required><br>
    <input type="submit" value="Crear evento">
</form>

<p><a href="index.php">Volver al listado de eventos</a></p>

<?php require 'layout/footer.php'; ?>
