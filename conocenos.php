<?php 
session_start();
header("Content-Type: text/html;charset=utf-8");
?>
<?php include("include/inc_1_head_inicio.php") ?>


<title>Conócenos | Webstudy.com</title>

<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS --> 	
<link rel="stylesheet" href="css/conocenos.css">
<script>
   // $(document).ready(function () {
    //    $('.menuLogin').click(function (e) {
    //        $(".header").find('.dropdown-menu').slideToggle("fast").end();
     //   });
   // });
</script>


<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?>

<li class="item-2 activo">
    <a title="Ir a Conócenos" href="conocenos.php">Conócenos</a>
</li>
<li class="item-3" >
    <a title="Ir a Nuestros cursos" href="nuestrosCursos.php">Nuestros cursos</a>				
</li>
<li class="item-4">
    <a title="Ir a Asesoramiento" href="asesoramiento.php"> Asesoramiento </a>
</li>
<li class="item-5">
    <a title="Ir a Soporte - Faq´s" href="soporteFaqs.php"> Soporte/Faq´s </a>
</li>
<li class="item-6">
    <a title="Ir a Contáctanos" href="contacto.php"> Contáctanos </a>
</li>

<?php
if (!isset($_SESSION['logged'])) {
    ?>
    <li class="menuLogin">
        <a title="Ir a la página de acceso" href="accederLogin.php"> Acceder / Registro </a>
    </li>

    <?php
} else {
    ?>
    <li class="menuLogin">
        <a title="Ir a mi perfil" href="#"> Bienvenido <?php echo $_SESSION['nombre']; ?></a>
        <div class="header">
            <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="areaprivada/perfilUsuario.php">
                            Ir a mi perfil
                        </a>
                    </li>
                    <li>
                        <a href="areaprivada/logout.php">
                            Cerrar sesión
                        </a>
                    </li>
                </ul>
        </div>
    </li>

    <?php
}
?>

<?php include("include/inc_5_nav_final.php") ?>
<?php include("include/inc_opcional_breadcrumb_Inicio.php") ?>

<li>
    <a title="Conócenos" href="nuestrosCursos.php">Conócenos</a>
