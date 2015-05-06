<?php

?>

<?php

	function head_inicio() {
?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Juan Carlos Gonzalez">
		<meta name="author" content=" David Álvaro Uceda">
		<meta name="author" content="Cristina Velilla">
		<meta name="Copyright" content="©autores del proyecto"> 
		<!-- Css comun -->
		<link href="css/globalStyle.css" rel="stylesheet">
		<!-- JAVASCRIPT -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/functions.js"></script>

<?php
	}
?>

<?php

	function head_final() {
?>  
	</head>
	<body>
	
<?php
	}
?>

<?php

	function headerTemplate() {
?>
	<header>
		<div id="contenedor_header" class="row">
			<!-- Para en menu en la version responsive , por ahora se queda en blanco -->
			<div class="menu_desplegable"> </div>
				<div id="logo">
		            <h1>Webstudy.com</h1>
		            <a title="Ir a la home" href="index.html">
		                <img alt="Webstudy.com"  src="img/logoCabecera.jpg"/>
		            </a>
	       		</div>

	        <!-- MENU DE de las redes sociales  -->
			<div class="caja_redes_sociales" id="menu_top">
                <ul>
                    <li class="caja_redes_sociales_texto"><span>A <strong>más de 100 personas</strong>
	                    <br>les gusta nuestra web</span></li>
                    <li>
                        <a href="https://es-es.facebook.com/" title="Hacer clic en Me gusta" class="ico_like" target="_blank">
                            <img src="img/iconos/header_nav/ico_like.png" title="Icono me gusta Facebook" alt="Icono me gusta Facebook"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://es-es.facebook.com/" title="Ser Fan en Facebook" class="ico_facebook" target="_blank">
                            <img src="img/iconos/header_nav/ico_facebook.png" title="Icono seguir Facebook" alt="Icono seguir Facebook"/>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/?lang=es" title="Seguir en Twitter" class="ico_twitter" target="_blank">
                            <img src="img/iconos/header_nav/ico_twitter.png" title="Icono seguir en Twitter" alt="Icono seguir en Twitter"/>
                        </a>
                    </li>
                   
                </ul>
            </div>
	    </div>
	</header>

<?php
	}
?>

<?php 
	function nav_parteInicio() {
?>
	<nav class="menu_principal">
		<div id="contenedor_menu_principal">
			<ul>
				<li class="item-1">
   					<a title="Home" href="index.html">Home</a>
				</li>
<?php 
	}
?>
				
<?php 
	function nav_parteFinal() {
?>
			</ul>
		</div>
	</nav>
<!-- CONTENEDOR TOTAL ESTA ESTRUCTURA ENVUELVE TODO EL CONTENIDO + FOOTER ....... -->
	<div class="contenedor-total">
<?php 
	}
?>

<?php 
	function breadcrumb_Inicio() {
?>
	<div class="breadcrumb_title full-block"> <!-- estructura del 100% para el color fondo-->
			<div class="inner-block-alternative"><!-- estructura que se limita a 1240px donde va el contenido-->
				<div class="breadcrumb">
					<div class="location">
		                <ul>
		                    <li>
		                      <a title="home" href="index.html"><img alt="Ir a la página Principal" title="Ir a la página Principal" src="img/iconos/header_nav/mini_ico_home.png"/></a>
		                    </li>
<?php 
	}
?>
		                 
<?php 
	function breadcrumb_final() {
?>
		                </div>
           			</div>
				</div>
			</div>
		</div>

<?php 
	}
?>

<?php 
	function slider_parteInicio() {
?>
	<div class="destacado_principal slider">

   		<div class="destacado">
        		<div class="imagen">
<?php 
	}
?>
        			
<?php 
	function slider_parteFinal () {
?>
		</div>
	</div>
	</div>

<?php 
	}
?>
	
<?php 
	function footer_template () {
?>
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
	                    <li><a title="Javasript desde cero" href="cursosPresenciales/cursoJavascript.html">Javasript desde cero</a></li>
	                    <li><a title="Curso sobre angular Js" href="cursosPresenciales/cursoAngularJS.html">Curso sobre angular Js</a></li>
	                    <li><a title="Seminarios gratuitos" href="cursosSeminarios.html">Seminarios gratuitos</a></li>
	                    <li><a title="Consultoría web" href="asesoramiento.html">Consultoría web </a></li>
	                    <li><a title="Cursos personalizados" href="cursosPersonalizados.html">Cursos personalizados</a></li>
	                </ul>
	            </div>
            	<div class="footer_cajas">
	                <p>Enlaces </p>
	               
	                <ul>
	                     <li><a title="Inicio" href="index.html">Inicio</a></li>
	                    <li><a title="Nosotros" href="conocenos.html">Nosotros</a></li>
	                    <li><a title="Contacto" href="contacto.html">Contacto</a></li>
	                    <li><a title="Certificaciones" href="/">Certificaciones</a></li>
	                    <li><a title="Preguntas frecuentes" href="soporteFaqs.html"> Preguntas frecuentes</a></li>
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
<?php 
	}
?>
