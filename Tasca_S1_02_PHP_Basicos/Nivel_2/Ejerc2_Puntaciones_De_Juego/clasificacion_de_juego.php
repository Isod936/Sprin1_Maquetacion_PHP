<?php
function suma ($a,$b, $c) {
    return $a + $b + $c;
}
function media ($a, $b, $c) {
    return ($a + $b + $c)/3;
}
function clasificacion($puntos) {
    if ($puntos < 4000) {
        return "Principante";
    }elseif ($puntos > 4001 && $puntos < 8000) {
        return "Intermedio";
    }else{
        return "Profesional";
    }
    
}
echo"Introduce primera puntacion :";
$pun1 = trim(fgets(STDIN));
echo"Introduce segunda puntacion :";
$pun2 = trim(fgets(STDIN));
echo"Introduce tercera puntacion :";
$pun3 = trim(fgets(STDIN));

$total = suma($pun1,$pun2,$pun3);
$media = media( $pun1, $pun2, $pun3 );
$nivel = clasificacion($total);

echo "Suma: " . $total . "puntos \n";
echo "Media: " . number_format($media, 2) . "puntos\n";
echo "Clasificación: " . $nivel . "\n";

?>