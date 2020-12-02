<?php

$string = "Vestibulum ante ipsum primis Drupal 7 faucibus orci luctus et ultrices
 posuere Drupal 10 cubilia Curae; Morbi euismod drUpal9 iaculis sem a gravida drupal6. ";
$reemplazos1 = 0;
$reemplazos2 = 0;
#buscar palabras en una cadena

if (preg_match('/drupal|Drupal|drUpal/', $string)) {
    echo"Coincide alguna palabra :) !";
} else {
    echo"No se ha encontrado coincidencias";

}


$string1 = str_replace("drUpal9", "Drupal 9", $string, $reemplazos1);

echo "(" . $reemplazos1 . ") reemplazos en : " . $string1 . "<br />";

?>

