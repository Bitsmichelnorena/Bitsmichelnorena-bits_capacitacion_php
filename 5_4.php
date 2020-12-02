<?php

class Matematicas
{
    #creacion de operaciones 
    public static function sumar($num1, $num2)
    {
        $sumar = $num1 + $num2;
        return $sumar;
    }
    public static function restar($num1, $num2)
    {
        $restar = $num1 - $num2;
        return $restar;
    }
    public static function multiplicar($num1, $num2)
    {
        $multi = $num1 * $num2;
        return $multi;
    }
    public static function dividir($num1, $num2)
    {
     $divi = $num1 / $num2;

     return $divi;
   
    }
}

?>
