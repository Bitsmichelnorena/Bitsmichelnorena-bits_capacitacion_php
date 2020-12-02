<?php
#crear archivos
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$conexion = mysqli_connect("localhost", "root", "", "prueba");
$consulta = "select * from usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    echo "BIENVENIDO </br>  " . $usuario;
    echo "</br>";
    echo '<a href=cerrar_sesion.php>Cerrar Sesion </a>';
} else {

    echo "<script>alert('Usuario o contraseña incorrecta');
    window.location.href='6_8a-login.php';</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>
