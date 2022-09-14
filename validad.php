<?php
echo 'pepe';
var_dump($_REQUEST);
$conexion=mysqli_connect("localhost","empresa","1234","empresaservicios")
or die("problemas de conexion");
if($conexion==null)
{
    echo("No se pudo");
}
else
{
    echo("Si se pudo");
}
?>