<?php
require_once("7_1a.php");
$vehiculo1 = new vehicle("BMW", "5", "ABC123", "63 litros");
$vehiculo1->setfuellevel("10%");
$vehiculo1->setcurrentspeed("100 km/h");
$vehiculo1->setstate("on");
echo $vehiculo1->getvehiculo();
$vehiculo1->startEngine();
echo "<br>";
$vehiculo1->stopEngine();
echo "<br>";
$vehiculo1->fillTank();
echo "<br>";
$vehiculo1->accelerate();


?>

