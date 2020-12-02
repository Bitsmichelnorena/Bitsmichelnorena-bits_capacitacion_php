


<?php

#crear variables
$num1 = array(123456789);
$num2 = array(987654321);

#funcion suma
echo "</br>";
echo "SUMA";
echo "</br>";

print_r(sumar($num1, $num2));

function sumar($num1, $num2)
{

    for ($i = 0; $i <= 0; $i++) {
        $r = $num1[$i] + $num2[$i];
    }

    return  $r;
}
#funcion resta
echo "</br>";
echo "</br>";
echo "RESTA";
echo "</br>";

print_r(restar($num1, $num2));

function restar($num1, $num2)
{

    for ($i = 0; $i <= 0; $i++) {
        $r = $num1[$i] - $num2[$i];
    }

    return  $r;
}
#funcion multiplicar
echo "</br>";
echo "</br>";
echo "MULTIPLICACION";
echo "</br>";
print_r(multiplicar($num1, $num2));

function multiplicar($num1, $num2)
{

    for ($i = 0; $i <= 0; $i++) {
        $r = $num1[$i] * $num2[$i];
    }

    return  $r;
}

#funcion dividir
echo "</br>";
echo "</br>";
echo "DIVICION";
echo "</br>";

print_r(dividir($num1, $num2));

function dividir($num1, $num2)

{

    for ($i = 0; $i <= 0; $i++) {
        $r = $num1[$i] / $num2[$i];
    }

    return  $r;
}

?>


