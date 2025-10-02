<?php
while (true) {
    echo "Introduce 'n' para salir o nota: ";
    $nota = trim(fgets(STDIN));

    if (strtolower($nota) === "n") {
        echo "Hasta luego!\n";
        break;
    }

    if ($nota < 0 || $nota > 10) {
        echo "La nota introducida no es correcta\n";
        continue;
    }

    $porcentaje = ($nota / 10) * 100;

    if ($porcentaje >= 60) {
        echo "El grado de $porcentaje% es de primera división\n";
    } elseif ($porcentaje >= 45) {
        echo "El grado de $porcentaje% es de segunda división\n";
    } elseif ($porcentaje >= 33) {
        echo "El grado de $porcentaje% es de tercera división\n";
    } else {
        echo "El grado de $porcentaje% el estudiante reprobará\n";
    }
}