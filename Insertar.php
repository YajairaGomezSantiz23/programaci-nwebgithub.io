<?php
require("CONFIG.php");
$conexion=mysqli_connect($servidor, $usuario, $password, $bd);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];

$consulta="INSERT INTO Usuarios (nombre, email, edad) VALUES ('$nombre', '$email', '$edad');";
if ($resultado=mysqli_query($conexion, $consulta)) 
{
    echo "Registro guardado con exito.";  
}
else 
{
    echo "Error al guardar el registro" .mysqli_connect_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion); //Cerrar el servidor

