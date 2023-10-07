<?php

$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="salud";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basedeDatos);

if(!$enlace){
    echo"Error en la conexion al servidor";
}



// Obtiene el nombre ingresado por el usuario
$nombre = $_POST['nomb'];

// Consulta SQL para buscar el registro por nombre
$sql = "SELECT * FROM registro WHERE nombre = '$nombre'";
$result = $enlace->query($sql);

// Verifica si se encontraron resultados
if ($result->num_rows > 0) {
    // Muestra los resultados
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["nombre"] . "<br>";
        // Puedes mostrar otros campos aquí
    }
} else {
    echo "No se encontraron resultados para el nombre: " . $nombre;
}

// Cierra la conexión
$conn->close();
?>






