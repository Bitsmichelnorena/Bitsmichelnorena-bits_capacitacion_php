<?php
//imprimir
require_once "7_1a.php";
$motorbike = new Motorbike("R", "2", "ABC234", "68 litros");
$motorbike->setfuellevel("10%");
$motorbike->setcurrentspeed("23 km/h");
$motorbike->setstate("on");
echo $motorbike->getvehiculo();
$motorbike->arrancar("on");
echo "<br>";
$motorbike->aceleracion("velocidad");

?>