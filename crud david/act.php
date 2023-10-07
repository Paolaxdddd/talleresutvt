<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="salud";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basedeDatos);

if(!$enlace){
    echo"Error en la conexion al servidor";
}




if(isset($_POST['actualizar'])){
$id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    
    
   
   
    $actualizar = "UPDATE registro SET  nombre = '$nombre', edad = '$edad', peso = '$peso', estatura = '$estatura' WHERE id = '$id'";
    $ejecutar = mysqli_query($enlace, $actualizar);
    header("location:xd.php");
    if(!$ejecutar){
       echo"<script>alert('Se actualizaron los datos');";
    } else {
   
    }
   
}
?>