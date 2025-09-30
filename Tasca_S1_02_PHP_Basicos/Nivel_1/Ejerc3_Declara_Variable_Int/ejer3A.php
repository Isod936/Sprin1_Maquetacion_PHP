<?php
$X = 30;
$Y = 10;
$N = 30.52;
$M = 10.52;
echo "-----------------------------------------------A)\n".PHP_EOL;
echo "El valor de cada variable: X = " . ($X . " Y = " . $Y) .PHP_EOL;
echo "La suma " . ($X + $Y) . "\n".PHP_EOL;
echo "El resto " . ($X - $Y) . "\n".PHP_EOL;
echo "El producto " . ($X * $Y) . "\n".PHP_EOL;
echo "El modulo " . ($X / $Y) . "\n".PHP_EOL;
echo "-----------------------------------------------1\n".PHP_EOL;
echo "El valor de cada variable: N = " . ($N . " M = " . $M) .PHP_EOL;
echo "La suma " . ($N + $M) . "\n";
echo "El resto " . ($N - $M) . "\n";
echo "El producto " . ($N * $M) . "\n";
echo "El modulo " . ($N / $M) . "\n";
echo "-----------------------------------------------2\n". PHP_EOL;

echo "Doble de cada variable : 
X=" . $X * 2 . "
Y=" . $Y * 2 . "
N=" . $N * 2 . "
M=" . $M * 2 . "\n".PHP_EOL;

$suma = $X + $Y + $N + $M;
echo "La suma de todas las variables = " . $suma . "\n".PHP_EOL;
$producto = $X * $Y * $N * $M;
echo "El producto de todas las variables = " . $producto;
?>