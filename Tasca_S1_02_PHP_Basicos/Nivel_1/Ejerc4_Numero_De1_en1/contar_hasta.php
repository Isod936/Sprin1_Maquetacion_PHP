<?php
function contar_hasta($maximo = 10, $paso = 1)
{
    for ($i = 0; $i <= $maximo; $i += $paso) {
        if ($i == 0) {
            echo "".$i ;
        } else {
            echo ", ".$i;
        }
    }
}

echo ("\nMuestra determinado ") . PHP_EOL;
contar_hasta() . PHP_EOL;
echo ("\n\nDe 1 a 5") . PHP_EOL;
contar_hasta(5) . PHP_EOL;
echo ("\n\nDe 1 a 10 de 2 en 2") . PHP_EOL;
contar_hasta(10, 2) . PHP_EOL;