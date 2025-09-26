<?php
echo "Introduce un numero:";
$input1 = (int) readline("Introduce primer numero");
if (!is_numeric($input1)) {
    echo "El valor introducido no es un numero\n";
    exit;
}
$num1 = (int) $input1;
$input2 = (int) readline("Introduce primer numero");
if (!is_numeric($input2)) {
    echo "El valor introducido no es un numero\n";
    exit;
}
$num2 = (int) $input2;
$operador = readline("Introduce operacion (+,-,*,/): ");
switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        "resultado :$resultado \n";
        break;
    case '-':
        $resultado = $num1 - $num2;
        "resultado :$resultado \n";
        break;
    case '*':
        $resultado = $num1 * $num2;
        "resultado :$resultado \n";
        break;
    case '/':
        if ($num2 == 0) {
            echo 'No se puede dividir por 0 \n';
        } else {
            $resultado = $num1 / $num2;
            echo "resultado :$resultado \n";
        }
        break;
    default:
        echo 'El operador introducido no es correcto esta calculadora es de novatos';
}
