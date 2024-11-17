<?php
require ("CONFIG.php");
echo "<h1>Practica: creación de una base de atos </h1><br>";
$conexion=mysqli_connect($servidor, $usuario, $password, $bd);
$basededatos="Programacion";
$consulta="create database $basededatos";
if ($resultado=mysqli_query($conexion, $consulta))
{
    echo "La base de datos $basededatos, se creo con exito <br>";
    echo "El script utilizado fue: $consulta <br>";
}
else
{
    echo "La base de datos $basededatos no se ha podido crear <br>".mysqli_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion);
?>


