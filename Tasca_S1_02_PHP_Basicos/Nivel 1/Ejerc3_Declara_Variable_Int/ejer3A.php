<?php
$X = 30;
$Y = 10;
$N = 30.52;
$M = 10.52;
echo "-----------------------------------------------A)\n";
echo "El valor de cada variable: X = " . ($X . " Y = " . $Y) . "\n";
echo "La suma " . ($X + $Y) . "\n";
echo "El resto " . ($X - $Y) . "\n";
echo "El producto " . ($X * $Y) . "\n";
echo "El modulo " . ($X / $Y) . "\n";
echo "-----------------------------------------------1\n";
echo "El valor de cada variable: N = " . ($N . " M = " . $M) . "\n";
echo "La suma " . ($N + $M) . "\n";
echo "El resto " . ($N - $M) . "\n";
echo "El producto " . ($N * $M) . "\n";
echo "El modulo " . ($N / $M) . "\n";
echo "-----------------------------------------------2\n";

echo "Doble de cada variable : 
X=" . $X * 2 . "
Y=" . $Y * 2 . "
N=" . $N * 2 . "
M=" . $M * 2 . "\n";

$suma = $X + $Y + $N + $M;
echo "La suma de todas las variables = " . $suma . "\n";
$producto = $X * $Y * $N * $M;
echo "El producto de todas las variables = " . $producto;
