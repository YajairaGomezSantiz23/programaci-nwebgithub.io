<?php
require("CONFIG.php");
echo "<h1> Practica: conexion a mi servidor de datos MYSQL </h1><br>";
if ($conexion=mysqli_connect($servidor, $usuario, $password, $bd))
{
    echo "Tu conexion ha sido exitosa";
}
else
{
    echo "Error conectando con MYSQL <br> ". mysqli_connect_error();
}
echo "<br><br>";
mysqli_close($conexion);
?>