<?php
//imprimir
require_once  "7_1a.php";
$vehiculo1 = new vehiculo("BMW", "5", "ABC123", "63 litros");
$vehiculo1->setfuellevel("10%");
$vehiculo1->setcurrentspeed("100 km/h");
$vehiculo1->setstate("on");
echo $vehiculo1->getvehiculo();
$vehiculo1->arrancar("on");
echo "<br>";
$vehiculo1->acelerar("velocidad");
echo "<br>";
$vehiculo1->frenar("5");
echo "<br>";
$vehiculo1->apagar("velocidad");
echo "<br>";
$vehiculo1->llenar("60");
?>