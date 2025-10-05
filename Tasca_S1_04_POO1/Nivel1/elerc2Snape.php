<?php
require_once("triangulo.php");
require_once("rectangulo.php");

$triangulo = new Triangulo(12,5);
$rectangulo = new Rectangulo(12,6);

echo"Area del triangulo " . $triangulo ->area() .PHP_EOL;
echo"Area del rectangulo " . $rectangulo ->area() .PHP_EOL;

?>