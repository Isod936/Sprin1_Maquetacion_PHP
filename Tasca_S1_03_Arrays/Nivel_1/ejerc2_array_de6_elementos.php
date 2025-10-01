<?php
$array = array(0, 1, 2, "string", 3, 4);

var_dump($array);

echo count($array) . " (con count) \n";
echo sizeof($array) . " (con sizeof) \n";

$indice = count($array) - 3;
unset($array[$indice]);
print_r($array);
echo "Aqui se ve que el string esta eliminado por el indice. \n\n";
$array = array_values($array);
print_r($array);
echo "Reorganizado";