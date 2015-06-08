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
        <link rel="shortcut icon" href="../img/favicon.png" type="image/png" />
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
                                    <a title="Area privada" href="../accederLogin.php">Area privada</a>
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

                            <li class="current">
                                <a title="Curso actual" href="perfilUsuario_cursoActual.php">Curso actual</a>
                            </li>

                            <li class="">
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
                    <div class="main inner-block tab2">
                        <div class="main inner-block" id="mainContainer">
                            <!--CARGAMOS LA INFORMCION DEL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->

                            <?php
                            include('../areaprivada/openDB.php');

                            /* ------------------------------------------------------------------------------------------COMPROBAMOS EL CURSO ACTUAL Y QUE NO ESTÉ ACABADO--------------------------------------------- */
                            //select * from curso where idCurso in (select Curso_idCurso from alumno_has_curso where curso.idCurso = alumno_has_curso.Curso_idCurso and Alumno_idAlumno=13)
                            $tiene_curso = mysql_query("SELECT * "
                                    . "FROM curso "
                                    . "WHERE idCurso IN ("
                                    . "SELECT Curso_idCurso "
                                    . "FROM alumno_has_curso "
                                    . "WHERE curso.idCurso = alumno_has_curso.Curso_idCurso "
                                    . "AND Alumno_idAlumno=" . $_SESSION['idAlumno'] . " "
                                    . "AND done=0)", $con);

                            $row = mysql_fetch_array($tiene_curso);

                            if (mysql_num_rows($tiene_curso) == 1) {

                                //Almacenamos los datos del curso en variables de sesión
                                $idCurso = $row['idCurso'];
                                $nombreCurso = $row['nombre'];
                                $lenguaje = $row['lenguaje'];
                                $duracion = $row['duracion'];
                                $descripcion = $row['descripcion'];
                                $_SESSION['inscribed'] = TRUE;

                                //CONSULTA MODULOS DEL CURSO
                                $modulos = mysql_query("SELECT * "
                                        . "FROM modulo "
                                        . "WHERE Curso_idCurso =" . $idCurso, $con);
                                ?> <!-- SI ENCUENTRA EN LA BASE DE DATOS -->
                                <div class="headerMod">
                                    <div class="titleCursoImg">
                                        <img src="../img/iconos/areaPrivada/icono_titulo_curso.png" />
                                    </div>
                                    <h3><?php echo $nombreCurso; ?></h3>
                                    <div class="boton">
                                        <a href="cursoHecho.php?id=<?php echo $idCurso ?> ">Finalizar curso</a>
                                    </div>
                                    <h4 class="paddingLeft"><?php echo $descripcion; ?></h4>

                                </div>

                                <div class="bloqueIzq">
                                    <div class="info-box">
                                        <div class="tablaModulos paddingLeft"> 
                                            <span id="tituloModulo" class="letraGrande">Módulos del curso</span>
                                            <ul class="lista_modulos">
                                                <?php
                                                if (mysql_num_rows($modulos) > 0) {
                                                    $controlModulo = 1;
                                                    while ($rowmodulo = mysql_fetch_array($modulos)) {
                                                        ?>  
                                                        <li>
                                                            <div class="modulo">
                                                                <div class="imagenMod">
                                                                    <img src="../img/iconos/areaPrivada/icono_modulo.png"/>
                                                                </div>

                                                                <p><?php echo $rowmodulo['nombre']; ?></p>
                                                                <input class="botonAcceder" type="button" name="tab<?php echo $controlModulo ?>d" value="Mostrar módulo"/>
                                                            </div> 
                                                        </li>
                                                        <?php
                                                        $controlModulo = $controlModulo + 1;
                                                    }//end_while
                                                } else {
                                                    //SI NO ESTA EN LA BASE DE DATOS
                                                    header("Location: ../cursosOnline.php");
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                                <div class="bloqueDcha">
                                    <div class="contentd" id="moduloScroll">
                                        <?php
                                        if (isset($_GET["mensaje_enviado"])) {
                                            ?>
                                            <script>alert('Se ha enviado su mensaje al profesor satisfactoriamente')</script>    
                                            <?php
                                        }
                                        if (isset($_GET["withoutarchive"])) {
                                            ?>
                                            <script>alert('El archivo subido no es de un tipo permitido o es demasiado grande.')</script>    
                                            <?php
                                        } else if (isset($_GET['notallfields'])){
                                            echo "<script>alert('Debe rellenar el titulo y su correo')</script>";
                                        }
                                        ?>
                                        <?php
                                        $modulos = mysql_query("SELECT * "
                                                . "FROM modulo "
                                                . "WHERE Curso_idCurso =" . $idCurso, $con);

                                        if (mysql_num_rows($modulos) > 0) {
                                            $controlModulo = 1;
                                            while ($rowmodulo = mysql_fetch_array($modulos)) {
                                                echo ''
                                                ?>  
                                                <div id="tab<?php echo $controlModulo ?>d" class="descripcionModulo">
                                                    <span id="tituloModulo"><?php echo $rowmodulo['nombre']; ?></span>

                                                    <div id="contenedorDescripcion">
                                                        <div class="modulo" style="border:none;">
                                                            <div class="imagenMod">
                                                                <img src="../img/iconos/areaPrivada/descargaPdf.png"/>
                                                            </div>

                                                            <a target="_blank" href="../pdf/<?php echo $idCurso ?>/<?php echo $rowmodulo['apuntes']; ?>.pdf"> Descargar temario</a>
                                                        </div> 


                                                        <div class="modulo" style="border:none;">
                                                            <div class="imagenMod">
                                                                <img src="../img/iconos/areaPrivada/descargaEjercicios.png"/>
                                                            </div>

                                                            <a target="_blank" href="../pdf/<?php echo $idCurso ?>/<?php echo $rowmodulo['ejercicios']; ?>.pdf"> Descargar ejercicios</a>
                                                        </div> 

                                                        <div id="formularioEjercicios">
                                                            <?php
                                                            include("./openDB.php");

                                                            $query = mysql_query("select * from usuario where idAlumno = (select Alumno_idAlumno from profesor_has_curso where profesor_has_curso.Alumno_idAlumno = usuario.idAlumno and profesor_has_curso.Curso_idCurso=" . $idCurso . ")");

                                                            $row = mysql_fetch_array($query);

                                                            if ($query) {
                                                                $idProfe = $row['idAlumno'];
                                                                $nombreProfe = $row['nombre'];
                                                                $apellidosProfe = $row['apellidos'];
                                                                $correoProfe = $row['login'];
                                                            }
                                                            ?>

                                                            <form name="mp" method="POST" action="enviarMensaje.php" enctype="multipart/form-data">
                                                                <legend>Formulario de envio</legend>
                                                                <label for="titulo">Módulo: </label>
                                                                <input type="text" readonly id="title" name="title" required size="30" value="<?php echo $rowmodulo['nombre'] ?>"/>

                                                                <label for="emisor">Alumno: </label>
                                                                <input type="text" readonly id="emisor" name="login" required value="<?php echo $_SESSION['login']; ?>"/>

                                                                <input style="display:none" id="receptor" name="receptor" value="<?php echo $idProfe ?>"/>

                                                                <label for="mensaje">Mensaje</label>
                                                                <textarea id="mensaje" name="mensaje"></textarea>

                                                                <label for="archivo">Archivo: </label>
                                                                <div class="fileUpload">
                                                                    <input class="guarda" type="file" id="archivo" name="archivo"/>
                                                                </div>      


                                                                <input type="submit" name="enviarArchivo" style="float:right" value="Enviar"/>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $controlModulo = $controlModulo + 1;
                                            }//end_while
                                        } else {
                                            //SI NO ESTA EN LA BASE DE DATOS
                                            header("Location: ../cursosOnline.php");
                                        }
                                        ?>

                                    </div>    
                                </div>
                                <?php
                            } else {
                                echo '<p><a href="../nuestrosCursos.php" title="No estás inscrito a ningun curso">No estás inscrito en ningún curso. <br/> ! Apúntate aquí !</a> </p>';
                            }
                            ?>

                        </div>    
                    </div>



                <?php } else { ?> 

                    <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->


                    <!-- Estructura del Menu secundario. -->

                    <div class="menu_secundario profesor">
                        <div class="contenedor_menu_secundario">
                            <ul class="tabs">
                                <li class="ladop">

                                </li>
                                <li>
                                    <a title="Perfil del usuario" href="perfilUsuario.php">Tu perfil</a>
                                </li>
                                <li class="current">
                                    <a title="Listado de alumnos" href="perfilUsuario_cursoActual.php">Listado cursos de <?php echo $_SESSION['nombre'] ?></a>
                                </li>
                                <li class="">
                                    <a title="Notificaciones" href="perfilUsuario_cursoHecho.php">Notificaciones</a>
                                </li>
                                <li class="ladop">

                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->


                    <!-- CURSO ACTUAL -->
                    <div class="content profesor">
                        <div class="main inner-block tab2">
                            <div class="main inner-block" id="mainContainer">
                                <!--CARGAMOS LA INFORMCION DEL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->

                                <?php
                                include('../areaprivada/openDB.php');

                                $curso = mysql_query("SELECT * "
                                        . "FROM curso "
                                        . "WHERE idCurso = ("
                                        . "SELECT Curso_idCurso "
                                        . "FROM profesor_has_curso "
                                        . "WHERE curso.idCurso = profesor_has_curso.Curso_idCurso "
                                        . "AND Alumno_idAlumno=" . $_SESSION['idAlumno'] . ")", $con);

                                $rowCurso = mysql_fetch_array($curso);

                                if (mysql_num_rows($curso) == 1) {
                                    //Almacenamos los datos del curso en variables de sesión
                                    $idCurso = $rowCurso['idCurso'];
                                    $nombreCurso = $rowCurso['nombre'];
                                    $lenguaje = $rowCurso['lenguaje'];
                                    $duracion = $rowCurso['duracion'];
                                    $descripcion = $rowCurso['descripcion'];

                                    $tiene_alumnos = mysql_query("SELECT nombre, apellidos "
                                            . "FROM usuario "
                                            . "WHERE idAlumno IN ("
                                            . "SELECT alumno_has_curso.Alumno_idAlumno "
                                            . "FROM alumno_has_curso , profesor_has_curso "
                                            . "WHERE alumno_has_curso.Curso_idCurso = profesor_has_curso.Curso_idCurso "
                                            . "AND done=0)", $con);
                                    ?>

                                    <?php
                                    if (mysql_num_rows($tiene_alumnos) > 0) {
                                        ?>
                                        <h3 class="titListado">Listado de alumnos de <?php echo $nombreCurso ?></h3>
                                        <ul class="listado">
                                            <?php
                                            for ($i = 0; $i < mysql_num_rows($tiene_alumnos); $i++) {
                                                $row = mysql_fetch_array($tiene_alumnos);
                                                ?>
                                                <li>
                                                    <?php
                                                    echo $row['nombre'] . ' ';
                                                    echo $row['apellidos'];
                                                    ?>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    } else {
                                        ?>
                                        <p class="msj_no_inscrito"> No hay alumnos inscritos en el curso. </p>
                                        <?php
                                    }
                                } else { //SI EL PROFESOR NO TIENE UN CURSO ASIGNADO
                                    ?>
                                    <p class="msj_no_inscrito"> No estás asociado a ningún curso. </p>
                                    <?php
                                }
                                ?>
                            </div>  
                        </div>

                        <!-- MIS CURSOS -->

                    <?php } ?>
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
