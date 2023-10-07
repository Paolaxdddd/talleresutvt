<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">UTVT</a>


            <nav class="navbar">
                <ul>
                    <li><a href="inicio.html">INICIO</a></li>
                    <li><a href="nosotros.html">NOSOTROS</a></li>
                    <li><a href="contactanos.html">CONTACTANOS</a></li>
                    <li><a href="editar.php">REGISTRATE</a></li>
                    <li><a href="formulario.html">MI CUENTA</a></li>
                </ul>

            </nav>
        </div>
        @yield('content')
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="{{asset('uni.png')}}" alt="logo">
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
                    <a href="#"><img src="{{asset('what.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('face.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('twee.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('insta.png')}}" alt="" ></a>
                </div>
            </div>
        </div>

        <div class="grupo-2">
            <small> &copy;2023 <b>UTVT</b> - Todos los derechos reservados.<b>#Vuela Alto, Vuela Lejos ¡Siempre Cuervos!</b></small>
        </div>


    </footer>
</body>
</html>
