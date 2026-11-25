<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Bodega</title>
</head>
<body>

 <form action="index.php" method="get">
        <fieldset>
        <legend>Datos bodega</legend>

            <label for='nombre'>Nombre</label>
            <input type='text' id='nombreBodega' name='nombre' placeholder="Escribe el nombre de bodega" required>
        </p>
        <p>
            <label for='direccion'>Direccion</label>
            <input type='text' id='direccion' name='direccion' placeholder = "Escribe la direccion" required>
        </p>
        <p>
            <label for='email'>Email</label>
            <input type='email' id='email' name='email' placeholder="Escribe el email" required>
        </p>
        <p>
            <label for='telefono'>Telefono</label>
            <input type='text' id='telefono' name='telefono' placeholder="Escribe tu telefono" required>
        </p>
        
        <p>
            <label for='contacto'>Persona de contacto</label>
            <input type='text' id='personaContacto' name='personaContacto' placeholder="Escribe el nombre de la persona de contacto" required>
        </p>
        <p>
            <label for='annofundacion'>Año fundacion</label>
            <input type='date' id='annofundacion' name='annofundacion' placeholder="Escribe el año de fundacion" required>
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

    
</body>
</html>