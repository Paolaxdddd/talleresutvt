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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="act.css">
</head>
<body>

<h1>
              Estas seguro de que quieres Editar a este usuario?
              <br>Si es asi presiona el boton actualizar, si no vuelve a la pagina principal<br>
            </h1>
       
        <style>
          .tabla {
            left: 50%;
            margin-top: 100px;
            transform: translate(-50%, -50%);
            position: absolute;
            box-sizing: border-box;

            background-color: white;
          }
          .divt {
            width: 100%;
            margin: 0 auto;
          }
        </style> 
          <div class="divt">
            <table class="tabla" border="1">

                <tr>
                    <th>Nombre </th>
                    <th>edad</th>
                    <th>peso</th>
                    <th>estatura</th>
                    <th>imc</th>
                    <th>estatus</th>
</tr>



<form name="Update" action="act.php" method="POST">

<?php 
$id = $_GET["id"];
  $query = "SELECT * FROM registro WHERE id = '$id'";
  $us = mysqli_query($enlace, $query);
  $i = 1;
  while ($row = mysqli_fetch_array($us)) {
  
    echo "<form name='Update' method='POST'>";
    ?>
  <tr>
    <td>
    <input type="hidden" value="<?php echo $row["id"];?>" name="id">
    <input type="text" value="<?php echo $row["nombre"];?>" name="nombre">
    </td>
    <td>
    <input type="text" value="<?php echo $row["edad"];?>" name="edad">  
    </td>
    <td>
    <input type="text" value="<?php echo $row["peso"];?>" name="peso">  
    </td>
    <td>
    <input type="text" value="<?php echo $row["estatura"];?>" name="estatura">  
    </td>
    <td>
    <input type="text" value="<?php echo $row["imc"];?>" name="imc">  
    </td>
    <td>
    <input type="text" value="<?php echo $row["estatus"];?>" name="estatus">  
    </td>
    
    <td>
    <button name="actualizar">Actualizar</button>
      <input type="hidden" value="1" name="Actualizar">
        </td>
  <td>
      
    </td>
  </tr>
  <?php
  $i++;
    echo "</form>";
  }
?>

</table>
</div>

        </section>
      </div>
      </div>
  </section>
  <nav class="nav-1">
                    <a href="xd.php">Pgina principal</a>
            </nav>
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
   
    
   
    }

    

 
}
}

?>
