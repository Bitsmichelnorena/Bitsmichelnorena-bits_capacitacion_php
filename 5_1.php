<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1 style="text-align: center;">EL RESULTADO ES:</h1>
    <?php

    #operaciones
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];


    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multi = $num1 * $num2;
    $divi = $num1 / $num2;

    echo "el resultado de la suma es : " . $suma;
    echo "<br>";
    echo "<br>";
    echo "el resultado de la resta es : " . $resta;
    echo "<br>";
    echo "<br>";
    echo "el resultado de la multiplicacion es : " . $multi;
    echo "<br>";
    echo "<br>";
    echo "el resultado de la divicion es : " . $divi;
    echo "<br>";
    echo "<br>";
    ?>
    <center>
        <a href="5_0.thml"><button type="button">VOLVER</button></a>
    </center>
</body>

</html>