<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Convertidor de Temperatura</title>
</head>
<body>


    <form action="" method="post">
        
        <label>Introduce la temperatura:</label><br>
        <input type="number" name="temperatura" step="any" required><br><br>

        <label>Indica la unidad de la temperatura introducida:</label>
        <select name="unidad">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select><br><br>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>