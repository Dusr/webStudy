<?php session_start() ?>
<?php include("include/inc_1_head_inicio.php") ?>


<title>Asesoramiento | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->

<link href="css/asesoramiento.css" rel="stylesheet">
<!-- SCRIPT de las tabs-->
<script>
   
</script>

<script type="text/javascript">
    
</script>

<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?> 

<li class="item-2">
    <a title="Ir a conocenós" href="conocenos.php">Conócenos</a>
</li>
<li class="item-3" >
    <a title="Ir a nuestros cursos" href="nuestrosCursos.php">Nuestros cursos</a>				
</li>
<li class="item-4 activo">
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
    <a title="Asesoramiento" href="asesoramiento.php">Asesoramiento</a>
</li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Asesoramiento</h2>
    
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>

    <?php include("include/inc_opcional_slider_Inicio.php") ?>

    <img alt="asesoramiento" src="img/imgSlider/asesoramiento.jpg">

    <?php include("include/inc_opcional_slider_Final.php") ?>

    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR -->

    <div class="contenedor top-block"> 
        <div class="info-box row">
            <ul id="tabs" >
                <li><a href="/" title="tab1"><strong>incidencias en entorno web</strong></a></li>
                <li class="pestana2"><a href="/" title="tab2" ><strong>consultoria y asesoramiento web</strong></a></li>
            </ul>
        </div>
    </div>

    <div id="content">
        <div id="tab1" class="main inner-block">
            <p class="entradilla">Ofrecemos a nuestros clientes la posibilitad de contar con un departamento informático de alto nivel al igual que las grandes empresas. Cubrimos todas las necesidades de su negocio </p>


            <div class="contenedorFila row">
                <div class="circulo">
                    <div>
                        <img src="img/asesoramiento/incidencia1.png" alt=""/>
                    </div>
                    <h4 class="textoIcono">Soporte técnico en remoto</h4>
                </div>
                <div class="contenidoCirculoDerecha">
                    <p>Nuestro servicio remoto único y diferenciado nos permite realizar prácticamente cualquier resolución de incidencia de una forma rápida y eficaz ayudando a una mayor productividad de sus equipos y web.</p>
                    <ul>
                        <li>Servicio express atención inmediata vía remota, sin extraños en su casa/oficina!</li>
                        <li>Sin contratos ni rentas mensuales (Opción a planes mensuales)</li>
                        <li>Facturación mensual o pago por evento</li>
                        <li>Tranquilidad: firma previa&nbsp;de autorización y&nbsp;acuerdo&nbsp;de&nbsp;confidencialidad</li>
                        <li><strong>Seguridad: Usted decide cuando se conecta el técnico a su computadora!</strong></li>
                    </ul>

                </div>
            </div>

            <div class="contenedorFila row">
                <div class="circulo">
                    <div>
                        <img src="img/asesoramiento/incidencia4.png" alt=""/>
                    </div>
                    <h4 class="textoIcono">Mantenimiento informático</h4>
                </div>
                <div class="contenidoCirculoDerecha">
                    <p>Este servicio, va dirigido a PYMES y autónomos los cuales posean desde un ordenador hasta toda una red informática de equipos y quieran garantizar sus beneficios y aumentar el rendimiento Informático, asegurándose de la mejor información y servicios tecnológicos en todo momento a unos precios muy competitivos, cubriendo todas y cada una de las áreas de su sistema informático y contratándose en función de los equipos a mantener</p>
                    <ul>
                        <li><strong>Mas de 5 equipos </strong>: desde... 90 €/mes</li>
                        <li><strong>Mas de 2 equipos </strong>: desde... 45 €/mes</li>
                        <li><strong>Particulares</strong>: desde... 20 €/mes (2 equipos)</li>
                    </ul>

                </div>
            </div>

            <div class="contenedorFila row">
                <div class="circulo">
                    <div>
                        <img src="img/asesoramiento/incidencia3.png" alt=""/>
                    </div>
                    <h4 class="textoIcono">Software Help Desk</h4>
                </div>
                <div class="contenidoCirculoDerecha">
                    <p>Disponemos de software de gestión de incidencias para departamentos de Help Desk. Lo instalamos y lo configuramos en tus servidores locales o si lo prefieres también ofrecemos un servicio online para que pueda conectarse desde cualquier lugar y con cualquier dispositivo.</p>
                    <p>Sus ventajas:</p>
                    <ul>
                        <li>Sin necesidad de infraestructuras propias</li>
                        <li>Inversión inicial baja</li>
                        <li>Asistencia administrativa general que le dejará sin preocupaciones</li>
                        <li>Actualizaciones en remoto regulares</li>
                    </ul>
                    <p><strong>Solución de asistencia completa en la nube</strong></p>
                </div>
            </div>

        </div>

        <div id="tab2" class="main inner-block">

            <p class="entradilla">Webstudy ofrece un servicio de consultoría y asesoramiento para proyectos online. Ponemos todo nuestro conocimiento y experiencia a tu disposición.</p>


            <div class="contenedorFila row">
                <div class="circulo">
                    <div>
                        <img src="img/asesoramiento/desarrolloWeb.png" alt=""/>
                    </div>
                    <h4 class="textoIcono">desarrollo y diseño web</h4>
                </div>
                <div class="contenidoCirculoDerecha">
                    <p>Ofrecemos servicios de formación para personas que quieran iniciarse en este mundo tan creativo. Ya sea una página web corporativa, una tienda online o un proyecto que requiera programación a medida.</p>
                    <ul>
                        <li>Lenguajes de marcas</li>
                        <li>Lenguajes de programación</li>
                        <li>Prototipado en la web</li>
                        <li>Buenas prácticas</li>
                        <li>Accesibilidad y estandares web</li>
                    </ul>
                </div>
            </div>

            <div class="contenedorFila row">
                <div class="circulo">
                    <div>
                        <img src="img/asesoramiento/responsive-design.png" alt=""/>
                    </div>
                    <h4 class="textoIcono">versión pc y móvil (responsive)</h4>
                </div>
                <div class="contenidoCirculoDerecha">
                    <p>Debido al crecimiento de las comunicaciones y tecnologias y sobre todo debido a los smartphones ya es necesario adaptar las web a estos dispositivos. </p>
                    <p>WebStudy ofrece también cursos de responsive web design ya que actualmente forma una parte esencial en el diseño y creación de webs</p>
                </div>
            </div>

            <div class="contenedorFila row">
                <div class="circulo">
                    <div>
                        <img src="img/asesoramiento/desarrolloWeb.png" alt=""/>
                    </div>
                    <h4 class="textoIcono">Posicionamiento web SEO</h4>
                </div>
                <div class="contenidoCirculoDerecha">
                    <p>WebStudy En Webnovant somos muy conscientes de la importancia del posicionamiento web en los buscadores. Por ello, todos nuestros proyectos se optimizan a nivel de diseño, estructura y programación, para conseguir un buen posicionamiento web.</p>
                    <p> Además, contamos con un servicio de seguimiento mensual, para potenciar continuamente el posicionamiento web natural (SEO), analizando e interpretando las estadísticas de la página web, y tomando las medidas oportunas para mejorar los resultados y atraer más visitas y clientes a tu negocio.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="inner-block-alternative">
        <div class="caja_gris">
            <p><strong>Presupuesto gratis y sin compromiso</strong></p>
            <p><strong>Facilitenos sus datos y su consulta para poder ayudarle</strong></p>
            <div class="boton_consulta row">
                <a class="boton" href="contacto.php" title="Consúltenos">Consúltenos</a>
            </div>
        </div>
    </div>	
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>