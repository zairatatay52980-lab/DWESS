<?php 
$animales = ['perro', 'gato', 'caballo', 'vaca'];
$colores=['rosa', 'amarillo', 'verde', 'naranja'];

/*calcular nº elementos*/
$sizeAnimales = count($animales);
echo count($colores);

/*Añadir elemento al final de animales utilizando funcion */
function añadirAnimal($animales){
    array_push($animales, 'hamster');

}

print_r($animales);


/*Añadir elemento al principio de colores utilizando funcion */

function añadirColor($colores){

    array_unshift($colores, 'rojo');
}
print_r($colores);


/**Crear tercer array que incluyq los elementos de los dos arrys */

$tercerArray = [];


?>