<?php
while (true) {
    echo "Introduce 'n' para salir o nota para vertificar el grado  : ";
    $nota1 = str_replace(',', '.', trim(fgets(STDIN)));

    if (strtolower($nota1) === "n") {
        echo "Hasta luego !\n";
        exit;
    }
    $nota = (float) $nota1;
    if (!is_numeric($nota) || intval($nota) != $nota || $nota < 0 || $nota > 10) {
        echo "La nota introducida no es correcta\n";
    }
    $porcentaje = ($nota / 10) * 100;
    if ($porcentaje >= 60) {
        echo "El grado de " . $porcentaje . "% es de primera división\n";
    } elseif ($porcentaje >= 45) {
        echo "El grado de " . $porcentaje . "% es de segunda división\n";
    } elseif ($porcentaje >= 33) {
        echo "El grado de " . $porcentaje . "% es de tercera división\n";
    } else {
        echo "El grado de " . $porcentaje . "%  el estudiante reprobará\n";
    }
}
