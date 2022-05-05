<?php
class Semaforo
{
    private $estado;
    private $color;

    public function __construct($estado, $color)
    {
       $this->estado = $estado;
       $this->color = $color;


    }

    public function mostrarEstado()
    {
          foreach ($this->estado as $estado) { //aca recorre los 4 Estados
             if ($estado->aplicas($this->color)) { // les pregunta si aplica
                  $estado->imprimirEstado(); // si aplica imprime
                 break; 
             }
          }
        

    }
}
