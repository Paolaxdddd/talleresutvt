<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="salud";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basedeDatos);

if(!$enlace){
    echo"Error en la conexion al servidor";
}
?>