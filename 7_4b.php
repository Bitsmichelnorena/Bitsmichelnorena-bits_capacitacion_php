<?php

require_once "7_4a.php";
//crear clase
class Cat extends Pet
{
    private $name = "nombre";
    public static $max_feed = "";
    private $feed = 0;

    function __construct($name, $age)
    {
        $this->nombre = $name;
        $this->edad = $age;
    }
    public function getnombre(): string
    {
        return $this->nombre;
    }
    public function getedad(): string
    {
        return $this->edad;
    }
    public function getcantidad($max_feed)
    {
        if ($max_feed == 5) {

            echo "La mascota " . $this->nombre . " ya fue alimentada";
        } else {
            echo " A la mascota  " . $this->nombre . "  le falta algun alimento";
        }
    }
}

?>
