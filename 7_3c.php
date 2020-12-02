<?php
//imprimir 
require_once "7_1a.php";

$truck = new Truck ("R", "2", "ABC234", "68 litros");
$truck->setfuellevel ("10%");
$truck->setcurrentspeed ("23 km/h");
$truck->setstate ("on");
echo $truck->getvehiculo ();
$truck->arrancar ("on");
echo "<br>";
$truck->aceleracion ("velocidad");
$truck->frenar ("");
?>
