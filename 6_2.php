<?php
#crear vareables
$cadena1 = "Lorem ipsum dolor sit amet drupal, consectetur adipiscing elit. Etiam sapien 
<strong> Drupal </strong> mauris, vestibulum quis mattis sit amet.";

$cadena2 = "Praesent elementum urna et  <strong>Drupal</strong> condimentum 
<strong> DRUPAL</strong> vulputate blandit. Vestibulum eget ipsum <strong> Drupal 
</strong> sapien consequat vulputate <strong> Drupal </strong>. ";

$cadena3 = "Phasellus laoreet eu <strong> drupal </strong> orci et tincidunt.
Quisque ac <strong> drupal </strong>  gravida sem, non eleifend erat <strong> DrUPal </strong>.";

echo "NUMERO DE CARACTERES";
echo "<br>";
echo "cadena1 = ";
echo strlen($cadena1);
echo "<br>";
echo "cadena2 = ";
echo strlen($cadena2);
echo "<br>";
echo "cadena3 = ";
echo strlen($cadena3);

$resultado1 = str_replace("drupal", "<strong> Drupal </strong>",  $cadena1, $contador);
echo "<br><br>EL RESULTADO ES : " . $resultado1 .
    " </br> con  " . $contador . " reemplazo";

$espacio = trim($cadena1);
echo "<br>";
echo "La palabra Drupal se repite :" .
    substr_count($resultado1, "Drupal") . " veces<br>";

$resultado2 = str_replace("DRUPAL", "<strong> Drupal </strong>",  $cadena2, $contador);
echo "<br><br>EL RESULTADO ES : " . $resultado2 .
    " </br> con " . $contador . " reemplazo";

$espacio = trim($cadena2);
echo "<br>";
echo "La palabra Drupal se repite :" .
    substr_count($resultado2, "Drupal") . " veces<br>";

$resultado3 = str_replace("drupal", "<strong> Drupal </strong>",  $cadena3, $contador);
echo "<br><br>EL RESULTADO ES : " . $resultado3 .
    " </br> con " . $contador . " reemplazo";

$espacio = trim($cadena3);
echo "<br>";
echo "La palabra Drupal se repite :" .
    substr_count($resultado3, "Drupal") . " veces";
