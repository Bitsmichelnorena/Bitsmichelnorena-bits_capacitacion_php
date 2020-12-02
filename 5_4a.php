<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <center>
</head>
CALCULADORA

<body>
    <form method="POST" action="5_4a.php">
        <input type="text" name="numero1"><br><br>
        <input type="text" name="numero2"><br><br>
        <select name="opciones">
            <option value="0">sumar</option>
            <option value="1">restar</option>
            <option value="2">multiplicar</option>
            <option value="3">dividir</option>
        </select><br>
        <br>

        <input type="submit" name="respuesta" value="respuesta">



    </form>

    <?php
    #crear operacion 
    include("5_4.php");

    if (isset($_REQUEST['respuesta'])) {
        $n1 = $_REQUEST['numero1'];
        $n2 = $_REQUEST['numero2'];
        $op = $_REQUEST['opciones'];

        switch ($op) {

            case 0:
                echo "$n1 + $n2 = " . Matematicas::sumar($n1, $n2);
                break;
            case 1:
                echo "$n1 - $n2 = " . Matematicas::restar($n1, $n2);
                break;
            case 2:
                echo "$n1 * $n2 = " . Matematicas::multiplicar($n1, $n2);
                break;
            case 3:
                echo "$n1 / $n2 = " . Matematicas::dividir($n1, $n2);
                break;
        }
    }



    ?>
    </center>
</body>

</html>