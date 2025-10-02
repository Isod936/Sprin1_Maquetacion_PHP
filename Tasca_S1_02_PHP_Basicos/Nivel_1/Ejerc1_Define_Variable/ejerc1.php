<?php

use Vtiful\Kernel\Format;

$modelo = (int) 15; //Integer
$pesoGr = (float) 171.50; // Double
$pesoKilos = 95.300; // Double
$pesoTotal = ($pesoKilos * 1000 + $pesoGr) / 1000;
$nombre = "Iphone 15 pro"; // String
$esDeApple = true; //Boolean
$propietario = "Ivan"; //String


echo "Nombre: $nombre\n";
echo "Peso: " . number_format($pesoGr, 2) . " gramos" . PHP_EOL; //php_eol, mayor portabilidad entre sistemas
echo "Modelo: $modelo\n";
echo "Es Appel ?: " . ($esDeApple ? "Sí" : "No") . "\n";
echo "Nombre de propietario: $propietario\n";

define("PROPIETARIO_TITULO", strtoupper($propietario));
echo "****" . PROPIETARIO_TITULO . "****\n";
echo "Peso: " . number_format($pesoKilos, 3) . " kg" . PHP_EOL;
echo "Pesa con el movil " . number_format($pesoTotal, 3) . " kg";