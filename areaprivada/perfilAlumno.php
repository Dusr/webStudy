<?php

session_start();

if($_SESSION['logged']== TRUE){
?>

    id: <?php echo $_SESSION['idAlumno']; ?>
    nombre: <?php echo $_SESSION['usuario']; ?>
    apellidos: <?php echo $_SESSION['apellidos']; ?>
    avatar: <?php echo $_SESSION['avatar']; ?>

<?php
}//end IF
?>

    <?php include("../include/inc_1_head_inicio_subcarpeta.php") ?>


	 <title>Modulos del curso | área privada | Webstudy.com</title>

	
	<!-- METAS de la pagina -->
	<meta name="description" content=''/>
  <meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

    <!-- LINK hojas de CSS -->
 	 <link href="../css/cursosCatalogo.css" rel="stylesheet">
        <link href="../css/login.css" rel="stylesheet">
        <link href="../css/miPerfil.css" rel="stylesheet">

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
        		<h3 id="nombreUser">Bienvenido PEPE! (hacerlo con php)</h3>
			</div>

		</div>
	<!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->
        <div id="tab1" class="main inner-block">
            <div id="colIzq">
                <!--                <div id="cabAcceso">
                                        <img src="img/login/icon_acceso.png">
                                        <p>Tus datos personales</p>
                                    </div>-->
                <div id="userData">
                    <form action="" method="">
                        <div id="cabRegistro">
                            <p>Mis Datos</p>
                        </div>
                        <div id="camposRegistro">
                            <div class="left">
                                <label for="nombre">Nombre:</label>
                                <label for="apellidos">Apellidos:</label>
                                <label for="correo">Email:</label>
                                <label for="direccion">Dirección:</label>
                            </div>
                            <div class="inputs">
                                <input type="text" id="nombre" name="nombre">
                                <input type="text" id="apellidos" name="apellidos">
                                <input type="text" id="correo" name="correo">
                                <input type="text" id="direccion" name="direccion">
                            </div>

                            <div class="boton_enviar">
                                <input type="submit" name="Guardar" value="Guardar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div id="colDcha">
                <div id="avatar">
                    <img src=""/>
                </div>    
                <div class="avatar">
<!--                    <input class="avatar" type="file" value="Cambiar avatar" name="avatar">-->
                    <p>Cambiar avatar</p>
                </div>
                <input class="guarda" type="file"/>
            </div>
        </div>
<!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
<?php include("../include/inc_6_footer_template_subcarpeta.php") ?>
