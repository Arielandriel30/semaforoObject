<?php

class Verde
{
    
    private $impresor;
    public function __construct($impresor)
    {
        $this->impresor = $impresor;
    }

    public function imprimirEstado()
    {
        echo $this->impresor->imprimir("Siga!!");
    }

    public function aplicas($color)
    {
        return $color == "verde";
    }

}
