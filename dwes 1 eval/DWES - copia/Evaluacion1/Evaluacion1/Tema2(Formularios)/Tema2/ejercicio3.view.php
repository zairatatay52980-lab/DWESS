<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Convertidor de Temperatura</title>
</head>
<body> 

    <form action="" method="post">

        <h1>Formulario de contacto</h1>

        <p>Resultado: <?=$mensajeFinal?>  </p>

        <label>Asunto:</label><br>
        <input type="text" name="asunto" required><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" required><br><br>

        <label>Motivo:</label>
        <select name="motivo">
            <option value="soporteTecnico">Soporte tecnico</option>
            <option value="infoProducto">Información de productos</option>
            <option value="queja">Queja</option>
            <option value="otro">Otro</option>
        </select><br><br>

        <label>Mensaje:</label><br>
        <textarea name="mensaje"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
        
    </form>

</body>
</html>