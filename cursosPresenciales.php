<?php include("include/inc_1_head_inicio.php") ?>
<?php session_start() ?>
<title>Cursos Presenciales | Nuestros cursos | Webstudy.com</title>


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
                        <a href="../areaprivada/perfilAlumno.php">
                            Ir a mi perfil
                        </a>
                    </li>
                    <li>
                        <a href="../areaprivada/logout.php">
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
    <a title="Cursos presenciales" href="cursosPresenciales.php">Cursos presenciales</a>
</li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Cursos presenciales</h2>
    
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>

    <!-- Estructura del Menu secundario. -->

    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul>
                <li class="">
                    <a title="Cursos personalizados" href="cursosPersonalizados.php">Cursos <br />personalizados</a>
                </li>
                <li class="activa presenciales">
                    <a title="Cursos presenciales" href="cursosPresenciales.php">Cursos <br />presenciales</a>
                </li>
                <li class="">
                    <a title="Cursos online" href="cursosOnline.php">Cursos online</a>
                </li>
                <li class="">
                    <a title="Seminarios gratuitos" href="cursosSeminarios.php">Seminarios <br />  gratuitos</a>
                </li>
            </ul>
        </div>
    </div>

    <?php include("include/inc_opcional_slider_Inicio.php") ?>

    <img alt="" src="img/imgSlider/catalogoCursos_persenciales.jpg">

    <?php include("include/inc_opcional_slider_Final.php") ?>
    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR -->

    <div class="contenedor top-block"> 
        <div class="info-box">
            <div class="introCursos row">
                <p>Los cursos se realizan con el metodo tradicional con Profesor.</p>
                <p>Nuestros cursos se caracterizan por clases 100% presenciales, clases con profesor, grupos muy reducidos, recuperación clases perdidas y además clases prácticas y dinámicas</p>
            </div>
        </div>
    </div>	
    <div class="main inner-block">
        <div class="cursos_catalogo">
            <a title="Html5" href="cursosPresenciales/cursoHtml5.php">
                <div class="caja_texto rojo">
                    <h3>HTML5</h3>
                    <p>Lenguaje y técnica fundamental para desarrollar sitios web</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Cerrada</span>
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
                    <img alt="HTML5" src="img/cursosCatalogo/cursoHtml360x215.jpg"/>
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Javascript desde cero" href="cursosPresenciales/cursoJavascript.php">
                <div class="caja_texto amarillo">
                    <h3>Javascript desde cero</h3>
                    <p>Javascript para dar dinamismo, rapidez y agilidad a la web</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Próximo</span>
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
            <a title="Css3" href="cursosPresenciales/cursoCss3.php">
                <div class="caja_texto rojo">
                    <h3>Css3</h3>
                    <p>Aprende las nuevas reglas para tu web</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Cerrada</span>
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
            <a title="POO" href="cursosPresenciales/cursoPOO.php">
                <div class="caja_texto verde">
                    <h3>POO</h3>
                    <p>Hay que aprender a "pensar en objetos".</p>
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
                    <img alt="POO" src="img/cursosCatalogo/cursoProgramar_360x215.jpg">
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="AngularJS" href="cursosPresenciales/cursoAngularJS.php">
                <div class="caja_texto rojo">
                    <h3>AngularJS</h3>
                    <p>Pensado para profesionales de Internet </p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Cerrada</span>
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
                    <img alt="AngularJS" src="img/cursosCatalogo/angularJs_360x215.jpg"/>
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="NodeJS" href="cursosPresenciales/cursoNodeJS.php">
                <div class="caja_texto verde">
                    <h3>NodeJS</h3>
                    <p>La tecnología que hace posible la nueva web en tiempo real</p>
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
                    <img alt="NodeJS" src="img/cursosCatalogo/nodejs-dark360x215.jpg">
                </div>
            </a>
        </div>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>