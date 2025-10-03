<?php
$list = array("hola", "Php", "Html");
function tiene(array $palabras, string $caracter): bool {
    foreach ($palabras as $palabra) {
        if(stripos($palabra, $caracter) !== false) {
            echo ("esta en el array \n");
            return true;
        }
    }
    echo ("No esta en el array \n");
    return false;
}

echo ("Escribe una letra : ");
$letra = trim(fgets(STDIN));
var_dump(tiene($list, $letra));

echo ("Devuelve : ").

print_r($list);
?>