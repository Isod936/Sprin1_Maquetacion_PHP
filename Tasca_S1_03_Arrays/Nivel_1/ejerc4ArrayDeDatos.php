<?php

$comidaFavorita = array(
    "Sopas " => "casi todas",
    "Verduras" => "frescas",
    "Carnes" => "tambien :)",
);
$myInfo = array(
    'nombre' => 'Ivan',
    'edad' => '49',
    'mail' => 'skiba771@gmail.com',
    'comida' => $comidaFavorita
);
print_r($myInfo);
echo $myInfo['nombre'];
