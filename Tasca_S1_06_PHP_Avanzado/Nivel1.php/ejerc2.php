<?php
echo "Este archivo se llama: " . __FILE__ . PHP_EOL;

echo "Estoy en la línea: " . __LINE__ . PHP_EOL;

echo "El directorio de este archivo es: " . __DIR__ . PHP_EOL;

function mostrarFuncion() {
    echo "Estoy dentro de la función: " . __FUNCTION__ . PHP_EOL;
}
mostrarFuncion();
?>