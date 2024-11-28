<!DOCTYPE html>
<html lang="es">
<head>
    <title>Práctica #11 - Creacíon de una tabla en una BD existente</title>
</head>
<body>

<?php
require("CONFIG.php");
echo "<h1>Crear una tabla en una BD existente</h1>";
$conexion=mysqli_connect($servidor, $usuario, $password, $bd);
$Usuarios="Usuarios";
$consulta="create table $Usuarios (id int primary key auto_increment, nombre varchar(50),email varchar(50), edad int(10));";
if ($resultado=mysqli_query($conexion, $consulta)) //Comprobación de que se ha creado la tabla correctamente o te diga el error
{
    echo "La tabla $Usuarios, se creó correctamente en $bd <br>";
    echo "El Script utilizado fue: $consulta <br><br>";  
}
else 
{
    echo "La tabla $Usuarios no se pudó crear correctamente <br>" .mysqli_connect_error($conexion);
}
echo "<br><br>";
mysqli_close($conexion); //Cerrar el servidor
?>
</body>
</html>



?>
</body>
</html>