<?php

echo "PAISES";
echo "</br>";

//crear script

$countries = [
    'uk' => 'United Kingdom',
    'fr' => 'France',
    'pt' => 'Portugal',
    've' => 'Venezuela',
    'at' => 'Austria',
    'es' => 'Spain',
    'co' => 'Colombia'
];

//comprobar la existencia de un caracter

$buscar = 'Colombia';
$resultSearch = array_search($buscar, $countries);
if ($resultSearch) {
    echo 'Mi pais de origen es  "' . $buscar .
        '" y esta en la lista ' . $resultSearch;
} else {
    echo 'mi pais de origen es "' . $buscar .
        '" pero no se ha encontrado en la lista.';
}
echo "</br>" . "</br>";

//orden alfabetico

ksort($countries, SORT_STRING);
var_export($countries);
echo "</br>" . "</br>";

//imprimir con prin_t

echo "</br>";
print_r($countries);
echo "</br>" . "</br>";


// nuevo array separado por comas

$cadena = implode(",", $countries);
echo $cadena;

?>
+]
