<?php include("include/inc_1_head_inicio.php") ?>
<?php session_start() ?>
<title>Seminarios gratuitos | Nuestros cursos | Webstudy.com</title>

<!-- METAS de la pagina -->


<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="css/cursosCatalogo.css" rel="stylesheet">
<!-- JAVASCRIPT -->
<script>
   
</script>

<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?> 

<li class="item-2">
    <a title="Ir a Conócenos" href="conocenos.php">Conócenos</a>
</li>
<li class="item-3 activo" >
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
    <a title="Seminarios gratuitos" href="cursosSeminarios.php">Seminarios gratuitos</a>
</li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Seminarios gratuitos</h2>
   
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
                <li class="">
                    <a title="Cursos online" href="cursosOnline.php">Cursos online</a>
                </li>
                <li class="activa seminarios">
                    <a title="Seminarios gratuitos" href="cursosSeminarios.php">Seminarios <br />  gratuitos</a>
                </li>
            </ul>
        </div>
    </div>

    <?php include("include/inc_opcional_slider_Inicio.php") ?>

    <img alt="" src="img/imgSlider/catalogoCursos_seminarios.jpg">

    <?php include("include/inc_opcional_slider_Final.php") ?>

    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->
    <div class="contenedor top-block"> 
        <div class="info-box">
            <div class="introCursos row">
                <p>Aunque realmente la informática es una disciplina en la que debemos reciclarnos continuamente y en la que nunca podemos dejar de aprender, al menos si queremos ser buenos profesionales del ramo.  </p>
                <p>Descargaté nuestros seminarios en pdf, y aprende sobre nuevas tecnológias o reclicaté. Nuestros pdf han sido creados por profesionales.  </p>

            </div>
        </div> 
    </div>	
    <div class="main inner-block">
        <div class="cursos_catalogo">
            <a title="Java" href="pdfSeminarios/java.pdf" target="_blank">
                <div class="caja_texto verde">
                    <h3>Java</h3>
                    <p>Aprender a programar utilizando Java</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Todo el año</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Java" src="img/cursosCatalogo/java360x215.jpg"/>
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Android" href="pdfSeminarios/android.pdf" target="_blank">
                <div class="caja_texto verde">
                    <h3>Android</h3>
                    <p>Aprendizaje básico a desarrollar apps para Android</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Todo el año</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Android" src="img/cursosCatalogo/android_360x2151.jpg">
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Css3" href="pdfSeminarios/CursoCSS3.pdf" target="_blank">
                <div class="caja_texto verde">
                    <h3>Css3 </h3><em>¡NEW!</em>
                    <p>Breve guia en las nuevas reglas de Css3</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Todo el año</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Css3" src="img/cursosCatalogo/css3_360x215.jpg"/>
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Web Design" href="pdfSeminarios/creacionWeb.pdf" target="_blank">
                <div class="caja_texto verde">
                    <h3>Web Design </h3>
                    <p>Hay que aprender a diseñar.</p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Todo el año</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Web Design" src="img/cursosCatalogo/webdesign_360x215.jpg">
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Responsive Design" href="pdfSeminarios/responsiveDesign.pdf" target="_blank">
                <div class="caja_texto verde">
                    <h3>Responsive Design </h3>
                    <p>Adapta tu web a la pantalla del usuario... </p>
                    <div class="columna_up">
                        <p>
                            <strong>Matrícula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Todo el año</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Cloud Computing" src="img/cursosCatalogo/cloud-computing360x215.jpg"/>
                </div>
            </a>
        </div>

        <div class="cursos_catalogo">
            <a title="Comercio Electrónico" href="pdfSeminarios/comercioElectronico.pdf" target="_blank">
                <div class="caja_texto verde">
                    <h3>Comercio Electrónico</h3>
                    <p>Lanza al mundo de Internet tu propia idea en tu propio site.</p>
                    <div class="columna_up">
                        <p>
                            <strong class="Matrícula">Matricula</strong>
                            <span class="cuadrado_blanco">Abierta</span>
                        </p>
                    </div>
                    <div class="columna_down">
                        <p>
                            <img alt="Calendario" src="img/iconos/cursosCatalogo/icono_calendario.png"/>
                            <span class="texto_mid">Todo el año</span>
                        </p>
                    </div>
                </div>

                <div class="caja_imagen">
                    <img alt="Comercio Electrónico" src="img/cursosCatalogo/Ecommerce360x215.jpg">
                </div>
            </a>
        </div>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->

    <?php include("include/inc_6_footer_template.php") ?>