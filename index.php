
<?php include("include/inc_1_head_inicio.php") ?>

	<meta name="description" content=''/>
    <meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

    <!-- LINK hojas de CSS -->
 	<link href="css/homeStyle.css" rel="stylesheet">
<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?>

				<li class="item-2">
   					<a title="Ir a conocenós" href="conocenos.php">Conócenos
					</a>
    				
				</li>
				<li class="item-3" >
  					<a title="Ir a nuestros cursos" href="nuestrosCursos.php">Nuestros cursos</a>
  				</li>
				<li class="item-4">
				    <a title="Ir a asesoramiento" href="asesoramiento.php"> Asesoramiento </a>
				</li>
				<li class="item-5">
				    <a title="Ir a Soporte/Faq´s" href="soporteFaqs.php"> Soporte/Faq´s </a>
				</li>
				<li class="item-6">
				    <a title="Ir a Contactanos" href="contacto.php"> Contactanós </a>
				</li>
				<li class="menuLogin">
   					 <a title="Ir a la página de acceso" href="accederLogin.php"> Acceder / Registro </a>
				</li>
<?php include("include/inc_5_nav_final.php") ?>
<?php include("include/inc_opcional_slider_Inicio.php") ?>

		<!-- Imagen del slider -->
				<img alt="" src="img/imgSlider/slider_home.jpg"/>

<?php include("include/inc_opcional_slider_Final.php") ?>
	<!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->
		<div class="contenedor top-block"> 
			<div class="info-box">
                <div class="row">
                    <ul>
                    	<li>
                    		<a href="conocenos.php" title="Conocenós">
	                    		<div class="iconoImg">
	                    			<img src="img/iconos/iconosHome/home_conocenos84x84.png" alt="Conocenós"/>
	                    		</div>
	                    		<div class="texto_down">
	                    			<h2>Conocenós</h2>
	                    			<p>Webstudy somos un equipo profesional, cercano y con experiencia, creativo e innovador.</p>
	                    		</div>
                    		</a>
                    	</li>
                    	<li>
                    		<a href="nuestrosCursos.php" title="Nuestros cursos">
	                    		<div class="iconoImg">
	                    			<img src="img/iconos/iconosHome/home_cursos84x84.png" alt="Nuestros cursos"/>
	                    		</div>
	                    		<div class="texto_down">
	                    			<h2>Nuestros cursos</h2>
	                    			<p>Descubre el catálogo de cursos más avanzado del sector, elige la formación que más se adecúe a tus necesidades.</p>
	                    		</div>
                    		</a>
                    	</li>
                    	<li>
                    		<a href="asesoramiento.php" title="Asesoramiento">
	                    		<div class="iconoImg">
	                    			<img src="img/iconos/iconosHome/home_asesoramiento84x84.png" alt="Asesoramiento"/>
	                    		</div>
	                    		<div class="texto_down">
	                    			<h2>Asesoramiento</h2>
	                    			<p>¿Tienes dudas acerca de cómo enfocar tu proyecto web?
										No te preocupes, en Webstudy ponemos te asesoramos.</p>
	                    		</div>
                    		</a>
                    	</li>
                    	<li>
                    		<a href="soporteFaqs.php" title="Soporte">
	                    		<div class="iconoImg">
	                    			<img src="img/iconos/iconosHome/home_soporte84x84.png" alt="Soporte"/>
	                    		</div>
	                    		<div class="texto_down">
	                    			<h2>Soporte</h2>
	                    			<p>Quieres saber mas de como trabajamos, pincha aqui e intentaremos aclarar tus dudas. </p>
	                    		</div>
                    		</a>
                    	</li>
                    	<li>
                    		<a href="contacto.php" title="Contactanós">
	                    		<div class="iconoImg">
	                    			<img src="img/iconos/iconosHome/home_contacto84x84.png" alt="Contactanós"/>
	                    		</div>
	                    		<div class="texto_down">
	                    			<h2>Contactanós</h2>
	                    			<p>Si quieres solicitar un presupuesto, si necesitas más información, puedes ponerte en contacto con nosotros</p>
	                    		</div>
                    		</a>
                    	</li>
                    </ul>
				</div>
            </div>
		</div>	
