<?php include("include/inc_1_head_inicio.php") ?>
<?php session_start() ?>

<title>Cursos Online | Nuestros cursos | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->

<link href="css/cursosCatalogo.css" rel="stylesheet">
<script>
   
</script>


<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?> 

<li class="item-2">
    <a title="Ir a conócenos" href="conocenos.php">Conócenos</a>
</li>
<li class="item-3 activo" >
    <a title="Ir a nuestros cursos" href="nuestrosCursos.php">Nuestros cursos</a>
</li>
<li class="item-4">
    <a title="Ir a asesoramiento" href="asesoramiento.php"> Asesoramiento </a>
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
    <a title="Nuestros cursos" href="nuestrosCursos.php">Nuestros cursos</a>
</li>
<li>
    <a title="Cursos online" href="cursosOnline.php">Cursos Online</a>
</li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Cursos Online</h2>
    
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>
    <!-- Estructura del Menu secundario. -->

    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul>
                <li class="">
                    <a title="Cursos personalizados" href="cursosPersonalizados.php">Cursos <br />personalizados</a>
                </li>
                <li class="">
                    <a title="Cursos presenciales" href="cursosPresenciales.php">Cursos <br />presenciales</a>
                </li>
                <li class="activa cursos_online">
                    <a title="Cursos online" href="cursosOnline.php">Cursos  online</a>
                </li>
                <li class="">
                    <a title="Seminarios gratuitos" href="cursosSeminarios.php">Seminarios <br />  gratuitos</a>
                </li>
            </ul>
        </div>
    </div>

    <?php include("include/inc_opcional_slider_Inicio.php") ?>

    <img alt="" src="img/imgSlider/catalogoCursos_online.jpg">

    <?php include("include/inc_opcional_slider_Final.php") ?>
    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR -->
    <div class="contenedor top-block"> 
        <div class="info-box">
            <div class="introCursos row">
                <p> <strong>WebStudy.com</strong> le ofrece los mejores cursos, elaborados por nuestros profesores. Cursos paso a paso seleccionados y revisados.</p>
                <p>Aprende de forma sencilla y entretenida.</p>
            </div>
        </div>
    </div>	
    <div class="main inner-block">

        <div class="cursos_catalogo">
            <a title="Html y css desde cero" href="cursosOnline/cursoHtmlBasico.php">
                <div class="caja_texto verde">
                    <h3>Html y css desde cero</h3>
                    <p>Aprenda a crear sitios web con Html y css.</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Octubre 2015</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Prestashop" src="img/cursosCatalogo/html_css_360x215.jpg"/>
                </div>
            </a>
        </div>
         <div class="cursos_catalogo">
            <a title="Javascript desde cero" href="cursosOnline/cursoJavascript.php">
                <div class="caja_texto verde">
                    <h3>Javascript desde cero</h3>
                    <p>Javascript para dar dinamismo, rapidez y agilidad a la web</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Junio 2015</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Javascript desde cero" src="img/cursosCatalogo/cursoJavascript360x215.jpg">
                </div>
            </a>
        </div>
         <div class="cursos_catalogo">
            <a title="Css3" href="cursosOnline/cursoCss.php">
                <div class="caja_texto verde">
                    <h3>Css desde cero</h3>
                    <p> El objetivo es poder aprender CSS de forma sencilla</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Mayo 2015</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Css3" src="img/cursosCatalogo/css3_360x215.jpg"/>
                </div>
            </a>
        </div>

        

        <div class="cursos_catalogo">
            <a title="La Redacción con los Blogs" href="cursosOnline/cursoBlogs.php">
                <div class="caja_texto verde">
                    <h3>La creacion de Blogs</h3>
                    <p> Los blogs es el “internet sin esfuerzo”.</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Agosto 2015</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="La Redacción con los Blogs" src="img/cursosCatalogo/blog-360x215.jpg"/>
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Seguridad en Internet" href="cursosOnline/cursoSeguridad.php">
                <div class="caja_texto verde">
                    <h3>Seguridad en Internet</h3>
                    <p>Programas maliciosos son creados a diario ...</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Agosto 2015</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Seguridad en Internet" src="img/cursosCatalogo/seguridad360x215.jpg">
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Linkedin" href="cursosOnline/cursoLinkedin.php">
                <div class="caja_texto amarillo">
                    <h3>Programacion web</h3>
                    <p>Curso profesional de javascript y php</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Próximo</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Mayo 2015</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Linkedin" src="img/cursosCatalogo/php_360x215.jpg"/>
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Plataforma Moodle" href="cursosOnline/cursoMoodle.php">
                <div class="caja_texto verde">
                    <h3>Plataforma Moodle</h3>
                    <p>Creación de cursos virtuales basados en Internet</p>
                    <div class="columna_up">
                        <p>
                            <strong class="Matrícula">Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Septiembre 2015</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Plataforma Moodle" src="img/cursosCatalogo/Moodle360x215.jpg">
                </div>
            </a>
        </div>
    </div>

    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>