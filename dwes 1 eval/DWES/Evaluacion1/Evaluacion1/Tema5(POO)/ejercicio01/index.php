<?php

class Publicacion{
    private string $autores;
    private int $anno;
    private string $editorial;
    private string $titulo;
    private string $texto;

    public function__construct(string $autores, int $anno, string $editorial, string $titulo, string $texto = ""){
        $this->autores = $autores;
        $this->anno = $anno;
        $this->editorial = $editorial;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function leer(): string{
        return $this->texto;
    }

    public function escribir(string $nuevoTexto): void{
        $this->texto .= $nuevoTexto;
    }
}

//INSTANCIACION DE OBJETOS

$publicacion1 = new Publicacion(
    "Gabriel Garcia Marquez",
    1967,
    "Editorial SantaCruz",
    "Cien años de soledad",
    "El libro es muy interesante"

);

$publicacion1->escribir("Lectura obligatoria");


echo "Publicacion 1: "; 
echo $publicacion1->leer();
echo "\n\n-------------------------\n\n";


$publicacion2 = new Publicacion(
    "Federico Garcia Lorca",
    1960,
    "Santillana",
    "La casa de Bernarda Alba",
    "Libro 5 estrellas"
);

$publicacion2->escribir("Suoer divertido");

echo "publicacion 2: ";
echo $publicacion2->leer();

