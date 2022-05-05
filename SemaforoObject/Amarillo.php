<?php

class Amarillo
{
    
    private $impresor;
    public function __construct($impresor)
    {
        $this->impresor = $impresor;
    }

    public function imprimirEstado()
    {
        echo $this->impresor->imprimir("Precaución!!");
    }

    public function aplicas($color)
    {
        return $color == "amarillo";
    }

}
?>