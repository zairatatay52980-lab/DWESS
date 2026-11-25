<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>

<h4>Calculadora</h4>

<?php if($resultado !== null): ?>
    <p>Ultimo resultado <?= $resultado?></p>
<?php endif; ?>

<form action="index.php" method="POST">
<p>
    <label>Primer numero: </label>
    <input name="numero1" type="number" required></input>
</p>
<p>
    <label>Segundo numero: </label>
    <input name="numero2" type="number" required></input>
</p>

    <p>
    <label>Selecione la operacion deseada: </label>
    <select name="operacion" required>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
    </select>
    </p>

    <input type="submit" value="calcular">

</form>


</body>
</html>