</li>
</ul>   
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Conócenos</h2>
       
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>

    <?php include("include/inc_opcional_slider_Inicio.php") ?>

    <img alt="" src="img/imgSlider/conocenos_1.jpg">

    <?php include("include/inc_opcional_slider_Final.php") ?>

    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->
    <div class="contenedor top-block"> 
        <div class="info-box">
            <div id="colIzq">
                <div class="contenedorFila row">
                    <div class="circulo">
                        <div>
                            <img src="img/iconos/conocenos/icono_conocenos1_78x78.png" alt="Qué hacemos"/>
                        </div>
                        <h3>qué hacemos</h3>
                    </div>
                    <div class="contenidoTexto">
                        <p>WebStudy es tu sitio web de confianza especializado en<strong> formación online y presencial </strong> al mejor precio. Ofrecemos cursos y seminarios, de todas las temáticas y niveles. Busca el que necesitas y si no lo encuentras, no te preocupes, ponte en contacto y lo buscaremos por ti.</p>
                        <p> Para ello te insertamos en un entorno de trabajo especializado que te preparará para desarrollar proyectos avanzados y enfrentarte a situaciones reales.</p>
                        <p>Nuestra máxima es y seguirá siendo que el alumno, cuando acabe el periodo lectivo, maneje a la perfección las técnicas impartidas en el curso, la inmensa mayoría ya se han incorporado al mercado de trabajo o han mejorado sus condiciones laborales o conocimientos.</p>
                    </div>
                </div>
                <div class="contenedorFila row margenTop">
                    <div class="circulo">
                        <div>
                            <img src="img/iconos/conocenos/icono_conocenos3_78x78.png" alt=""/>
                        </div>
                        <h3 class="textoIcono">Comó trabajamos</h3>
                    </div>
                    <div class="contenidoTexto">
                        <p>Hablando claro y con resultados.  Nuestro servicios son tremendamente competitivos tanto en precio como en servicio y se basan en la calidad de nuestros resultados.</p>
                        <p>Conozca todas las soluciones que podemos ofertar a su negocio o para ayudarle  a poner en marcha esa idea que tiene. </p>
                        <p>En webStudy encontrará soluciones para autonomos, pymes, emprendedores,tiendas virtuales, peñas deportivas, asociaciones, peluquerias, medicina, sistemas de reserva, equipos comerciales... Presupuesto Gratis y sin compromiso </p>
                        <ul class="listaFlechas">
                            <li><strong>Hemos creado un entorno de trabajo altamente especializado</strong></li>
                            <li><strong>Nuestra oferta formativa, siempre a la vanguardia de la industria.</strong></li>
                            <li><strong>Formación práctica ante todo</strong></li>
                            <li><strong>Nuestros profesores, los mejores profesionales</strong></li>
                            <li><strong>Flexibilidad de horarios</strong></li>
                        </ul>
                    </div>
                </div>	
            </div>
            <div id="colDcha">
                <div class="contenedorFila row">
                    <div class="circulo">
                        <div>
                            <img src="img/iconos/conocenos/icono_conocenos2_78x78.png" alt=""/>
                        </div>
                        <h3>A quién se dirige</h3>
                    </div>
                    <div class="contenidoTexto">
                        <p>Estamos especializados en programacion, sobretodo, en la web. Si necesitas aprender por razones laborales, nosotros somos lo que buscas. Si necesitas reciclarte, o estás empezando en este mundillo, pregúntanos!!! </p>
                    </div>
                </div>
                <div class="contenedorFila row">
                    <div class="bloqSuperior">
                        <h4>Nuestras oficinas</h4>
                        <p><strong>Dirección</strong>: C/ Luna 9ºA, Bajo, 28001 Madrid</p>
                        <p><strong>Teléfono</strong>: 
                            <a href="tel:91564654"> 91 564 654</a>
                        </p>	
                    </div>
                    <div class="bloqInferior">
                        <h4>Horario de atención al público</h4>
                        <p><strong>Mañanas</strong>: 9:00 - 13:30 </p>
                        <p><strong>Tardes</strong>: 16:00 - 19:00 </p>
                    </div>
                </div>
                <div class="contenedorFila row mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.3931756351612!2d-3.705982600000001!3d40.422292000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287cc4d44f9d%3A0x6f6538cc7cb400b1!2sCalle+de+la+Luna%2C+Madrid!5e0!3m2!1ses!2ses!4v1430229013698" width="390" height="200" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="main inner-block">
        <div class="container_destacados">
            <h2>Te puede interesar</h2>
            <div class="caja_destacados">
                <ul>
                    <li class="destacado noleft">
                        <a href="cursosPersonalizados.php" title="Cursos Personalizados">
                            <img alt="Cursos personalizados" src="./img/conocenos/interesar1_298x162.jpg">
                        </a>
                        <p>Cursos Personalizados</p>
                    </li>
                    <li class="destacado">
                        <a href="asesoramiento.php" title="Asesoramiento">
                            <img alt="Cursos personalizados" src="./img/conocenos/interesar2_298x162.jpg">
                        </a>
                        <p>Asesoramiento web</p>
                    </li>
                    <li class="destacado">
                        <a href="cursosSeminarios.php" title="seminarios gratuitos">
                            <img alt="Cursos personalizados" src="./img/conocenos/interesar3.jpg">
                        </a>
                        <p>seminarios Gratuitos</p>
                    </li>
                    <li class="destacado">
                        <a href="asesoramiento.php" title="Soluciones para tu web">
                            <img alt="Cursos personalizados" src="./img/conocenos/interesa4.jpg">
                        </a>
                        <p>Soluciones para tu web</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>
