<?php
//crear variables
$numbers = [3, 45, 22, 12, 33, 23, 44, 1, 121];
$cadena = "5:76:7:8";
$long = count($numbers);
$count = 0;
$count1 = 0;

//1__Imprimir numero de elementos de un array

echo "numero de elementos " . count($numbers);
echo "</br>";
echo "</br>";

//2__imprimir el número de elementos pares y de elementos impares

for ($i = 0; $i < $long; $i++) {
    if ($numbers[$i] % 2 == 0) {
        $count++;
        echo " par = " . $numbers[$i];
        echo "</br>";
    } else {
        $count1++;
        echo " impar = " . $numbers[$i];
        echo "</br>";
    };
};

echo "</br>";
echo "hay " . $count . " pares";
echo "</br>";
echo "hay " . $count1 . " impares";
echo "</br>" . "</br>";

//3__Ordena los elementos del array en orden ascendente.

sort($numbers, SORT_NUMERIC);
print_r($numbers);
echo "</br>";

//4__Crea un array llamado $morenumbers

$morenumbers = explode(",", $cadena);
echo "</br>";

//5__Combinar los dos arrays

$numbers = array_merge($numbers, $morenumbers);
echo "</br>";

//6__Ordena los elementos del array en orden decendente.

rsort($numbers, SORT_NUMERIC);

//7_imprimir array con print_r

print_r($numbers);

?>
