<?php

trait Insurance
{
    public  $name = 'nombre';
    public  $age =  'edad';
    public  $eat = 'comida';

    public function mostrarnombre()
    {
        echo $this->nombre;
    }
    public function getedad()
    {
        echo $this->edad;
    }
    abstract function asignardatos(string $nombre, int $edad);
}

class Datos
{
    use  Insurance;
    public function asignardatos(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function cuota()
    {
        echo "<strong>Datos cliente</strong> <br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "La cuota de  " . $this->nombre . " es de: ";

        $res = $this->edad * strlen($this->nombre);
        echo $res;
    }
   
}

$persona = new Datos();
$persona->asignardatos("jose", "5");
echo $persona->cuota();

