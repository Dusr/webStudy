<?php include($_SERVER['DOCUMENT_ROOT'] . '/webStudy/include/inc_1_head_inicio.php'); ?>
<?php session_start() ?>
<title>Modulos - Login | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="css/homeStyle-OBSOLETO.css" rel="stylesheet">
<link href="css/cursoActual-obsoleto.css" rel="stylesheet">
<!-- SCRIPT de las Tabs --> 
<script type="text/javascript">
    $(document).ready(function () {
        $("#tab1").hide();
        $("#tab2").hide();
        $("#tab3").hide();
        $("#tabs li:first").attr("id", "current");
        $("#content div:first").fadeIn('normal');

        $('#tabs a').click(function (e) {
            e.preventDefault();
            $("#tab1").hide();
            $("#tab2").hide();
            $("#tab3").hide();
            $("#tabs li").attr("id", "");
            $(this).parent().attr("id", "current");
            $('#' + $(this).attr('title')).fadeIn();
        });
    })();
</script>
<script>
    $(document).ready(function () {
        $('.menuLogin').click(function (e) {
            $(".header").find('.dropdown-menu').slideToggle("fast").end();
        });
    });
</script>


<!-- JAVASCRIPT -->

<?php include($_SERVER['DOCUMENT_ROOT'] . '/webStudy/include/inc_2_head_final.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/webStudy/include/inc_3_headerTemplate.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/webStudy/include/inc_4_nav_inicio.php'); ?>


<!-- NAV -->
<ul>
    <li class="item-2">
        <a title="Ir a conócenos" href="../webStudy/conocenos.php">Conócenos</a>    				
    </li>
    <li class="item-3" >
        <a title="Ir a nuestros cursos" href="../webStudy/nuestrosCursos.php">Nuestros cursos</a>		
    </li>
    <li class="item-4">
        <a title="Ir a asesoramiento" href="../webStudy/asesoramiento.php"> Asesoramiento </a>
    </li>
    <li class="item-5">
        <a title="Ir a Soporte/Faq´s" href="../webStudy/soporteFaqs.php"> Soporte/Faq´s </a>
    </li>
    <li class="item-6">
        <a title="Ir a Contactanos" href="../webStudy/contacto.php"> Contáctanos </a>
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
            <a href="#"> Bienvenido <?php echo $_SESSION['nombre']; ?></a>
        </li>
        <?php
    }
    ?>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/webStudy/include/inc_5_nav_final.php") ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/webStudy/include/inc_opcional_breadcrumb_Inicio.php") ?>
    <li>
        <a title="Acceder - registro" href="../accederLogin.php">Acceder - Registro</a>
    </li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="../img/images/left-white-arrow.png">
        </a>
    </div>
    <h2>Area privada</h2>
    <ul>
        <li>
            <ul class="dropdown-menu" role="menu">
                <a href="../areaprivada/perfilUsuario.php">
                    <li>Ir a mi perfil</li>
                </a>

                <a href="../areaprivada/logout.php">
                    <li>Cerrar sesion</li>
                </a>
            </ul>
        </li>
    </ul>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/webStudy/include/inc_opcional_breadcrumb_final.php") ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/webStudy/include/inc_opcional_breadcrumb_final.php") ?>   
    <!-- Tabs -->
    <div class="contenedor top-block"> 
        <div class="info-box row">
            <ul id="tabs" >
                <li><a href="miPerfil.php" title="tab1"><strong>PERFIL</strong></a></li>
                <li class="pestana2"><a href="/" title="tab2" ><strong>MIS CURSOS</strong></a></li>
                <li class="pestana3"><a href="/" title="tab3" ><strong>CURSO ACTUAL</strong></a></li>
            </ul>
        </div>
    </div>


    <div class="main inner-block" id="mainContainer">
        <div id="tab1" class="main inner-block">
            <a href="miPerfil.php" title="tab1"></a>
        </div>

        <div id="tab2" class="main inner-block">
            <p class="entradilla">Tab 2 </p>


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

        <div id="tab3" class="main inner-block">
            <p>Curso de xxxx y xxxxx</p>
            <div class="bloqueIzq">
                <div class="headerMod">
                    <p> Modulos del curso </p>
                </div>
                <div class="moduloUno">
                    <div class="imagenMod">
                        <img src=""/>
                    </div>

                    <div class="textoMod">

                    </div>
                    <div class="botonAcceder">
                        <input type="button" name="acceder">
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>

<!-- pie de página -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/webStudy/include/inc_6_footer_template.php') ?>