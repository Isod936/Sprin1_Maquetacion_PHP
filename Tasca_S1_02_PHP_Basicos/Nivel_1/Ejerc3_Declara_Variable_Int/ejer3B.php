<?php
echo "Bienvenido a calculadora \n";

$input1 = trim(readline("Introduce un numero: "));
if (!is_numeric($input1)) {
    echo "El numero introducido no es correcto";
    exit;
}
$num1 = (float) $input1;

$input2 = trim(readline("Introduce segundo numero: "));
if (!is_numeric($input2)) {
    echo "El numero introducido no es correcto";
    exit;
}
$num2 = (float) $input2;

$operador = trim(readline("Introduce operacion (+,-,*,/): "));

switch ($operador) {
    case "+":
        echo "Resultado es: " . ($num1 + $num2);
        break;
    case "-":
        echo "Resultado es: " . ($num1 - $num2);
        break;
    case "*":
        echo "Resultado es: " . ($num1 * $num2);
        break;
    case "/":
        if ($num2 == 0.0) {
            echo "No se puede dividir por 0";
        } else {
            echo "Resultado es: " . ($num1 / $num2);
        }
        break;
    default:
        echo "Operador no valido";
        exit;
}
