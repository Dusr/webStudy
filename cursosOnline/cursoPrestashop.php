<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
?>
<?php include("../include/inc_1_head_inicio_subcarpeta.php") ?>

<!------------------------------------------------------------------------------------------CARGAMOS LA INFORMCIOND EL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->
<?php include("../cursosOnline/cargarCursos/cargarPrestashop.php") ?>

<title><?php echo $nombreCurso; ?> | Cursos Online | Nuestros cursos | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="../css/cursosCatalogo.css" rel="stylesheet">
<link href="../css/detalleCursoStyle.css" rel="stylesheet">
<!-- JAVASCRIPT -->


</head>
    <body>
    <header>
		<div id="contenedor_header" class="row">
			<!-- Para en menu en la version responsive , por ahora se queda en blanco -->
			<div class="menu_desplegable"> </div>
				<div id="logo">
		            <h1>Webstudy.com</h1>
		            <a title="Ir a la home" href="../index.php">
		                <img alt="Webstudy.com"  src="../img/logoProyecto.png"/>
		            </a>
	       		</div>

	        <!-- MENU DE de las redes sociales  -->
			<div class="caja_redes_sociales" id="menu_top">
                <ul>
                    <li class="caja_redes_sociales_texto"><span>A <strong>más de 100 personas</strong>
	                    <br>les gusta nuestra web</span></li>
                    <li>
                        <a href="https://es-es.facebook.com/" title="Hacer clic en Me gusta" class="ico_like" target="_blank">
                            <img src="../img/iconos/header_nav/ico_like.png" title="Icono me gusta Facebook" alt="Icono me gusta Facebook"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://es-es.facebook.com/" title="Ser Fan en Facebook" class="ico_facebook" target="_blank">
                            <img src="../img/iconos/header_nav/ico_facebook.png" title="Icono seguir Facebook" alt="Icono seguir Facebook"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/?lang=es" title="Seguir en Twitter" class="ico_twitter" target="_blank">
                            <img src="../img/iconos/header_nav/ico_twitter.png" title="Icono seguir en Twitter" alt="Icono seguir en Twitter"/>
                        </a>
                    </li>
                   
                </ul>
            </div>
	    </div>
	</header>

<nav class="menu_principal">
		<div id="contenedor_menu_principal">
			<ul>
				<li class="item-1">
   					<a title="Home" href="../index.php">Home</a>
				</li>
<li class="item-2">
    <a title="Ir a conócenos" href="../conocenos.php">Conócenos</a>
</li>
<li class="item-3 activo" >
    <a title="Ir a nuestros cursos" href="../nuestrosCursos.php">Nuestros cursos</a>		
</li>
<li class="item-4">
    <a title="Ir a asesoramiento" href="../asesoramiento.php"> Asesoramiento </a>
</li>
<li class="item-5">
    <a title="Ir a Soporte - Faq´s" href="../soporteFaqs.php"> Soporte/Faq´s </a>
</li>
<li class="item-6">
    <a title="Ir a Contáctanos" href="../contacto.php"> Contáctanos </a>
</li>
<?php
if (!isset($_SESSION['logged'])) {
    ?>
    <li class="menuLogin">
        <a title="Ir a la página de acceso" href="../accederLogin.php"> Acceder / Registro </a>

    </li>
    <?php
} else {
    ?>
    <li class="menuLogin">
        <a href="#"> Bienvenido <?php echo $_SESSION['nombre']; ?></a>
        <div class="header">
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="../areaprivada/perfilUsuario.php">
                        Ir a mi perfil
                    </a>
                </li>
                <li>
                    <a href="../areaprivada/logout.php">
                        Cerrar sesion
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <?php
}
?>
</ul>
		</div>
	</nav>
<!-- CONTENEDOR TOTAL ESTA ESTRUCTURA ENVUELVE TODO EL CONTENIDO + FOOTER ....... -->
	<div class="contenedor-total">

<div class="breadcrumb_title full-block"> 
			<div class="inner-block-alternative">
				<div class="breadcrumb">
					<div class="location">
		                <ul>
		                    <li>
		                      <a title="home" href="../index.php"><img alt="Ir a la página Principal" title="Ir a la página Principal" src="../img/iconos/header_nav/mini_ico_home.png"/></a>
		                    </li>
<li>
    <a title="Nuestros cursos" href="../nuestrosCursos.php">Nuestros cursos</a>
</li>
<li>
    <a title="Cursos presenciales" href="../cursosPresenciales.php">Cursos presenciales</a>
