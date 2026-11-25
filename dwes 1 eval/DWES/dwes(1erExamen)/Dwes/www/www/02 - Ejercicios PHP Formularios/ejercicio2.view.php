<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Convertidor de Temperatura</title>
</head>
<body> 
    
    <h3>Calculadora</h3>

    <p>Ultimo resultado: <?= $ultimoResultado?></p>
    

    <form action="" method="post">
        
        <label>Primer numero:</label><br>
        <input type="number" name="numeroUno" required><br><br>

        <label>Segundo numero:</label><br>
        <input type="number" name="numeroDos" required><br><br>

        <label>Seleccione la operacion deseada:</label>
        <select name="operacion">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>
        </select><br><br>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>