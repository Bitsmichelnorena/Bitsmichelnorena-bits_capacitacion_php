<?php
//cerrar sesion
session_start();
session_destroy();

header('Location:6_8a-login.php');
