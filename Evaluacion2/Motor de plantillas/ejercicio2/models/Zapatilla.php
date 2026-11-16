<?php
namespace 

class Zapatilla{
    private string $marca;
    private string $modelo;
    private string $tipo;
    private string $precio;

    public function __construct(string $marca, string $modelo, string $tipo, string $precio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipo = $tipo;

    }
}

