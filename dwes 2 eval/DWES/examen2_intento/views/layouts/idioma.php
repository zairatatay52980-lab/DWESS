<form action="index.php" method="GET">
    <select name="idioma">
        <option value="es" <?= $idioma === "es" ? "selected" : "" ?>>Castellano</option>
        <option value="eus" <?= $idioma === "eus" ? "selected" : "" ?>>Euskera</option>
    </select>

    <input type="hidden" name="accion" value="cambiarIdioma">
    <input type="submit" value="Enviar">
</form>