<?php
//crear clase
class Pet 
{

    public $age = "edad";
    public $quantity = "feed";
    
    function __construct($age)
    {
        $this->edad=$age;
    }
     public function getmascota()
     {
         echo"mascota <br>";
         echo"nombre:  " . $this->nombre . "<br>";
         echo"edad:  " . $this->edad . "<br>";
     }

}
?>

