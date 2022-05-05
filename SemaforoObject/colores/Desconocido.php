<?php

class Desconocido
{
    
    private $impresor;
    public function __construct($impresor)
    {
        $this->impresor = $impresor;
    }

    public function imprimirEstado()
    {
        echo $this->impresor->imprimir("El estado actual no es válido para un Semáforo!!");
    }

    public function aplicas($color)
    {
        return $color != "verde" && $color != "rojo" 
        && $color != "amarillo";
    }

}