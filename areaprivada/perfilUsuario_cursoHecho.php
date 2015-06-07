<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Juan Carlos Gonzalez">
		<meta name="author" content=" David Álvaro Uceda">
		<meta name="author" content="Cristina Velilla">
		<meta name="Copyright" content="©autores del proyecto"> 
                <meta name="robots" content="NoIndex, NoFollow">
		<!-- Css comun -->
		<link href="../css/globalStyle.css" rel="stylesheet">
		<!-- JAVASCRIPT -->
		<script src="../js/jquery-1.11.2.min.js"></script>
		<script src="../js/functions_areaPrivada.js"></script>
                

<?php
//INICIAMOS LA SESION
session_start();
?>

<title>Perfil de usuario | Área privada | Webstudy.com</title>


<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="../css/cursosCatalogo.css" rel="stylesheet">
<link href="../css/areaPrivada.css" rel="stylesheet">
<script src="../js/functions_areaPrivada.js"></script>


<!-- JAVASCRIPT -->


<?php
if (isset($_GET['insert'])) {
    ?>
    <script>
        alert('Usuario creado correctamente');
    </script>
    <?php
}
?>  

<?php
if (isset($_GET['erroravatar'])) {
    ?>
    <script>
        alert('No se ha cambiado el avatar, inténtelo otra vez');
    </script>
    <?php
} else if (isset($_GET['avatarmodified'])) {
    ?>
    <script>
        alert('Se ha cambiado el avatar');
    </script>
    <?php
}
?>
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
    <a title="Ir a Conócenos" href="../conocenos.php">Conócenos</a>
</li>
<li class="item-3" >
    <a title="Ir a Nuestros cursos" href="../nuestrosCursos.php">Nuestros cursos</a>		
