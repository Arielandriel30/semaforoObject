<?php
include_once ("Rojo.php");
include_once ("Amarillo.php");
include_once ("Verde.php");
include_once ("Desconocido.php");
include_once ("Semaforo.php");
include_once ("Impresor.php");

class Encender
{
public function __construct()
    {

    } 

    public function getSemaforo()
    {
        return new Semaforo($this->getEstado(), 'amarillo');
    }

    private function getRojo()
    {
        return new Rojo($this->getImpresor());
    }

    private function getAmarillo()
    {
        return new Amarillo($this->getImpresor());
    }

    private function getVerde()
    {
        return new Verde($this->getImpresor());
    } 

    private function getDesconocido()
    {
        return new Desconocido($this->getImpresor());
    } 

    private function getImpresor()
    {
        return new Impresor();
    } 

    private function getEstado()
    {
        return [
        $this->getAmarillo(),
        $this->getVerde(),
        $this->getRojo(),
        $this->getDesconocido()
        ];
    } 



 }

?>