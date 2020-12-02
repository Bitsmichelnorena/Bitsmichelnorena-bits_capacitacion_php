<?php

//Recoge las variables enviadas en el formulario utilizando la variable superglobal.
$nombre = $_POST['nombre'];
$apellido= $_POST['apellido'];
$paises = $_POST['paises'];
$usuario = $_POST['usuario'];
$clave= md5 ($_POST['contraseña']);

//imprime la informacion
echo "<strong>INFORMACION:</strong> ". "</br>";
echo"Nombre:__ ". $nombre . "</br>";
echo"Apellido:__ ". $apellido . "</br>";
echo"Pais:__ ". $paises . "</br>";
echo"Usuario:__ ". $usuario . "</br>";
echo"Contraseña:__ ". $clave . "</br>";

?>
