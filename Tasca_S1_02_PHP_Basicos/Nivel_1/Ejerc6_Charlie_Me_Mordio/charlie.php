<?php
echo "¿Charli ha mordio el dedo ?\n";
function isBitten()
{
    $numero = rand(0, 1);
    if ($numero == 1) {
        return true;
    } else {
        return false;
    }
}
$mordido = isBitten();
if ($mordido == 1) {
    echo "Numero aleatorio: " . $mordido . "\n";
} else {
    echo "Numero aleatorio: 0 \n";
}
if ($mordido) {
    echo "Si, ha mordido\n";
} else {
    echo "No,no ha mordido\n";
}
