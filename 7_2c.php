<?php
require_once "7_1a.php";
$vehiculo3 = new Vehiculo("Renault STEPWAY", "5", "ABC234", "68 litros");
$vehiculo3->setfuellevel("10%");
$vehiculo3->setcurrentspeed("100 km/h");
$vehiculo3->setstate("on");
echo $vehiculo3->getvehiculo();

$vehiculo3->vehiculo3("89");
echo "<br>";
$vehiculo3->arrancar("on");
echo "<br>";
$vehiculo3->acelerar("acelerar");
echo "<br>";
$vehiculo3->frenar("5");
echo "<br>";
$vehiculo3->apagar("velocidad");
echo"<br>";
$vehiculo3->llenar("60");

?>
