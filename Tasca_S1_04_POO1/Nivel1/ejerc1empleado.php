<?php

include('class/Personal.php');

$empleado1 = new Personal("Carlos", 7500);
$empleado2 = new Personal("Ana", 5500);
$empleado3 = new Personal("Leonardo", 5000);

$empleado1->getPreparar();
$empleado2->getPreparar();
$empleado3->getPreparar();


?>