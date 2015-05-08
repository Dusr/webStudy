<?php include("../include/inc_1_head_inicio_subcarpeta.php") ?>


	 <title>Modulos del curso | área privada | Webstudy.com</title>

	
	<!-- METAS de la pagina -->
	<meta name="description" content=''/>
  <meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

    <!-- LINK hojas de CSS -->
 	
    <link href="../css/cursosCatalogo.css" rel="stylesheet">
    <link href="../css/cursoActual.css" rel="stylesheet">

    <!-- JAVASCRIPT -->

	
<?php include("../include/inc_3_headerTemplate_subcarpeta.php") ?>
<?php include("../include/inc_4_nav_inicio_subcarpeta.php") ?> 
				<li class="item-2">
   					<a title="Ir a conocenós" href="../conocenos.php">Conócenos</a>
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
				    <a title="Ir a Contactanós" href="../contacto.php"> Contactanós </a>
				</li>
				<li class="menuLogin">
   					 <a title="Ir a la página de acceso" href="../accederLogin.php"> Acceder / Registro </a>
				</li>
<?php include("../include/inc_5_nav_final.php") ?>

<?php include("../include/inc_opcional_breadcrumb_Inicio_subcarpeta.php") ?>
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
		                    <h2>Curso de  xxxxxx (hacerlo con php)</h2>
<?php include("../include/inc_opcional_breadcrumb_final_subcarpeta.php") ?>
		<!-- Estructura del Menu secundario. -->

		<div class="menu_secundario">
			<div class="contenedor_menu_secundario">
				<ul>
					<li class="">
						<a title="Ir a tu perfil" href="perfilAlumno.php">Tu perfil</a>
					</li>
					<li class="">
						<a title="Ir al curso actual" href="cursoActual.php">Curso actual</a>
					</li>
					<li class="activa cursos_online">
						<a title="Mis cursos" href="misCursos.php">Mis cursos</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="full-block fondo_gris online">
			<div class="inner-block-alternative titulo_detalleCurso">
				 <a title="Ir a Cursos Online" href="../cursosOnline.php">
            		<img alt="Volver atrás" src="../img/cursosCatalogo/flechaIzq.png">
        		</a>
        		<h3>Curso de  xxxxxx (hacerlo con php)</h3>
			</div>

		</div>

	<!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->        
    <div class="main inner-block">
        <p>Curso de xxxx y xxxxx</p>
                
	<!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->
<div class="main inner-block" id="mainContainer">
    
       
<div class="bloqueIzq">
            
        <div class="headerMod">
            <p> Modulos del curso </p>
        </div>
    
        <div class="tablaModulos">    
                <div class="moduloUno modulo">
                    <div class="imagenMod">
                        <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                    </div>

                    <div class="texto">
                        <p >MÓDULO 0: Presentación.</p>
                    </div>
                    
                    <div>
                        <input class="botonAcceder" type="button" name="acceder" value="ACCEDER">
                    </div>
                </div>
            
                <div class="moduloDos modulo">
                    <div class="imagenMod">
                        <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                    </div>

                    <div class="texto">
                        <p >MÓDULO 0: Presentación.</p>
                    </div>
                    
                    <div>
                        <input class="botonAcceder" type="button" name="acceder" value="ACCEDER">
                    </div>
                                    
<!-- A partir de aquí se hará el php para, dependiendo del curso, mostrar uno u otro -->
                    <?php 
                        
                    ?>
                </div>
                
                <div class="moduloTres modulo">
                    <div class="imagenMod">
                        <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                    </div>

                    <div class="texto">
                        <p >MÓDULO 0: Presentación.</p>
                    </div>
                    
                    <div>
                        <input class="botonAcceder" type="button" name="acceder" value="ACCEDER">
                    </div>
                </div>
            
                <div class="moduloCuatro modulo">
                    <div class="imagenMod">
                        <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                    </div>

                    <div class="texto">
                        <p >MÓDULO 0: Presentación.</p>
                    </div>
                    
                    <div>
                        <input class="botonAcceder" type="button" name="acceder" value="ACCEDER">
                    </div>
                </div>            
        </div>
</div>

<div class="bloqueDcha">
    <div class="headerDcha">
            <p> Modulos del curso </p>
    </div>
    
    <div class="descargaPdf">
        <img alt="Descarga PDF" src="#"/>
    </div>
    <p class="textoDcha">Temario para descargar</p> 
    <div class="descargaEj">
        <img alt="Descarga de Ejercicios" src="#"/>
    </div>
    <p class="textoDcha">Descarga de ejercicios </p>
    
    <p>Formulario de envío de ejercicios.</p>
    
    <form>
        <input type="text" id="nombre" name="nombre" value="<?php echo $_SESSION['nombre'];?>"/>
        <input type="text"/>
        <input type="file" name="fichero" class="subirFichero"><p> Subir ficheros</p>
    </form>
</div>
    
</div>
</div>
<!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
<?php include("../include/inc_6_footer_template_subcarpeta.php") ?>
