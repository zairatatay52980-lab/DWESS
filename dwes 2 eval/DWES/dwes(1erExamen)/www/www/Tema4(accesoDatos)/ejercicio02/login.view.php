<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
 
    <form action="index.php" method="get">
        <fieldset>
        <legend>Añadir nuevo empleado</legend>

            <label for='nombre'>Nombre:</label>
            <input type='text' id='nombre' name='nombre' required>
        </p>
        <p>
            <label for='apellidos'>Apellidos:</label>
            <input type='text' id='nombre' name='apellidos' required>
        </p>
        <p>
            <label for='edad'>Edad:</label>
            <input type='number' id='nombre' name='edad' required>
        </p>
        <p>
            <label for='fecha'>Fecha:</label>
            <input type='date' id='fecha' name='fecha' required>
        </p>
        <p>
            <label for='email'>Email:</label>
            <input type='email' id='email' name='email' required>
        </p>
        <p>
            <label for='dni'>DNI:</label>
            <input type='dni' id='dni' name='dni' required>
        </p>
        <p>
            <label for='apellidos'>Sexo:</label>
            <select name="sexo">
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
        </select>
        </p>
        <p>
            <textarea name="curriculum" id="curriculum"></textarea>
        </p>
        <p>
            <input type='submit' value='Enviar'>
        </p>
    </fieldset>
  
    </form>

    <p>
    <a class="btn btn-primary" href="index.php">Volver</a>
    </p>

    <br>
    <a href="index.php?accion=vaciar">Vaciar lista</a>
</body>
</html>