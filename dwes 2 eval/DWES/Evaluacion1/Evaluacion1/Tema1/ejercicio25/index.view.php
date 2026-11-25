<html>
    <head>
        <title>ejercicio 24 </title>
    </head>
    <body>
        <h3>AGENDA</h3>

        <table>
            <tr>Nombre</tr>
            <tr>Apellidos</tr>
            <tr>Telefono</tr>
            <tr>Email</tr>

            <?php for($i=0 ; $i <= count($agenda); $i++)?>
            
            <td><?= $agenda[$i] ?></td>

        </table>
        
        
        </ul>
     
    </body>
</html>