<!-- Bloque de estadisticas sobre la empresa -->
		<div class="main inner-block">
			<h2>Te ayudamos a encontrar tu caminos</h2>
			<p class="centrado">Resolvemos problemas reales y nuestros alumnos vuelven.</p>
			<div class="cajaEstadisticas">
				<ul>
					<li>
						<h3 class="cifras">2000</h3>
						<p class="textoInfo">Resolvemos problemas</p>
					</li>
					<li>
						<h3 class="cifras">100</h3>
						<p class="textoInfo">cursos y seminarios</p>
					</li>
					<li>
						<h3 class="cifras">3200</h3>
						<p class="textoInfo">asesoramientos</p>
					</li>
				</ul>
			</div>
		</div>
		<!-- Bloque de nuestros cursos -->
		<div class="main inner-block">
			<div class="info-box row">
				<h2>Nuestros cursos</h2>
				<div class="cursoPresentacion">
					<h3 class="presenciales">Cursos presenciales</h3>
					<div class="imagenUp">
						<img src="img/index/cursoPresencial400x202.jpg" alt=""/>
					</div>
					<div class="infoCurso row">
						<div class="texto">
							<p>Ven a nuestras oficinas, estamos esperandote. Por la mañana, tarde o fines de semana.</p>
							<a class="presenciales" href="cursosPresenciales.php" title="Ver curso">Ver curso</a>
						</div>
						<div class="fechaCurso">
							<p>Comienzo</p>
							<h4>Abril</h4>
							<span>Modalidad presencial</span>
						</div>

					</div>
				</div>
				<div class="cursoPresentacion">
					<h3 class="online">Cursos online</h3>
					<div class="imagenUp">
						<img src="img/index/cursoPresencial400x202.jpg" alt=""/>
					</div>
					<div class="infoCurso row">
						<div class="texto">
							<p>Haz los cursos a tu ritmo, sin horarios. Gran variedad. Tú decides cuando!!</p>
							<a class="online" href="#" title="Ver curso">Ver curso</a>
						</div>
						<div class="fechaCurso">
							<p>Comienzo</p>
							<h4>Todo el año</h4>
							<span>Modalidad online</span>
						</div>

					</div>
				</div>
				<div class="cursoPresentacion">
					<h3 class="personalizados">Cursos personalizados</h3>
					<div class="imagenUp">
						<img src="img/index/cursoPresencial400x202.jpg" alt=""/>
					</div>
					<div class="infoCurso row">
						<div class="textoSinfecha">
							<p>Necesitas conocimiento sobre un aspecto concreto en el mundo de la web. Nosotros te impartimos en curso. Formamos a tus empleados, en aquello que necesitan. </p>
							<a class="personalizados" href="#" title="Ver curso">Ver curso</a>
						</div>
					</div>
				</div>
			</div>
		</div>	

<!-- Proximamente en nuestro centro -->
		<div class="main inner-block-alternative">
			<div class="info-box row">
				<h2>Proximamente en nuestro centro</h2>
				<div class="formularioIndex">
					<h3>Encuentra los cursos</h3>
					<form>
						<label class="sr-only" for="nombreCurso">Nombre del curso</label>
						<input type="text" id="nombreCurso" value="Nombre del curso">
						<div class="contenedor_Izq">
							<label for="modalidad">Modalidad</label>
							<select id="modalidad" class="">
			                    <option>Personalizados</option>
			                    <option>Online</option>
			                    <option>Presenciales</option>
			                    <option>Seminarios</option>
	                		</select>
                		</div>
                		<div class="contenedor_drcha">
						<label for="fechas">Fechas</label>
						<select id="fechas" class="">
		                    <option>Enero</option>
		                    <option>Febrero</option>
		                    <option>Marzo</option>
		                    <option>Abril</option>
		                    <option>Mayo</option>
		                    <option>Junio</option>
		                    <option>Julio</option>
		                    <option>Agosto</option>
		                    <option>Septiembre</option>
		                    <option>Octubre</option>
		                    <option>Noviembre</option>
		                    <option>Diciembre</option>
                		</select>
                	</div>
						<input type="submit" value="Buscar" name="enviar">

					</form>
				</div>
				<div class="asesoramientoDcha">
					<h3>Asesoramiento web sobre...</h3>
					<div class="bloqueIzq">
						<a href="asesoramiento.php" title="Asesoramiento sobre responsive Desing">
							<img src="img/index/asesoramientoA_278x242.jpg" alt=""/>
							<div class="textoDown">
								<p>Responsive Desing</p>
							</div>
						</a>
					</div>
					<div class="bloqueDcha">
						<a href="asesoramiento.php" title="Asesoramiento sobre prototipado en la web">
							<img src="img/index/asesoramientoB_278x242.jpg" alt=""/>
							<div class="textoDown">
								<p>Prototipado en la web</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
<?php include("include/inc_6_footer_template.php") ?>
		
