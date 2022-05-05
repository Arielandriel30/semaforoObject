<?php

include_once ("Encender.php");



$encender = new Encender();

$semaforo = $encender->getSemaforo();
$semaforo->mostrarEstado();


?>