</li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="../images/left-white-arrow.png">
        </a>
    </div>
    <h2>Cursos online</h2>
        					</div>
           			</div>
				</div>
			</div>
		</div>

    <!-- Estructura del Menu secundario. -->
    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul>
                <li class="ladoc">
                                
                </li>
                <li class="">
                    <a title="Cursos personalizados" href="../cursosPersonalizados.php">Cursos <br />personalizados</a>
                </li>
                <li class="">
                    <a title="Cursos presenciales" href="../cursosPresenciales.php">Cursos <br />presenciales</a>
                </li>
                <li class="activa cursos_online">
                    <a title="Cursos online" href="../cursosOnline.php">Cursos online</a>
                </li>
                <li class="">
                    <a title="Seminarios gratuitos" href="../cursosSeminarios.php">Seminarios <br />  gratuitos</a>
                </li>
                <li class="ladoc">
                                
                </li>
            </ul>
        </div>
    </div>
    <div class="full-block fondo_gris presenciales">
        <div class="inner-block-alternative titulo_detalleCurso">
            <a title="Ir a Cursos Online" href="../cursosOnline.php">
                <img alt="Volver atrás" src="../img/cursosCatalogo/flechaIzq.png">
            </a>
            <h3><?php echo $nombreCurso; ?></h3>
            <?php
            if (isset($_SESSION['logged'])) {

                $result = mysql_query("SELECT * "
                        . "FROM alumno_has_curso "
                        . "WHERE Curso_idCurso=" . $idCurso . " AND Alumno_idAlumno= '" . $_SESSION['idAlumno'] . "'"
                        . "AND done=0", $con);

                if (mysql_num_rows($result) == 1) { // SI YA ESTÁ INSCRITO EN ESE CURSO
                    ?>
                    <input class="inscrito" type="submit" value="inscrito"/>
                    <?php
                } else {

                    $result2 = mysql_query("SELECT * "
                            . "FROM alumno_has_curso "
                            . "WHERE Alumno_idAlumno= '" . $_SESSION['idAlumno'] . "' "
                            . "AND done=0", $con);
                    
                    // Para ver si ya ha terminado el curso.

                    $result3 = mysql_query("SELECT * "
                            . "FROM alumno_has_curso "
                            . "WHERE Curso_idCurso=" . $idCurso . " AND Alumno_idAlumno= '" . $_SESSION['idAlumno'] . "' "
                            . "AND done=1", $con);


                    if (mysql_num_rows($result3) == 1) { // SI YA HA HECHO EL CURSO
                        ?>

                        <h4>¡Ya has finalizado el curso!</h4>

                        <?php
                    }else if (mysql_num_rows($result2) > 0) { // SI ESTA INSCRITO EN OTRO CURSO QUE NO SEA ESTE
                        ?>

                        <h4>Ya estás inscrito en otro curso, terminalo antes de inscribirte en otro</h4>

                        <?php
                            
                    } else {
                        // SI NO ESTÁ INSCRITO APARECERA EL BOTON PARA INSCRIBIRSE
                        ?>
                        <form action="../areaprivada/inscribirseCurso.php" method="POST">
                            <input class="hide" id="id" name="id" type="text" value="<?php echo $idCurso; ?>"/>
                            <input class="botonIncribir" type="submit" value="Inscribirse"/>
                        </form>
                        <?php
                    }
                }
            }
            ?>
        </div>

    </div>


    <div class="destacado_principal slider">

   		<div class="destacado">
        		<div class="imagen">

    <img alt="" src="../img/imgSlider/phestashop.png">

   </div>
	</div>
	</div>
    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR -->
    <div class="contenedor top-block"> 
        <div class="info-box">
            <div class="introCursos row">
                <p>Prestashop es un gestor de contenido orientado a la creación de tiendas online (e-commerce). 
                    El mismo es de código abierto y 100% compatible con las principales y más conocidas pasarelas de pago como Paypal,
                    Google Checkout y otros.</p>
                <p>Cabe destacar que Prestashop esta traducido a 65 idiomas por lo cual facilita mucho las tareas al momento de hacer una tienda online multi-idioma.</p>
            </div>
        </div>
    </div>	

    <div class="main inner-block fondoBlanco detalleCurso">
        <ul>
            <li>
                <div class="iconoCurso">
                    <img alt="Fecha de inicio" src="../img/iconos/cursosCatalogo/calendario76x76.png">
                    <h4>Fecha de inicio</h4>
                </div>
                <div class="texto_dcha">
                    <p><strong>
                            Del 28 de julio al de 30 Agosto
                        </strong>
                    </p>
                    <p>Disponible : turno tarde, turno fin de semana</p>
                </div>
            </li>
            <li>
                <div class="iconoCurso">
                    <img alt="Duración" src="../img/iconos/cursosCatalogo/reloj76x76.png">
                    <h4>Duración</h4>
                </div>
                <div class="texto_dcha">
                    <p><strong>
                            <?php echo $duracion; ?> horas de dedicación efectiva, incluyendo lecturas, estudio y ejercicios.
                        </strong>
                    </p><p>(se estiman 40 dias dedicando 3 horas diarias)</p>
                </div>
            </li>
            <li>
                <div class="iconoCurso">
                    <img alt="Descripcion del curso" src="../img/iconos/cursosCatalogo/descripcion76x76.png">
                    <h4>Descripción del curso</h4>
                </div>
                <div class="texto_dcha">
                    <p>
                        <?php echo $descripcion; ?>
                    </p>
                </div>
            </li>
            <li>
                <div class="iconoCurso">
                    <img alt="Modulos del curso" src="../img/iconos/cursosCatalogo/modulos76x76.png">
                    <h4>Módulos que integran el curso</h4>
                </div>
                <div class="texto_dcha">
                    <ol class="lista_numeros">
                        <?php
                        if (mysql_num_rows($modulos) > 0) {
                            while ($rowmodulo = mysql_fetch_array($modulos)) {
                                ?>  
                                <li>

                                    <strong> <?php
                                        echo $rowmodulo['nombre'];
                                        ?>
                                    </strong>
                                    <p class='paddingLeft'>
                                        <?php
                                        echo $rowmodulo['descripcion'];
                                        ?>
                                    </p> 
                                </li>
                                <?php
                            }//end_while
                        } else {
                            //SI NO ESTA EN LA BASE DE DATOS
                            header("Location: ../cursosOnline.php");
                        }
                        ?>

                    </ol>
                </div>
            </li>
        </ul>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
  		<footer>
			<div id="contenido_footer">
				<div class="footer_cajas">
		                 <p>Últimas Noticias</p>
		              
		                <ul>
		                     <li><a target="_blank" title="¿Qué es una página web corporativa y cómo montarla? " href="http://webnovant.com/es/blog/otros/que-es-una-pagina-web-corporativa-y-como-montarla">¿Qué es una página web corporativa y cómo montarla? </a></li>
		                    <li><a target="_blank" title="La importancia del Diseño Web Responsive" href="http://www.ecomputer.es/blog/diseno-web/importancia-del-diseno-responsive-en-una-web/">La importancia del Diseño Web Responsive</a></li>
		                    <li><a target="_blank" title="Cómo pasar correctamente de HTTP a HTTPS" href="http://webnovant.com/es/blog/recursos/como-pasar-correctamente-de-http-a-https">Cómo pasar correctamente de HTTP a HTTPS</a></li>
		                    <li><a target="_blank" title="¿Dónde descargar imágenes gratis y libres?" href="http://webnovant.com/es/blog/recursos/donde-descargar-imagenes-gratis-y-libres">¿Dónde descargar imágenes gratis y libres?</a></li>
		                   
		                </ul>
	 				</div>
	            	<div class="footer_cajas">
		                 <p>Cursos destacados</p>

		                 <ul>
		                    <li><a title="Javascript desde cero" href="../cursosPresenciales/cursoJavascript.php">Javascript desde cero</a></li>
		                    <li><a title="Curso sobre angular Js" href="../cursosPresenciales/cursoAngularJS.php">Curso sobre angular Js</a></li>
		                    <li><a title="Seminarios gratuitos" href="../cursosSeminarios.php">Seminarios gratuitos</a></li>
		                    <li><a title="Consultoría web" href="../asesoramiento.php">Consultoría web </a></li>
		                    <li><a title="Cursos personalizados" href="../cursosPersonalizados.php">Cursos personalizados</a></li>
		                </ul>
		            </div>
	            	<div class="footer_cajas">
		                <p>Enlaces </p>
		               
		                <ul>
		                     <li><a title="Inicio" href="../index.php">Inicio</a></li>
		                    <li><a title="Nosotros" href="../conocenos.php">Nosotros</a></li>
		                    <li><a title="Contacto" href="../contacto.php">Contacto</a></li>
		                    <li><a title="Certificaciones" href="/">Certificaciones</a></li>
		                    <li><a title="Preguntas frecuentes" href="../soporteFaqs.php"> Preguntas frecuentes</a></li>
		                    <li><a title="Condiciones de uso" href="/">Condiciones de uso</a></li>

		                </ul>
	            	</div>
	            	<div class="copyright">
	            		<span>© WebStudy. Reservados todos los derechos.</span>
	            	</div>
				</div>
			</footer>
		</div>	
	</body>
</html>