<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="edit.css">
    
<?php
include('database.php')
?> 
</head>
<body>

<!--- Formulario de Inserción de datos --->

<div class="section-conte">
          <header>Conoce tu IMC</header>
          <form action="" class="form" name="formulario" method="POST">
            <div class="input-box">
              <label>Nombre completo</label>
              <input type="text" name="nombre" placeholder="Ingresa tu nombre"  />
            </div>

            <div class="input-box">
              <label>Edad</label>
              <input type="text" name="edad" placeholder="Ingresa tu edad"  />
            </div>

              <div class="input-box">
                <label>Peso</label>
                <input type="text" name="peso" placeholder="ingresa tu peso"  />
              </div>

              <div class="input-box">
                <label>Estatura</label>
                <input type="text" name="estatura" placeholder="Ingresa tu estatura"  />
                <div class="select-box">
                <input type="hidden" name="Alta" value="1">
              </div>
            <button name="registro">Enviar</button>
            </div>
            
          
<br>

<!--- Formulario de Búsqueda --->

<div class="section-conte">
          <header>Buscar Paciente</header>
          <form action="xd.php" class="form" name="formulario" method="POST">

            <div class="input-box">
              <label>Nombre completo</label>
              <input type="hidden" name="consulta" value="1">
              <input type="text" name="nombre" placeholder="Ingresa tu nombre"  />
            </div>
            <button name="consultar">Consultar</button>
            </div>
          
    </form>


        <br>
        
        
        <?php 

//include ('../../database/connection.php');
        @$nombre = $_POST['nombre'];

switch ($nombre) {
  case NULL:
    echo  "<br>" ;
    echo  "<br>" ;
    echo "Ingresa un Nombre "; 
    break;
  

  default:
  
    if (isset($_POST['consultar']) && $_POST['consulta'] == 1 ) {
        include ('database.php');
        $nombre = $_POST['nombre'];
        $sql = "SELECT * FROM `registro` WHERE nombre LIKE '%$nombre%';";
        $query = mysqli_query($enlace,$sql);
        while ($row = mysqli_fetch_array($query))
{
          echo  "<br>" ;
          echo "Usuario(s)  :";
          echo  "<br>" ;
          echo
          "
          <table width=\"100%\" border=\"1\"> <tr>
          <td><b><center>id</center></b></td>
          <td><b><center>nombre</center></b></td>
          <td><b><center>edad</center></b></td>
          <td><b><center>peso</center></b></td>
          <td><b><center>estatura</center></b></td>
          <td><b><center>imc</center></b></td>
          <td><b><center>estatus</center></b></td>
          <td><b><center>acciones</center></b></td>
          </tr>
          <tr>
          <td>" .$row['id']."</td>
          <td>" .$row['nombre']."</td>
          <td>" .$row['edad']."</td>
          <td>" .$row['peso']."</td>
          <td>" .$row['estatura']."</td>
          <td>" .$row['imc']."</td>
          <td>" .$row['estatus']."</td>
          
          </tr>
          </table>";

  
         }

        }
     
    break;
    
  }
  
?>
        
        
        
        
        
        
        
        
        <br>
        <style>
          .tabla {
            left: 50%;
            margin-top: 400px;
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



<form name="Update" method="POST">
<?php 
  $query = "SELECT * FROM registro" ;
  $registro = mysqli_query($enlace, $query);
  $i = 1;
  while ($row = mysqli_fetch_array($registro)) {
  
    echo "<form name='Update' method='POST'>";
    ?>
  <tr>
 
    <td>
  <?php echo "<input value='".$row['nombre']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['edad']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['peso']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['estatura']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['imc']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['estatus']."' name='datos[]' >"; ?>  
    </td>
    <td>
      <input type="hidden" value="1" name="Actualizar">
    </td>
  <td>
  <button name="delete"><a href="elim.php?id=<?php echo $row["id"];?>">Eliminar</a></button>
  <button name="modificar"><a href="actualizar.php?id=<?php echo $row["id"];?>">Modificar</a></button>
  
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
    @$estatura = $_POST['estatura'];
    @$imc = 0;
   $estatus = "";

    @$imc= $peso / ($estatura * $estatura);

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
