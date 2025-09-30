<?php

    $modelo = 15; //String
    $peso = 171.5; // Double
    $nombre = "Iphone 15 pro"; // String
    $esDeApple = true; //Boolean
    $propietario = "Ivan"; //String

    echo "Nombre: $nombre\n";
    echo "Peso: $peso grammos\n";
    echo "Modelo: $modelo\n";
    echo "Es Appel ?: " . ($esDeApple ? "Sí" : "No") . "\n";
    echo "Nombre de propietario: $propietario\n";
    define("PROPIETARIO_TITULO", strtoupper($propietario));
    echo "****" . PROPIETARIO_TITULO . "****";
    ?>