</li>
<li class="item-4">
    <a title="Ir a Asesoramiento" href="../asesoramiento.php"> Asesoramiento </a>
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
    <li class="menuLogin activo">
        <a title="Ir a la página de acceso" href="../accederLogin.php"> Acceder / Registro </a>
    </li>
    <?php
} else {
    ?>
    <li class="menuLogin activo">
        <a title="Ir a mi perfil" href="#"> Bienvenido <?php echo $_SESSION['nombre']; ?></a>
        <div class="header">
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="../areaprivada/perfilUsuario.php">
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
</ul>
		</div>
	</nav>
<!-- CONTENEDOR TOTAL ESTA ESTRUCTURA ENVUELVE TODO EL CONTENIDO + FOOTER ....... -->
	<div class="contenedor-total">

<!-- ESTRUCTURA DEL BREADCRUMB -->
<div class="breadcrumb_title full-block"> 
			<div class="inner-block-alternative">
				<div class="breadcrumb">
					<div class="location">
		                <ul>
		                    <li>
		                      <a title="home" href="../index.php"><img alt="Ir a la página Principal" title="Ir a la página Principal" src="../img/iconos/header_nav/mini_ico_home.png"/></a>
		                    </li>

<li>
    <a title="Area privada" href="../accederLogin.php.php">Area privada</a>
</li>

</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="../images/left-white-arrow.png"/>
        </a>
    </div>

    <h2>Bienvenido <?php echo $_SESSION['nombre'] ?></h2>
   		</div>
           			</div>
				</div>
			</div>
		</div>


    <?php
    if ($_SESSION['profesor'] == 0) {
        ?>
        <!-- Estructura del Menu secundario. -->

        <div class="menu_secundario">
            <div class="contenedor_menu_secundario">
                 <ul class="tabs">
                    <li class="lado">
                                
                    </li>
                    <li>
                        <a title="Perfil del usuario" href="perfilUsuario.php">Tu perfil</a>
                    </li>
                    
                    <li>
                        <a title="Curso actual" href="perfilUsuario_cursoActual.php">Curso actual</a>
                    </li>
                    
                    <li class="current">
                        <a title="Cursos finalizados" href="perfilUsuario_cursoHecho.php">Mis cursos finalizados</a>
                    </li>
                    <li class="lado">
                                
                    </li>
                </ul>
            </div>
        </div>

        <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->


        <div class="content">
                 

            <!-- CURSO ACTUAL -->
         
            <!-- MIS CURSOS FINALIZADOS-->
            <div class="main inner-block tab3">
                    <?php
                        include('../areaprivada/openDB.php');

                        /* ----------------COMPROBAMOS EL CURSO ACTUAL Y QUE ESTÉ ACABADO-------------------- */

                        $curso_finalizado = mysql_query("SELECT * "
                                . "FROM curso "
                                . "WHERE idCurso IN ("
                                . "SELECT Curso_idCurso "
                                . "FROM alumno_has_curso "
                                . "WHERE curso.idCurso = alumno_has_curso.Curso_idCurso "
                                . "AND Alumno_idAlumno=" . $_SESSION['idAlumno'] . " "
                                . "AND done=1)", $con) or die("Error en: $busqueda: " . mysql_error());


//            while ($row = mysql_fetch_array($curso_finalizado, MYSQL_ASSOC)) {
//    print_r($row);
//}

                        if (mysql_num_rows($curso_finalizado) > 0) {
                            ?>
                            <p class="titulo">Enhorabuena, has terminados estos cursos</p>
                            <ul class="curso_finalizado">
                                <?php
                                while ($rowcurso = mysql_fetch_array($curso_finalizado)) {

                                    $nombreCurso = $rowcurso['nombre'];
                                    ?>
                                    <li>
                                        <div class="envoltura">
                                            <div class="imagenCursoFinalizado">
                                                <img src="../img/iconos/areaPrivada/diploma.png"/>
                                            </div>
                                            <div class="datosCursoFinalizado">                                        
                                                <p>Curso finalizado:<?php echo $rowcurso['nombre']; ?></p>                                        
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>

                            <?php
                        } else {
                            ?>

                            <p><a href="/areaprivada/perfilUsuario.php" title="Aún no has finalizado ningún curso">Aún no has finalizado ningún curso</a>. </p>
                        <?php } ?>

                    </div>
        

    <?php } else { ?> 

        <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->


        <!-- Estructura del Menu secundario. -->

        <div class="menu_secundario profesor">
            <div class="contenedor_menu_secundario">
                <ul class="tabs">
                    <li class="lado">
                        
                    </li>
                    <li>
                        <a title="Perfil del usuario" href="perfilUsuario.php">Tu perfil</a>
                    </li>
                    <li >
                        <a title="Listado de alumnos" href="perfilUsuario_cursoActual.php">Listado alumnos de <?php echo $_SESSION['nombre'] ?></a>
                    </li>
                    <li class="current">
                        <a title="Notificaciones" href="perfilUsuario_cursoHecho.php">Notificaciones</a>
                    </li>
                    <li class="lado">
                        
                    </li>
                </ul>
            </div>
        </div>

        <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->

        <!-- MI PERFIL -->
        <div class="content profesor">
          <!-- MIS CURSOS -->
            <div class="main inner-block tab3">
                 <p>Sus mensajes:</p>
                  <div class='notificaciones'>
                        <div class="boton_mensaje">
                  <?php
                        include('../areaprivada/openDB.php');
                         $queryMensaje = "select * from mensaje where receptor=" . $_SESSION['idAlumno'];
                         $mensajes = mysql_query($queryMensaje);
                         if(isset($_GET['borrarMsg']))
                                {
                                     $sql_query="DELETE FROM mensaje WHERE id=".$_GET['borrarMsg'];
                                     mysql_query($sql_query);
                                     @header('Location: ' . $_SERVER['HTTP_REFERER']);
                                     echo "<p>No tienes ningún mensaje. </p>";
                                     exit;
                                }
                        if (mysql_num_rows( $mensajes) > 0) {
                                   
                                   // $mensajes = mysql_query($queryMensaje);

                                while ($filaNotificacion = mysql_fetch_array($mensajes)) {
                                    ?>
                                <ul class="row">
                                        <li><strong>Alumno: </strong> <?php echo $filaNotificacion['login'] ?></li>
                                        <li><strong>Módulo: </strong><?php echo $filaNotificacion['titulo'] ?></li>
                                        <li><strong>Mensaje: </strong><?php echo $filaNotificacion['mensaje'] ?></li>
                                        <li class="last"><a target="_blank" href="descargarArchivo.php?id=<?php echo $filaNotificacion['id'] ?>">Descargar</a></li>
                                        <li class="lastDos"><a href="perfilUsuario_cursoHecho.php?borrarMsg=<?php echo $filaNotificacion['id']; ?>" onclick="return confirm('sure to delete ?'); " >delete</a></li>
                                </ul>
                                 <?php
                                    }
                                    ?>
                             <?php
                        } else {
                            ?>

                            <p>No tienes ningún mensaje. </p>
                        <?php } ?>
                        </div>
                </div>
                    


 <?php
                                    }
                     ?>  
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
