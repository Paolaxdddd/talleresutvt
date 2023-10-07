@extends('/layouts/layout')
@section('content')
<div class="header-content container">
             <div class="header-txt">
                <h1>TALLERES UTVT</h1>
                <P>La Universidad Tecnológica del Valle de Toluca ofrece Talleres Deportivos y Culturales para la Comunidad Universitaria.</P>
               
             </div>
            </div>
    </header>

    <section class="bienvenidos">
        <div class="blog-content">
         <h2>BIENVENIDOS A NUESTROS TALLERES</h2>
         <p class="txt-p">La Universidad Tecnológica del Valle de Toluca ofrece Talleres Deportivos y Culturales para la Comunidad Universitaria.</p>

         <div class="blog">
             <div class="blog-1">
                 <img src="{{asset('depot1.png')}}" alt="">
                 <h3>TALLERES DEPORTIVOS</h3>
                 <p class="parrafo-des">El objetivo de los taller deportivo de la UTVT es promover la práctica del deporte, desarrollar habilidades, mejorar el bienestar físico y mental, fomentar el trabajo en equipo y brindar una experiencia de aprendizaje a los participantes. Cada taller puede tener objetivos específicos adicionales, dependiendo de su enfoque y propósito particular.</p>
                    <a href="talleresdeport.html" class="btn-2">DEPORTIVOS</a>
             </div>
             <div class="blog-1">
                 <img src="{{asset('cult1.png')}}" alt="">
                 <h3>TALLERES CULTURALES</h3>
                 <p class="parrafo-des">Los talleres culturales de la UTVT buscan enriquecer la experiencia cultural de los participantes, fomentar la creatividad, el aprendizaje y la apreciación de diversas formas de expresión artística y cultural. Estos talleres pueden ser una fuente de enriquecimiento personal y una forma de promover la diversidad y la inclusión en la comunidad.</p>
                    <a href="tallerescult.html" class="btn-3">CULTURALES</a>
             </div>
         </div>
        </div>
    </section>
@endsection