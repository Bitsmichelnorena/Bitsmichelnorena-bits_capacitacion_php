<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>LA RESPUESTA ES:</h1>
    <?php
    #desarrollo 
    $cadena1 = "abc";
    $cadena2 = "abc";

    if ($cadena1 > $cadena2) {
        echo "$cadena1 es mayor que $cadena2";
    } elseif ($cadena1 == $cadena2) {
        echo "$cadena1 es igual que $cadena2";
    } else {
        echo "$cadena1 es menor que $cadena2";
    }
    ?>
</body>

</html>