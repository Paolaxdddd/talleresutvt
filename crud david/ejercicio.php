<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="salud";
 $enlace= mysqli_connect($servidor,$usuario,$clave,$basedeDatos);
 if(!$enlace){
    echo"error al conectar el servidor";
 } else {
    echo"se coneto con exito";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
          <div class="section-conte">
          <header>Conoce tu IMC</header>
          <form action="" class="form" name="formulario" method="POST">
            <div class="input-box">
              <label>Nombre completo</label>
              <input type="text" name="nombre" placeholder="Ingresa tu nombre" required />
            </div>

            <div class="input-box">
              <label>Edad</label>
              <input type="text" name="edad" placeholder="Ingresa tu edad" required />
            </div>

              <div class="input-box">
                <label>Peso</label>
                <input type="text" name="peso" placeholder="ingresa tu peso" required />
              </div>

              <div class="input-box">
                <label>Estatura</label>
                <input type="text" name="estatura" placeholder="Ingresa tu estatura" required />
                <div class="select-box">
                <input type="hidden" name="Alta" value="1">
              </div>
            <button name="registro">Enviar</button>
            </div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            }


?>
            
   
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
if (isset($_POST['Alta'])) {
  if(isset($_POST['registro'])){

    $id = null;
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    $imc = 0;
    $estatus = "";

    $imc= $peso / ($estatura * $estatura);

    if($imc < 20.9){
        $estatus="Tienes bajo peso";
    } elseif($imc >= 21&& $imc < 24.9){
        $estatus="tienes peso normal";

    } elseif($imc > 30){
        $estatus="tienes sobrepeso";
    }

    echo "<p> su IMC es: " . number_format($imc, 2) . "</p>";
    echo" <p> Esta es tu Status: " . $estatus . "</p>";
   
    $insertarDatos = "INSERT INTO registro VALUES('$id','$nombre', '$edad','$peso','$estatura','$imc','$estatus')";
   
    $ejecutar = mysqli_query($enlace, $insertarDatos);
   
    if(!$ejecutar){
       echo"error en la linea";
    } else {
   
    } 
   
    }

 
}
}
?>
