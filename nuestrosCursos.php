<?php session_start() ?>

<?php include("include/inc_1_head_inicio.php") ?>

<title>Nuestros cursos | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="css/cursosCatalogo.css" rel="stylesheet">
<!--<link href="css/nuestrosCursos.css" rel="stylesheet">-->
<!-- JAVASCRIPT -->
<script>
    
</script>



<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?> 

<li class="item-2">
    <a title="Ir a Conócenos" href="conocenos.php">Conócenos
    </a>
</li>
<li class="item-3 activo" >
    <a title="Ir a Nuestros cursos" href="nuestrosCursos.php">Nuestros cursos</a>		
</li>
<li class="item-4">
    <a title="Ir a Asesoramiento" href="asesoramiento.php"> Asesoramiento </a>
</li>
<li class="item-5">
    <a title="Ir a Soporte/Faq´s" href="soporteFaqs.php"> Soporte/Faq´s </a>
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

</ul>
<div class="header">
    <div class="image">
        <a href="index.php">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Nuestros cursos</h2>
   
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>

    <!-- Estructura del Menu secundario. -->

    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul>
                <li class="ladoc">
                                
                </li>
                <li class="personalizados">
                    <a title="Cursos Personalizados" href="cursosPersonalizados.php">Cursos <br />personalizados</a>
                </li>
                <li class="presenciales">
                    <a title="Cursos presenciales" href="cursosPresenciales.php">Cursos <br />presenciales</a>					
                </li>
                <li class="cursos_online">
                    <a title="Cursos online" href="cursosOnline.php">Cursos <br> online</a>
                </li>
                <li class="seminarios">
                    <a title="Seminarios gratuitos" href="cursosSeminarios.php">Seminarios <br />  gratuitos</a>
                </li>
                <li class="ladoc">
                                
                </li>
            </ul>
        </div>
    </div>

    <?php include("include/inc_opcional_slider_Inicio.php") ?>

    <img alt="" src="img/imgSlider/catalogoCursos.jpg">

    <?php include("include/inc_opcional_slider_Final.php") ?>
    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->
    <div class="contenedor top-block"> 
        <div class="info-box">
            <div class="introCursos row">
                <p><strong>¡Tu futuro empieza aquí! </strong>
                    Descubre el catálogo de estudios más avanzado del sector, elige la formación que más se adecúe a tus necesidades, escoge el curso en el que estés interesado y comienza a trabajar en la industria digital.
                    Aprende de los mejores profesionales en un entorno de trabajo único.</p>
            </div>
        </div>
    </div>	
    <div class="inner-block fondoBlanco">
        <div class="izquierda">
            <p class="experiencia">Experiencia</p>

            <p class="texto_izq">Un mundo de soluciones para empresas y autónomos.
                Si no encuentra lo que busca o quiere plantearnos otro proyecto 
                no dude en comunicarnoslo, encontraremos la mejor relación calidad 
                precio.</p>

            <p class="futuro">¿A qué esperas para mejorar tu futuro?</p>
        </div>

        <div class="derecha">
            <p class="experiencia">Tus objetivos:</p>
            <ul>
                <li> Formación + Tecnología = Éxito</li>
                <li> Poner en practica de forma satisfactoria todo lo enseñado en los distintos cursos.</li>
                <li> Obtener la destreza necesaria para relucir en su trabajo</li>
                <li> Las soluciones mas completas para tener tu negocio en internet</li>
            </ul>
        </div>
    </div>
    <!-- Iconos inferiores -->

    <div class="inner-block fondoBlanco">
        <div class="iconos_abajo">
            <div class="promovemos">
                <div class="imagen_iconos">
                    <img alt="flecha a la derecha" src="css/img/flechaDcha.png"/>
                </div>

                <div class="texto_iconos">
                    <p>Promovemos talento,
                        MEJORAMOS TU EMPLEABILIDAD</p>
                </div>
            </div>

            <div class="acreditacion">
                <div class="imagen_iconos">
                    <img alt="flecha a la derecha" src="css/img/flechaDcha.png"/>
                </div>

                <div class="texto_iconos">
                    <p>Obtén tu Acreditación Formativa de forma Fácil, Rápida y Flexible</p>
                </div>
            </div>

            <div class="formacion">
                <div class="imagen_iconos">
                    <img alt="flecha a la derecha" src="css/img/flechaDcha.png"/>
                </div>

                <div class="texto_iconos">
                    <p>Formación especializada con una metodología innovadora.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- fin de iconos inferiores -->
    <!-- Imagenes inferiores -->
    <div class="inner-block fondoBlanco">

        <div class="curso_destacado">
            <a href="/cursosPresenciales/cursoJavascript.php">
                <div class="imagenes_inferiores">
                    <img src="img/nuestrosCursos/nuestrosCursos_1.jpg" alt="Imagen Javascript"/>
                    <div class="cuadrado_naranja">
                        <div class="texto">
                            <p class="titulo_texto">Javascript</p>
                            <p 	class="info">Tu web conseguirá dinamismo!</p>
                        </div>
                    </div>
                </div>	
            </a>
        </div>

        <div class="curso_destacado">
            <a href="/cursosOnline/cursoCss.php">
                <div class="imagenes_inferiores">
                    <img src="img/nuestrosCursos/nuestrosCursos_2.jpg" alt="imagen CSS"/>
                    <div class="cuadrado_azul">
                        <div class="texto">
                            <p class="titulo_texto">Css en la web</p>
                            <p 	class="info">Utiliza lo más nuevo en hojas de estilos</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="curso_destacado">
            <a href="/cursosSeminarios.php">
                <div class="imagenes_inferiores">
                    <img src="img/nuestrosCursos/nuestrosCursos_3.jpg" alt="Imagen para Marketing Online"/>
                    <div class="cuadrado_azul">
                        <div class="texto">	
                            <p class="titulo_texto">Comercio electrónico</p>
                            <p 	class="info">Es el momento de las compras por internet</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--Fin imagenes inferiores -->

    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>