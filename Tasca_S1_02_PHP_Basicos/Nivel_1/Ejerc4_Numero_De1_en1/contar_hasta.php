<?php
function contar_hasta($maximo = 10, $paso = 1) {
    if (!is_numeric($maximo) || !is_numeric($paso)) {
        echo "Error: ambos parámetros deben ser numéricos." . "<br>";
        return;
    }

    $maximo = (float) $maximo;
    $paso   = (float) $paso;

    if ($paso == 0.0) {
        echo "Error: el paso no puede ser 0." . "<br>";
        return;
    }
    $paso = abs($paso);
    $inicio = 1.0;
    $eps = 1e-12; 
    echo "Contando desde {$inicio} hasta {$maximo} de {$paso} en {$paso}:" . "<br>";

    if ($maximo >= $inicio) {
        for ($i = $inicio; $i <= $maximo + $eps; $i += $paso) {
            echo rtrim(rtrim(number_format($i, 12, '.', ''), '0'), '.') . "<br>";
        }
       
    } else {
        for ($i = $inicio; $i >= $maximo - $eps; $i -= $paso) {
            echo rtrim(rtrim(number_format($i, 12, '.', ''), '0'), '.') . "<br>";
        }
        
    }
}

contar_hasta();


contar_hasta(5);
//contar_hasta(12, 2);
//contar_hasta(-3, 1);
contar_hasta(8, 3);
//contar_hasta(20, 5);
//contar_hasta(15, 5);
?>