<?php session_start() ?>
<?php include("include/inc_1_head_inicio.php") ?>

<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>
<title>Inicio | Webstudy.com</title>
<!-- LINK hojas de CSS -->
<style>
    .destacado_principal.slider > .destacado {
    display: none;
}
</style>

<?php include("include/inc_2_head_final.php")?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<nav class="menu_principal">
    <div id="contenedor_menu_principal">
        <ul>
            <li class="item-1 activo">
                <a title="Home" href="index.php">Home</a>
            </li>

            <li class="item-2">
                <a title="Ir a conócenos" href="conocenos.php">Conócenos</a>

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
        <div class="destacado_principal slider" aria-valuemax="3" aria-valuenow="1" aria-valuemin="1" role="slider">

   		<div class="destacado">
<!--        		<div class="imagen">

             Imagen del slider 
                        <img alt="" src="img/imgSlider/slider_home.jpg"/>

                        </div>-->
                </div>
            
            <!--SLIDER-->
             <div class="slider_botones">
                <a href="javascript:void(0);" class="pause">Presentación en marcha, pulsar para pausar</a>
                <a href="javascript:void(0);" class="play">Presentación en pausa, pulsar para reanudar</a>
                <ul>
                    <li><a href="javascript:void(0);" class="slider_nav sn1"><span>Ir a la diapositiva 1</span></a></li>
                    <li><a href="javascript:void(0);" class="slider_nav sn2"><span>Ir a la diapositiva 2</span></a></li>
                    <li><a href="javascript:void(0);" class="slider_nav sn3"><span>Ir a la diapositiva 3</span></a></li>
                </ul>
            </div>
            <ul>
                <li class="slide1">
                    <div class="destacado">
                        <div class="imagen">
                            <img alt="" src="img/imgSlider/slider_home_1.png">
                        </div>
                    </div>
                </li>
                <li class="slide2">
                    <div class="destacado">
                        <div class="imagen">
                            <img alt="" src="img/imgSlider/slider_home_2.png">
                        </div>
                    </div>
                </li>
                <li class="slide3">
                    <div class="destacado">
                        <div class="imagen">
                            <img alt="" src="img/imgSlider/slider_home_3.png">
                        </div>
                    </div>
                </li>
            </ul>
    <script type="text/javascript">initSlider();</script>
            <!--FIN DEL SLIDER-->
        </div>
            <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->
            <div class="contenedor top-block"> 
                <div class="info-box">
                    <div class="row">
                        <ul>
                            <li>
                                <a href="conocenos.php" title="Conócenos">
                                    <div class="iconoImg">
                                        <img src="img/iconos/iconosHome/home_conocenos84x84.png" alt="Conócenos"/>
                                    </div>
                                    <div class="texto_down">
                                        <h2>Conócenos</h2>
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
                                            No te preocupes, en Webstudy te asesoramos.</p>
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
                                        <p>Quieres saber más de como trabajamos, pincha aquí e intentaremos aclarar tus dudas. </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="contacto.php" title="Contáctanos">
                                    <div class="iconoImg">
                                        <img src="img/iconos/iconosHome/home_contacto84x84.png" alt="Contáctanos"/>
                                    </div>
                                    <div class="texto_down">
                                        <h2>Contáctanos</h2>
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
                            <p class="news">Suscríbete a nuestro boletín: </p>
                            <div class="caja_newsletter_select"><a data-role-id="newsletter" title="Suscribirse a nuestra newsletter" class="boton muestraPopup" href="#">Suscribirte</a></div>
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
                            <img src="img/index/cursoPresencial400x202_2.jpg" alt=""/>
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
                            <img src="img/index/cursoonline400x202_2.jpg" alt=""/>
                        </div>
                        <div class="infoCurso row">
                            <div class="texto">
                                <p>Haz los cursos a tu ritmo, sin horarios. Gran variedad. Tú decides cuando!!</p>
                                <a class="online" href="cursosOnline.php" title="Ver curso">Ver curso</a>
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
                            <img src="img/index/cursopersonalizado400x202_2.jpg" alt=""/>
                        </div>
                        <div class="infoCurso row">
                            <div class="textoSinfecha">
                                <p>Necesitas conocimiento sobre un aspecto concreto en el mundo de la web. Nosotros te impartimos en curso. Formamos a tus empleados, en aquello que necesitan. </p>
                                <a class="personalizados" href="cursosPresenciales.php" title="Ver curso">Ver curso</a>
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
                        <form action="index.php#nombreCurso" method="post" name="form_buscador">
                            <label class="sr-only" for="nombreCurso">Nombre del curso</label>
                            <input type="text" id="nombreCurso" name="nombreCurso" value="Nombre del curso">
                            <div class="contenedor_Izq">
                                <label for="modalidad">Modalidad</label>
                                <select id="modalidad" name="modalidad" class="">
                                    <option value="todas"> Elige la modalidad</option>
                                    <option value="personaliz">Personalizado</option>
                                    <option value="online">Online</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="seminario">Seminario</option>
                                </select>
                            </div>
                            <div class="contenedor_drcha">
                                <label for="mes">Fechas</label>
                                <select id="mes" class="" name="mes_Select">
                                    <option value="todos">Elige el mes</option>
                                    <option value="enero">Enero</option>
                                    <option value="febrero">Febrero</option>
                                    <option value="marzo">Marzo</option>
                                    <option value="abril">Abril</option>
                                    <option value="mayo">Mayo</option>
                                    <option value="junio">Junio</option>
                                    <option value="julio">Julio</option>
                                    <option value="agosto">Agosto</option>
                                    <option value="Septiembre">Septiembre</option>
                                    <option value="octubre">Octubre</option>
                                    <option value="noviembre">Noviembre</option>
                                    <option value="diciembre">Diciembre</option>
                                </select>
                            </div>
                            <input type="submit" value="Buscar" class="texto_boton">
							<?php

								$DB_SERVER = 'localhost';

								$DB_NAME = 'webstudy';

								$DB_USER = 'project';

                                                                $DB_PASS = 'project';
								//Conexion con la base de datos
								$con = mysql_connect($DB_SERVER, $DB_USER, $DB_PASS)or die ("NO SE CONECTO CON EXITO"); 
								//print ("Conexion realizada"); 

								//Seleccionamos la base de datos
								mysql_select_db($DB_NAME,$con);

								mysql_query("SET NAMES 'UTF8'");
								//mysql_close ($con);

							?>
							<?php

									$busquedaSql="";                                       
									$nomCurso="";
									$mesFecha="";
									$modali_Curso="";
									
								   
									$nomCurso=$_POST['nombreCurso'];
									$modali_Curso=$_POST['modalidad'];
									$mesFecha=$_POST['mes_Select'];
									$sinResultado="";
									
								// consultas
								if ($nomCurso!="")
								{
								  //echo'<p>'.$nomCurso.'</p>';
								  $busquedaSql=mysql_query("select * from curso where nombre like '".mysql_real_escape_string($nomCurso)."'")or die (mysql_error());
								}
								if ($mesFecha!="" && $mesFecha!="todos")
								{
								   //echo'<p>'.$mesFecha.'</p>';
								  $busquedaSql=mysql_query("select * from curso where comienzoCurso like '".mysql_real_escape_string($mesFecha)."'") or die (mysql_error());
								  
								}
								
								if ($modali_Curso!="" && $modali_Curso!="todas")
								{
								  // echo'<p>'.$modali_Curso.'</p>';
								  $busquedaSql=mysql_query("select * from curso where modalidad like '".mysql_real_escape_string($modali_Curso)."'") or die (mysql_error());
								  
								}
							?>
                        </form>

                    </div>
                    <div class="asesoramientoDcha">
                        <h3>Asesoramiento web sobre...</h3>
                        <div class="bloqueIzq">
                            <a href="asesoramiento.php" title="Asesoramiento sobre responsive Design">
                                <img src="img/index/asesoramientoA_278x242.jpg" alt=""/>
                                <div class="textoDown">
                                    <p>Responsive Design</p>
                                </div>
                            </a>
                        </div>
                        <div class="bloqueDcha">
                            <a href="asesoramiento.php" title="Asesoramiento sobre prototipado en la web">
                                <img src="img/index/asesoramientob_278x242.jpg" alt=""/>
                                <div class="textoDown">
                                    <p>Prototipado en la web</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main inner-block-alternative">
                <div class="info-box row"> 
                    <div id="formRegister">
                        <table id="buscador"> 
                            <caption>Resultado de la busqueda</caption>
                            <tr> 
                                <th>Curso</th> 
                                <th>Modalidad</th> 
                                <th>Comienzo curso</th> 
                                <th>Enlace al curso</th> 
                            </tr> 
                            <?php
                           
                            if ($busquedaSql) {
                                while ($resultado = mysql_fetch_array($busquedaSql)) {
                                  
                                    if($resultado['modalidad']=='presencial')
                                    {
                                         echo '
                                             <tr> 
                                                <td class="left">' . $resultado['nombre'] . '</td> 
                                                <td>' . $resultado['modalidad'] . '</td> 
                                                <td>' . $resultado['comienzoCurso'] . '</td> 
                                             <td> <a href="cursosPresenciales.php" title="Cursos presenciales"> Ver curso </a></td>
                                         </tr>
                                        ';
                                    } 
                                    elseif($resultado['modalidad']=='seminario')
                                    {
                                         echo '
                                             <tr> 
                                                <td class="left">' . $resultado['nombre'] . '</td> 
                                                <td>' . $resultado['modalidad'] . '</td> 
                                                <td>' . $resultado['comienzoCurso'] . '</td>
                                             <td> <a href="cursosSeminarios.php" title="Seminarios gratuitos"> Ver curso </a></td>
                                         </tr>
                                        ';
                                    } 
                                    elseif($resultado['modalidad']=='online')
                                    {
                                         echo '
                                             <tr> 
                                                <td class="left">' . $resultado['nombre'] . '</td> 
                                                <td>' . $resultado['modalidad'] . '</td> 
                                                <td>' . $resultado['comienzoCurso'] . '</td>
                                             <td> <a href="cursosOnline.php" title="cursos Online"> Ver curso </a></td>
                                         </tr>
                                        ';
                                    } 
                                    elseif($resultado['modalidad']=='personaliz')
                                    {
                                        print($resultado);
                                          echo '
                                              <tr> 
                                                <td class="left">' . $resultado['nombre'] . '</td> 
                                                <td>' . $resultado['modalidad'] . '</td> 
                                                <td>' . $resultado['comienzoCurso'] . '</td>
                                             <td> <a href="cursosPersonalizados.php" title="cursos presenciales"> Ver curso </a></td>
                                         </tr>
                                        ';
                                    } 
                                    
                                    elseif($resultado['modalidad']==='todas' && $resultado['nombre']==="" && $resultado['comienzoCurso']==='todos' )
                                    {
                                        print($resultado);
                                         echo ' 
                                        <tr> 
                                          <td colspan="4">No hay resultados en la busqueda</td> 
                                        </tr>
                                         
                                    ';
                                    } 
                                    
                                }
                            }
                            else 
                            {
                                
                                echo ' 
                                        <tr> 
                                          <td colspan="4">No hay resultados en la busqueda</td> 
                                        </tr>
                                         
                                    ';
                            }
                            ?> 
                        </table>

                    </div>
                </div>
            </div>
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
		                    <li><a title="Javasript desde cero" href="cursosPresenciales/cursoJavascript.php">JavaScript desde cero</a></li>
		                    <li><a title="Curso sobre angular Js" href="cursosPresenciales/cursoAngularJS.php">Curso sobre angular Js</a></li>
		                    <li><a title="Seminarios gratuitos" href="cursosSeminarios.php">Seminarios gratuitos</a></li>
		                    <li><a title="Consultoría web" href="asesoramiento.php">Consultoría web </a></li>
		                    <li><a title="Cursos personalizados" href="cursosPersonalizados.php">Cursos personalizados</a></li>
		                </ul>
		        </div>
	            	<div class="footer_cajas">
		            <p>Enlaces </p>		               
		            <ul>
		               <li><a title="Inicio" href="index.php">Inicio</a></li>
		                <li><a title="Nosotros" href="conocenos.php">Nosotros</a></li>
		                <li><a title="Contacto" href="contacto.php">Contacto</a></li>
                                <li><a title="Preguntas frecuentes" href="soporteFaqs.php"> Preguntas frecuentes</a></li>
		                <li><a title="Condiciones de uso" href="/">Condiciones de uso</a></li>
                            </ul>
	            	</div>
	            	<div class="copyright">
	            		<span>© WebStudy. Reservados todos los derechos.</span>
	            	</div>
				</div>
			</footer>
		</div>
    
    
    <!--POPUP DE NEWSLETTERS-->
    <div id="newsletter" class="colorbox">
        <div class="popup-container">
            <p class="cabecera_newsletter">Newsletter de WebStudy
                <a title="Cerrar ventana emergente Newsletter" href="#">
                    <img src="img/iconos/cerrarFaq.png" title="Icono Cerrar ventana emergente" alt="Icono Cerrar ventana emergente" data-role-id="newsletter" class="cerrar2">
                </a>
            </p>
            <div class="newsletter_form">
               
                
                 <?php
                    if(!isset($_POST['correo'])) {




                ?>
                <p>Sigue informado de todo lo que pasa en WebStudy.com.</p>
                <p>Escoge lo que interesa de nuestra empresa:</p>
                <form action="index.php" method="post">
                        <ul class="lista_newsletter">
                            <li>
                                <input type="checkbox" id="checkbox1" name="newsletters[]" value="Presenciales" title="Boletín de cursos persenciales">
                                <label for="checkbox1">Boletín de cursos presenciales</label>
                            </li>
                            <li>
                                <input type="checkbox" id="checkbox2" name="newsletters[]" value="online"  title="Boletín de cursos online">
                                <label for="checkbox2">Boletín de cursos online</label>
                            </li>
                            <li>
                                <input type="checkbox" id="checkbox3" name="newsletters[]" value="seminarios"  title="Boletín de seminarios gratuitos">
                                <label for="checkbox3">Boletín de seminarios gratuitos</label>
                            </li>
                            <li>
                                <input type="checkbox" id="checkbox4" name="newsletters" value="novedades"  title="Boletín de novedades">
                                 <label for="checkbox4">Boletín de novedades</label>
                            </li>
                            <li>
                                <input type="checkbox" id="checkbox5" name="newsletters[]" value="todos"  title="Boletín de todos nuestros cursos">
                                <label for="checkbox5">Boletín de todos nuestros cursos</label>
                            </li>
                            <li>
                                <input type="checkbox" id="checkbox6" name="newsletters[]" value="noticias" title="Boletín últimas noticias">
                                <label for="checkbox6">Boletín últimas noticias</label>
                            </li>
                            <li class="last">
                                 <label for="correo">Email suscripción</label>
                                <input type="text" id="correo" name="correo">
                               
                            </li>
                        </ul>
                    <input type="submit" title="Enviar los boletines seleccionados" value="Enviar" class="boton">
                   
                </form>
                 <?php
                        } else {


                   $email_subject = "NEWSletters";             
                  
                   $checked = $_POST['newsletters']; 
                 $cuerpo = "Newsletters\n";
                 
                  $cuerpo .= "el mail es: " . $_POST["correo"] . "\n";
                  foreach($checked as $i) 
                    { 
                      $cuerpo .= "newsletters: " . $i . "\n"; 
                
                  }
                  
                      
                      @mail("contacto@midesvanweb.com",$email_subject,$cuerpo);
                     
                        //doy las gracias por el envio
                    echo "<div class='news_ok'>";
                    echo "<p>";
                    echo "Gracias, ya estás inscrito a nuestras newsletters.<br>
                    Si quieres darte de baja escribenós a :
                    </br> contacto@midesvanweb.com";
                    echo "</p>";
                    echo "</div>";
                    } 
                   ?> 
            </div>
        </div>
    </div>
</body>
</html>  

		
