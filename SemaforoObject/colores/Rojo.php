<?php

class Rojo
{
    
    private $impresor;
    public function __construct($impresor)
    {
        $this->impresor = $impresor;
    }

    public function imprimirEstado()
    {
        echo $this->impresor->imprimir("Frene!!");
    }

    public function aplicas($color)
    {
        return $color == "rojo";
    }

}






?>