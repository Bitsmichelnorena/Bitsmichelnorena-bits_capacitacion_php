<?php

class Vehicle
{
    public $brand = '';
    public $seats = '';
    public $fuel_capacite = '';
    public $license_plate = '';
    protected $fuel_level = 0;
    protected $current_speed = 0;
    protected $state = true or false;
    public $startEngine = '';
    public $acelerate = '';
    public $slowDowm = '';
    public $stopEngine = '';
    public $fillTank = '';


    #----------------------------------------------------------------------

    function __construct($brand, $seats, $license_plate, $fuel_capacite)
    {
        $this->marca = $brand;
        $this->asientos = $seats;
        $this->placa = $license_plate;
        $this->capacidad_combustible = $fuel_capacite;
        $this->nivel_combustible = 0;
        $this->velocidad = 0;
    }
    #-------------------------------------------------------------
    public function getbrand(): string
    {
        return $this->marca;
    }
    public function getseats(): string
    {
        return $this->asientos;
    }
    public function getlicence_plate(): string
    {
        return $this->placa;
    }
    #----------------------------------------------------------

    public function setfuellevel(string $nivel)
    {
        $this->nivel_combustible = $nivel;
    }
    public function setcurrentspeed(string $velocidad)
    {
        $this->velocidad  = $velocidad;
    }
    public function setstate($estado)
    {
        $this->estado = $estado;
    }
    #-------------------------------------------------------------------------------

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
    #--------------------------------------------------------------------------------
    public function startEngine()
    {
        if ($this->state == true) {
            echo "El vehiculo con placa  " . $this->placa . " se ha arrancado";
        } else {
            echo "el vehiculo con placa  " . $this->placa . " ya estaba en marcha";
        }
    }
    #--------------------------------------------------------------------------------
    public function accelerate()
    {
        $this->current_speed += 1;
        $this->current_speed += 1;
        $this->current_speed += 1;
        $this->fuel_level -= 1;
        $this->fuel_level -= 1;
        $this->fuel_level -= 1;

        if ($this->current_speed >= 1) {
            echo " El vehículo " . $this->placa . " ha incrementado la velocidad en 1. 
            La velocidad actual es " . $this->current_speed . " 
            El nivel de combustible bajo a " . $this->fuel_level;
        } else {
            echo "no cumple la operacion";
        }
    }
    #-------------------------------------------------------------------------------------------------------------
    public function slowDown()
    {
        if (isset($_POST["numero"])) {
            $numero = (int)$_POST["numero"];
        }

        if (isset($_POST['sumar'])) {
            $numero++;
        } elseif (isset($_POST['restar'])) {
        }
    }
    #----------------------------------------------------------------------------------------
    public function stopEngine()
    {

        if ($this->velocidad == 0) {
            echo "El vehiculo con placa  " . $this->placa . " se ha apagado ";
        } else {
            echo "El vehículo con placa " . $this->placa . " ya esta apagado ";
        }
    }
    #-----------------------------------------------------------------------------------------
    public function fillTank()
    {

        if ($this->capacidad_combustible) {
            echo "El vehiculo con placa  " . $this->placa . " se esta cargando .  ";
        } else {
            echo "El vehículo con placa " . $this->placa . " ya esta lleno ";
        }
    }
    #-------------------------------------------------------------------------------------------
}
class MotorBike extends Vehicle
{
    protected $tipo = 'motorbike';
    public function aceleracion()
    {
        $velocidadm = 0;


        #$velocidad++;

        $nivel_combustible = 5;

        #$nivel_combustible--;
        do {
            $velocidadm++;
            $velocidadm++;
            $velocidadm++;
            $nivel_combustible--;

            echo "<p> La motocicleta con placa  " . $this->placa .
                " a incrementado la velocidad en 3% su velocidad actual es de  " . $velocidadm .
                "  y el nivel de combustible bajo a " . $nivel_combustible;
        } while ($nivel_combustible >= 3);
    }
    public function frenar($velocidadm)
    {

        do {
            $velocidadm--;
            echo "<p> El vehiculo con placa  " . $this->placa .
                " decremento la velocidad en 1% su velocidad actual es de  " . $velocidadm;
        } while ($velocidadm >= 1);
        if ($velocidadm == 0) {
            echo "<p> El vehículo con placa " . $this->placa . " está parado ";
        } else {
        }
    }
}
class Car extends Vehicle
{
    private $tipo = 'car';
    public function aceleracion()
    {
        $velocidad = 0;


        #$velocidad++;

        $nivel_combustible = 5;

        #$nivel_combustible--;
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
class Truck extends Vehicle
{
    private $tipo = 'truck';
    public function aceleracion()
    {
        $velocidad = 0;


        #$velocidad++;

        $nivel_combustible = 5;

        #$nivel_combustible--;
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
        } else {
        }
    }
}
