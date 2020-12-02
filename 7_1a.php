<?php

#crear clase
class Vehiculo
{
    public $brand = 'marca';
    public $seats = 'asientos';
    public $fuel_capacite = 'capacidad_combustible';
    public $license_plate = 'placa';
    private $fuel_level = 0;
    private $current_speed = 0;
    private $state = 'off';
    public $startEngine = 'arrancar';
    public $acelerate = 'acelerar';
    public $slowDowm = 'frenar';
    public $stopEngine = 'apagar';
    public $fillTank = 'llenar';


    //----------------------------------------------------------------------

    function __construct($brand, $seats, $license_plate, $fuel_capacite)
    {
        $this->marca = $brand;
        $this->asientos = $seats;
        $this->placa = $license_plate;
        $this->capacidad_combustible = $fuel_capacite;
        $this->nivel_combustible = 0;
        $this->velocidad = 0;
    }
    //-------------------------------------------------------------

    public function getseats(): string
    {
        return $this->asientos;
    }
    public function getbrand(): string
    {
        return $this->marca;
    }
    public function getlicenceplate(): string
    {
        return $this->placa;
    }
    //----------------------------------------------------------
    public function setstate(string $estado)
    {
        $this->estado = $estado;
    }
    public function setfuellevel(string $nivel)
    {
        $this->nivel_combustible = $nivel;
    }
    public function setcurrentspeed(string $velocidad)
    {
        $this->velocidad  = $velocidad;
    }
    //-------------------------------------------------------------------------------

    public function getvehiculo()
    {
        echo "<strong>Descripcion del auto</strong> <br>";
        echo "marca: " . $this->marca . "<br>";
        echo "numero de asientos: " . $this->asientos . "<br>";
        echo "capacidad combustible: " . $this->capacidad_combustible . "<br>";
        echo "numero matricula: " . $this->placa . "<br>";
        echo "nivel combustible: " . $this->nivel_combustible . "<br>";
        echo "velocidad: " . $this->velocidad . "<br>";
        echo "estado: " . $this->estado . "<br>";
    }
    //--------------------------------------------------------------------------------
    public function arrancar(string $estado)
    {
        if ($estado == "on") {
            echo "El vehiculo con placa  " . $this->placa . " se ha arrancado";
        } else {
            echo "el vehiculo con placa  " . $this->placa . " ya estaba en marcha";
        }
    }
    //--------------------------------------------------------------------------------
    public function acelerar()
    {

        $velocidad = 0;

        //$velocidad++;

        $nivel_combustible = 5;

        //$nivel_combustible--;
        do {
            $velocidad++;
            $nivel_combustible--;

            echo "<p> El vehiculo con placa  " . $this->placa .
                " a incrementado la velocidad en 1% 
                su velocidad actual es de  " . $velocidad .
                "  y el nivel de combustible bajo a " . $nivel_combustible;
        } while ($nivel_combustible >= 1);
    }
    //-------------------------------------------------------------------------------------------------------------
    public function frenar($velocidad)
    {

        do {
            $velocidad--;
            echo "<p> El vehiculo con placa  " . $this->placa .
                " decremento la velocidad en 1% 
                su velocidad actual es de  " . $velocidad;
        } while ($velocidad >= 1);
        if ($velocidad == 0) {
            echo "<p> El vehículo con placa " . $this->placa . " está parado ";
            {
            }
        }
    }

    //----------------------------------------------------------------------------------------
    public function apagar($velocidad)
    {

        if ($velocidad == 0) {
            echo "El vehiculo con placa  " . $this->placa . " se ha apagado ";
        } else {
            echo "El vehículo con placa " . $this->placa . " ya esta apagado ";
        }
    }

    //-----------------------------------------------------------------------------------------
    public function llenar($capacidad_combustible)
    {

        if ($capacidad_combustible <= 63) {
            echo "El vehiculo con placa  " . $this->placa . " se esta cargando .  ";
        } else {
            echo "El vehículo con placa " . $this->placa . " ya esta lleno ";
        }
    }
    
    #-------------------------------------------------------------------------------------------
    public function vehiculo3($capacidad_combustible)
    {
        if ($capacidad_combustible <= 63) {
            echo "El vehiculo con placa  " . $this->placa . " se esta cargando .  ";
        } else {
            echo "El vehículo con placa " . $this->placa . " ya esta lleno ";
        }
    }
}
class Motorbike extends Vehiculo
{
    private $tipo = 'motorbike';
    public function aceleracion()
    {
        $velocidadm = 0;


        //$velocidad++;

        $nivel_combustible = 5;

        //$nivel_combustible--;
        do {
            $velocidadm++;
            $velocidadm++;
            $velocidadm++;
            $nivel_combustible--;

            echo "<p> El vehiculo con placa  " . $this->placa .
                " a incrementado la velocidad en 1% su velocidad actual es de  " . $velocidadm .
                "  y el nivel de combustible bajo a " . $nivel_combustible;
        } while ($nivel_combustible >= 3);
    }
    //--------------------------------------------------------------------------------------------
    public function frenar($velocidadm)
    {

        do {
            $velocidadm--;
            echo "<p> El vehiculo con placa  " . $this->placa .
                " decremento la velocidad en 1% su velocidad actual es de  " . $velocidadm;
        } while ($velocidadm >= 1);
        if ($velocidadm == 0) {
            echo "<p> El vehículo con placa " . $this->placa . " está parado ";
        }
    }
}
class Car extends Vehiculo
{
    private $tipo = 'car';
    public function aceleracion()
    {
        $velocidad = 0;


        //$velocidad++;

        $nivel_combustible = 5;

        //$nivel_combustible--;
        do {
            $velocidad++;
            $velocidad++;
            $velocidad++;
            $nivel_combustible--;

            echo "<p> El vehiculo con placa  " . $this->placa .
                " a incrementado la velocidad en 1% su velocidad actual es de  " . $velocidad .
                "  y el nivel de combustible bajo a " . $nivel_combustible;
        } while ($nivel_combustible >= 1);
    }
}
class Truck extends Vehiculo
{
    private $tipo = 'truck';
    public function aceleracion()
    {
        $velocidad = 0;


        //$velocidad++;

        $nivel_combustible = 5;

        //$nivel_combustible--;
        do {
            $velocidad++;

            $nivel_combustible--;

            echo "<p> El vehiculo con placa  " . $this->placa .
                " a incrementado la velocidad en 1% su velocidad actual es de  " . $velocidad .
                "  y el nivel de combustible bajo a " . $nivel_combustible;
        } while ($nivel_combustible >= 1);
    }
    public function frenar($velocidad)
    {
        $dec = 0.5;

        do {
            echo "<p> El vehiculo con placa  " . $this->placa .
                " decremento la velocidad en 1% su velocidad actual es de  " . $velocidad - $dec;
        } while ($velocidad >= 1);
        if ($velocidad == 0) {
            echo "<p> El vehículo con placa " . $this->placa . " está parado ";
        }

    }
}

?>