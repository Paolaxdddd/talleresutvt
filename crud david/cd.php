<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedeDatos="formulario";

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
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <header class="header-1">
        <div class="container-1">
            <div class="logo-1">
                <h1>UTVT</h1>
            </div>
            <nav class="nav-1">
                    <a href="inicio.html">INICIO</a>
                    <a href="nosotros.html">NOSOTROS</a>
                    <a href="contactanos.html">CONTACTANOS</a>
                    <a href="editar.php">REGISTRATE</a>
                    <a href="login.php">MI CUENTA</a>
            </nav>
        </div>
    </header>
  
   
         
    <section class="container">
          <div class="section-conte">
          <header>Registrate a tu taller</header>
          <form action="" class="form" name="formulario" method="POST">
            <div class="input-box">
              <label>Nombre completo</label>
              <input type="text" name="nombre" placeholder="Ingresa tu nombre" required />
            </div>
            <div class="input-box">
              <label>Correo Electronico</label>
              <input type="text" name="correo" placeholder=" correo institucional" required />
            </div>
            <div class="column">
              <div class="input-box">
                <label>Numero de telefono</label>
                <input type="number" name="numero" placeholder="ingresa tu numero de telefono" required />
              </div>
              <div class="input-box">
                <label>Fecha de nacimiento</label>
                <input type="date" name="nacimiento" placeholder="Ingresa tu fecha de nacimiento" required />
              </div>
            </div>
            <div class="input-box address">
              <label>Escolaridad</label>
              <div class="input-box address">
        <div class="select-box">
          <select name="carrera">
            <option hidden>Carrera</option>
            <option value="1">T.S.U. en Mantenimiento, Area Industrial</option>
            <option value="2">T.S.U. en Mecatronica, Area Sistemas de Manufactura Flexible</option>
            <option value="3">T.S.U. en Desarrollo de Negocios, Area Mercadotecnia</option>
            <option value="4">T.S.U. en Desarrollo de Negocios, Area Ventas</option>
            <option value="5">T.S.U. en Tecnologias de la Infosmacion, Area Infraestructura de Redes Digitales</option>
            <option value="6">T.S.U. en Tecnologias de la Infosmacion, Area Desarrollo de Software Multiplataforma</option>
            <option value="7">T.S.U. en Procesos Industriales, Area Manufactura</option>
            <option value="8">T.S.U. en Paramedico</option>
            <option value="9">T.S.U. en Quimica, Area Tecnologica Ambiental</option>
            <option value="10">T.S.U. en Procesos Alimenticios</option>
            <option value="11">T.S.U. en Quimica, Area Biotecnologica</option>
            <option value="12">Ing. en Mantenimiento Industrial</option>
            <option value="13">Ing. en Mecatronica</option>
            <option value="14">Ing. en Redes Inteligentes y ciberceguridad</option>
            <option value="15">Ing. en Desarrollo y Gestio de Software</option>
            <option value="16">Ing. en Sistemas Productivos</option>
            <option value="17">Ing. en Tecnologia Ambientalal</option>
            <option value="18">Ing. en Procesos Bioalmentarios</option>
            <option value="19">Ing. en Biotecnologica</option>
            <option value="20">Lic. en  Innovacion de Negocios y Mercadotecnia</option>
            <option value="21">Lic. en Proteccion Civil y Emergencias</option>
            <option value="22">Lic. en Enfermeria</option>
          </select>
        </div>
        <div class="select-box">
          <select name="taller">
            <option disabled selected value="">Selecciona tu taller</option>
            <option value="Activacion">Activacion Fisica</option>
            <option value="Basquet">Basquetball</option>
            <option value="Danza">Danza</option>
            <option value="Futbol">Futball</option>
            <option value="Ortgrafia">Ortografia</option>
            <option value="Rondalla">Rondalla</option>
            <option value="Teatro">Teatro</option>
          </select>
        </div>
              <div class="column">
                <div class="select-box">
                  <select name="cuatrimestre">
                    <option selected disabled >Cuatrimestre</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                  </select>
                </div>
                <div class="select-box">
                <input type="hidden" name="Alta" value="1">
                <input type="hidden" name="id" value="">
                  <input type="hidden" name="univ" value="">
          <select name="univ" id="uni" onchange="universidad()">
            <option value="1">Atarasquillo</option>
            <option value="2">Capulhuac</option>
          </select>
          <script>
                    function universidad() {
                      document.getElementsByName('univ')[0].value = document.getElementById('uni').value;
                    }
                  </script>
          </div>
        </div>
              </div>
              
            </div>
            <button name="registro">Submit</button>
          </form>
        <style>
          .tabla {
            left: 50%;
            margin-top: 250px;
            transform: translate(-50%, -50%);
            position: absolute;
            box-sizing: border-box;

            background-color: white;
          }
          .divt {
            width: 100%;
            margin: 0 auto;
          }
    

       
        <style>
          .tabla {
            left: 50%;
            margin-top: 250px;
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
                <p>


                .
</p>
                <tr>
                    <th>Nombre </th>
                    <th>Correo</th>
                    <th>Numero</th>
                    <th>Fecha de nacimiento</th>
                    <th>Carrera</th>
                    <th>Taller</th>
                    <th>Cuatrimestre</th>
                    <th>Unidad academica</th>
                    <th>Acciones</th>
                   
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
  <?php echo "<input value='".$row['correo']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['numero']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['fechanac']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['carrera']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['taller']."' name='datos[]' >"; ?>  
    </td>
    <td>
  <?php echo "<input value='".$row['cuatrimestre']."' name='datos[]' >"; ?>  
    </td>
    <td>
      <input type="hidden" value="1" name="Actualizar">
<?php echo "<input value='".$row['unidadacademica']."' name='datos[]' >"; ?>
      <input name="correoC" type="hidden" id="CorreoActual" value="">
    </td>
  <td>
  <button name="delete"><a href="elim.php?id=<?php echo $row["id_usuario"];?>">Eliminar</a></button>
      <button name="modificar"><a href="actualizar.php?id=<?php echo $row["id_usuario"];?>">Modificar</a></button>
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





 <footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="uni.png" alt="logo">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>UNIVERSIDAD UTVT</h2>
   
            <p>difusion@utvtol.edu.mx</p>
            <p>728 285 9552</p>
            <p>utvtol.edu.mx</p>
        </div>
        <div class="box">
            <h2>SIGUENOS EN NUESTRAS REDES SOCIALES</h2>
            <div class="red-social">
                <a href="#"><img src="what.png" alt=""></a>
                <a href="#"><img src="face.png" alt=""></a>
                <a href="#"><img src="twee.png" alt=""></a>
                <a href="#"><img src="insta.png" alt="" ></a>
            </div>
        </div>
     </div>
     <div class="grupo-2">
        <small> &copy;2023 <b>UTVT</b> - Todos los derechos reservados.<b>#Vuela Alto, Vuela Lejos ¡Siempre Cuervos!</b></small>
     </div>
  </footer>
   
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
if (isset($_POST['Alta'])) {
  if(isset($_POST['registro'])){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero = $_POST['numero'];
    $nacimiento = $_POST['nacimiento'];
    $carrera = $_POST['carrera'];
    $taller = $_POST['taller'];
    $cuatrimestre = $_POST['cuatrimestre'];
   $unidadacademica = $_POST['univ'];
   
   
    $insertarDatos = "INSERT INTO registro VALUES('$id','$nombre', '$correo','$numero','$nacimiento','$carrera','$taller','$cuatrimestre','$unidadacademica')";
   
    $ejecutar = mysqli_query($enlace, $insertarDatos);
   
    if(!$ejecutar){
       echo"error en la linea";
    } else {
   
    }
   
    }

 
}
}
?>