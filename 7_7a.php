<?php
class Mascota
{
    public $nombre;
    public $edad;

    //----------------------------------------------------------------------

    function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    //-------------------------------------------------------------
    public function getnombre(): string
    {
        return $this->nombre;
    }
    public function getedad(): string
    {
        return $this->edad;
    }

    //-------------------------------------------------------------------------------

    public function cuota()
    {
        echo "<strong>MASCOTA</strong> <br>";
        echo "NOMBRE: " . $this->nombre . "<br>";
        echo "EDAD: " . $this->edad . "<br>";
        echo "LA CUOTA DE  ".$this->nombre . " ES DE: ";

        $res = $this->edad * strlen($this->nombre);
        echo $res;
    }

    //--------------------------------------------------------------------------------
    public function getcantidad($max_feed)
    {
        if ($max_feed == 10) {

            echo  $this->nombre . " ya fue alimentado";
        } else {
            echo " A " . $this->nombre . "  le falta algun alimento";
        }
    }
}

$mascota = new Mascota("lucas", "10");
echo $mascota->cuota();
echo "<br>";
$mascota->getcantidad('3');
