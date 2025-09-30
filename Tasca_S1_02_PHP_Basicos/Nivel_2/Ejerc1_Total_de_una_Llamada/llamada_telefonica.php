<?php
echo"Introduce los minutos de llamada :";
function CalcularCoste($tiempoMin){
    $costeMin = 0.10;
    $llamadaLarg = 0.5;
    $total = 0;
    
    if($tiempoMin <=3){
        $total = $costeMin;
    }else{
        $minutosExtra = $tiempoMin - 3;
        $total = $costeMin +($minutosExtra * $llamadaLarg);
    }
    return $total;

}
echo "Introducir minutos de llamada : ";
$tiempo = trim(fgets(STDIN));
$tiempo = intval($tiempo);
$coste = CalcularCoste($tiempo);

echo "Usted ha hablado ".$tiempo.
" minutos y tiene un coste de llamada de " .number_format($coste,decimals: 2)."€ \n";  
    
?>