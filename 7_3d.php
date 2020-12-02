<?php
//imprimir
require_once "7_1a.php";
$motorbike1 = new Motorbike("R", "2", "ABC234", "68 litros");
$motorbike1->setfuellevel("10%");
$motorbike1->setcurrentspeed("23 km/h");
$motorbike1->setstate("on");
echo $motorbike1->getvehiculo();
$motorbike1->arrancar("on");
echo "<br>";
$motorbike1->aceleracion("velocidadm");
$motorbike1->frenar("5");
$motorbike1->apagar("0");

?>