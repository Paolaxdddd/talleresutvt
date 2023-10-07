<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="salud";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basedeDatos);

if(!$enlace){
    echo"Error en la conexion al servidor";
}

if(isset($_POST['elimina'])){
    $id = $_POST['id'];
       
        $eliminar = "DELETE FROM registro WHERE id = '$id'";
        $ejecutar = mysqli_query($enlace, $eliminar);
        header("location:xd.php");
       
       
    }
?>