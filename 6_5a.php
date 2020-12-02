<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    DATOS<BR />
    <form action="6_5a.php" method="POST" name="prm"><br /><br />
        id:<input type="text" required name="id"><br /><br />
        marca:<input type="text" required name="marca"><br /><br />
        usuario:<input type="text" required name="user"><br /><br />
        <input type="submit" value="guardar"><br /><br />
    </form>
</body>

</html>

<?php

#crear archivo php_example.log
$archivo = fopen("php_example.log", "a")
    or die("no se guardaron los datos");

fwrite($archivo, "DATOS");
fwrite($archivo, "\n");
fwrite($archivo, "ID: " . $_POST["id"]);
fwrite($archivo, "\n");
fwrite($archivo, "MARCA: " . $_POST["marca"]);
fwrite($archivo, "\n");
fwrite($archivo, "USUARIO: " . $_POST["user"]);
fwrite($archivo, "\n");
fclose($archivo);
echo '<script language="javascript">alert("se guardaron los datos");</script></br>';

?>