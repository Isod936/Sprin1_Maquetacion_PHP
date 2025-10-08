<?php
require_once("Animales.php");

$miPerro = new Perro("Brus");
$miGato = new Gato("Barsik");

echo "El perro se lama " . $miPerro->nombre . " el perro habla " . $miPerro ->habla(). PHP_EOL ;

echo "El gato se lama " . $miGato->nombre . " el gato habla " . $miGato ->habla(). PHP_EOL;


?>