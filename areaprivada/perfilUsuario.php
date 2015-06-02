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
                        <ul id="tabs">
                            <li class="">
                                <a title="Ir a tu perfil" name="tab1" href="/">Tu perfil</a>
                            </li>

                            <li class="medio">
                                <a title="Ir al curso actual" name="tab2" href="#tab2">Curso actual</a>
                            </li>

                            <li class="">
                                <a title="Mis cursos" name="tab3" href="#tab3">Mis cursos finalizados</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->


                <div class="content">
                    <!-- MI PERFIL -->
                    <div id="tab1" class="main inner-block">
                        <form action="actualizarUsuario.php" method="POST" enctype="multipart/form-data">
                            <div id="colIzq">
                                <div id="userData">
                                    <div id="cabRegistro">
                                        <p>Mis Datos</p>
                                    </div>
                                    <div id="camposRegistro">
                                        <div class="left">
                                            <label for="nombre">Nombre:</label>
                                            <label for="apellidos">Apellidos:</label>
                                            <label for="correo">Email:</label>
                                            <label for="direccion">Dirección:</label>
                                            <!--                                <label for="direccion">Contraseña Antigua:</label>
                                                                            <label for="direccion">Contraseña Nueva:</label>-->
                                        </div>
                                        <div class="inputs">
                                            <input type="text" id="nombre" name="nombre" value="<?php echo $_SESSION['nombre']; ?>"/>
                                            <input type="text" id="apellidos" name="apellidos" value="<?php echo $_SESSION['apellidos']; ?>" />
                                            <input type="text" id="correo" name="correo" value="<?php echo $_SESSION['correo']; ?>" />
                                            <input type="text" id="direccion" name="direccion" value="<?php echo $_SESSION['direccion']; ?>" />
            <!--                                <input type="password" id="pass" name="oldpass" value=""/>
                                            <input type="password" id="rpass" name="newpass"/>-->
                                        </div>
                                        <dl class="faqs">
                                            <dt class="pregunta">Cambiar contraseña
                                            <div class="flechaAbajo">
                                                <img class="flecha" src="../img/iconos/flechaAbajo_roja.png"/>
                                            </div>
                                            </dt>
                                            <div id="cambiarContrasena">
                                                <div class="left">
                                                    <label for="direccion">Contraseña Antigua:</label>
                                                    <label for="direccion">Contraseña Nueva:</label>
                                                </div>
                                                <div class="inputs2">
                                                    <input type="password" id="pass" name="oldpass" value="<?php echo $_SESSION['pass']; ?>"/>
                                                    <input type="password" id="rpass" name="newpass" value="<?php echo $_SESSION['pass']; ?>"/>
                                                </div>
                                            </div>
                                        </dl>
                                        <div class="boton_enviar">
                                            <input type="submit" name="Guardar" value="Guardar">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                            if (isset($_GET['modified'])) {
                                ?> 
                                <script>alert('Se han modificado los datos del usuario')</script>
                                <!--<span style="color:#00cc00; font-weight: bold;">Se han modificado los datos</span>-->
                                <?php
                            }
                            ?><?php
                            if (isset($_GET['errormodificar'])) {
                                ?> 
                                <script>alert('La contraseña antigua no es correcta')</script>
                                <!--<span style="color:#00cc00; font-weight: bold;">Se han modificado los datos</span>-->
                                <?php
                            }
                            ?>
                            <div id="colDcha">

                                <div id="avatar">
                                    <?php
                                    /*                                     * **************************************************    AVATAR   **************************************************************************** */

                                    if ($_SESSION['avatar'] != NULL) {
                                        ?>
                                        <img width='240' height='240' src='avatares/<?php echo $_SESSION['avatar'] ?>' alt='Avatar'/>
                                        <?php
                                    } else {
                                        ?>
                                        <img width='240' height='240' src='avatares/avatar_1.png' alt='Avatar por defecto'/>
                                        <?php
                                    }
                                    ?>

                                </div>    

                                <div class="fileUpload">
                                    <input class="guarda" name="avatar" type="file"/>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- CURSO ACTUAL -->
                    <div id="tab2" class="main inner-block">
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
                                                                <input type="text" readonly id="emisor" name="emisor" required value="<?php echo $_SESSION['nombre']; ?>"/>

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
                                echo '<p><a href="../nuestrosCursos.php" title="No estás inscrito a ningun curso">No estás inscrito en ningún curso</a>. </p>';
                            }
                            ?>

                        </div>    
                    </div>

                    <!-- MIS CURSOS FINALIZADOS-->
                    <div id="tab3" class="main inner-block">
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
                </div>



            <?php } else { ?> 

                <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->


                <!-- Estructura del Menu secundario. -->

                <div class="menu_secundario profesor">
                    <div class="contenedor_menu_secundario">
                        <ul id="tabs">
                            <li class="">
                                <a title="Ir a tu perfil" name="tab1" href="/">Tu perfil</a>
                            </li>
                            <li class="">
                                <a title="Ir al curso actual" name="tab2" href="/">Listado cursos de <?php echo $_SESSION['nombre'] ?></a>
                            </li>
                            <li class="">
                                <a title="Mis cursos" name="tab3" href="/">Notificaciones</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->

                <!-- MI PERFIL -->
                <div class="content profesor">
                    <div id="tab1" class="main inner-block">
                        <form action="actualizarUsuario.php" method="POST" enctype="multipart/form-data">
                            <div id="colIzq">
                                <div id="userData">
                                    <div id="cabRegistro">
                                        <p>Mis Datos</p>
                                    </div>
                                    <div id="camposRegistro">
                                        <div class="left">
                                            <label for="nombre">Nombre:</label>
                                            <label for="apellidos">Apellidos:</label>
                                            <label for="correo">Email:</label>
                                            <label for="direccion">Dirección:</label>
                                            <!--                                <label for="direccion">Contraseña Antigua:</label>
                                                                            <label for="direccion">Contraseña Nueva:</label>-->
                                        </div>
                                        <div class="inputs">
                                            <input type="text" id="nombre" name="nombre" value="<?php echo $_SESSION['nombre']; ?>"/>
                                            <input type="text" id="apellidos" name="apellidos" value="<?php echo $_SESSION['apellidos']; ?>" />
                                            <input type="text" id="correo" name="correo" value="<?php echo $_SESSION['correo']; ?>" />
                                            <input type="text" id="direccion" name="direccion" value="<?php echo $_SESSION['direccion']; ?>" />
            <!--                                <input type="password" id="pass" name="oldpass" value=""/>
                                            <input type="password" id="rpass" name="newpass"/>-->
                                        </div>
                                        <dl class="faqs">
                                            <dt class="pregunta">Cambiar contraseña.
                                            <div class="flechaAbajo">
                                                <img class="flecha" src="../img/iconos/flechaAbajo_azul.png"/>
                                            </div>
                                            </dt>
                                            <div id="cambiarContrasena">
                                                <div class="left">
                                                    <label for="direccion">Contraseña Antigua:</label>
                                                    <label for="direccion">Contraseña Nueva:</label>
                                                </div>
                                                <div class="inputs2">
                                                    <input type="password" id="pass" name="oldpass" value="<?php echo $_SESSION['pass']; ?>"/>
                                                    <input type="password" id="rpass" name="newpass" value="<?php echo $_SESSION['pass']; ?>"/>
                                                </div>
                                            </div>
                                        </dl>
                                        <div class="boton_enviar">
                                            <input type="submit" name="Guardar" value="Guardar">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                            if (isset($_GET['modified'])) {
                                ?> 
                                <script>alert('Se han modificado los datos del usuario')</script>
                                <!--<span style="color:#00cc00; font-weight: bold;">Se han modificado los datos</span>-->
                                <?php
                            }
                            ?><?php
                            if (isset($_GET['errormodificar'])) {
                                ?> 
                                <script>alert('La contraseña antigua no es correcta')</script>
                                <!--<span style="color:#00cc00; font-weight: bold;">Se han modificado los datos</span>-->
                                <?php
                            }
                            ?>
                            <div id="colDcha">

                                <div id="avatar">
                                    <?php
                                    /*                                     * **************************************************    AVATAR del profesor   **************************************************************************** */

                                    if ($_SESSION['avatar'] != NULL) {
                                        ?>
                                        <img width='240' height='240' src='avatares/<?php echo $_SESSION['avatar'] ?>' alt='Avatar'/>
                                        <?php
                                    } else {
                                        ?>
                                        <img width='240' height='240' src='avatares/avatar_1.png' alt='Avatar por defecto'/>
                                        <?php
                                    }
                                    ?>

                                </div>    
                                <div class="fileUpload">
                                    <input class="guarda" name="avatar" type="file"/>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- CURSO ACTUAL -->
                    <div id="tab2" class="main inner-block">
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
                                    <h4 class="titListado">Listado de alumnos de <?php echo $nombreCurso ?></h4>
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
                                    <p class="msj_no_inscrito"> No hay alumnos inscritos en el curso. </p>;
                                    <?php
                                }
                            } else { //SI EL PROFESOR NO TIENE UN CURSO ASIGNADO
                                ?>
                                <p class="msj_no_inscrito"> No estás asociado a ningún curso. </p>;
                                <?php
                            }
                            ?>
                        </div>  
                    </div>

                    <!-- MIS CURSOS -->
                    <div id="tab3" class="main inner-block">
                        <div class='notificaciones'>
                            <div class="boton_mensaje">
                                Sus mensajes:
                                <ul>
    <?php
    
    $qry = "SELECT id, nombre, titulo, tipo FROM archivos where receptor=".$_SESSION['idAlumno'];
    $res = mysql_query($qry);
    
    while($fila = mysql_fetch_array($res)){
        ?>
<!--                <li><?php echo $fila['nombre'] ?></li>
                <li><?php echo $fila['titulo'] ?></li>
                <li><a href="descargarArchivo.php?id=<?php echo $fila['id']?>">Descargar</a></li>
                <br>-->
          <?php 
    
    $mensajes = mysql_query("select * from mensaje where receptor=" . $_SESSION['idAlumno']);

    while ($filaNotificacion = mysql_fetch_array($mensajes)) {
        ?>
                
                <li><strong>Alumno:</strong> <?php echo $filaNotificacion['emisor'] ?></li>
                <li><strong>Módulo:</strong><?php echo $filaNotificacion['titulo'] ?></li>
                <li><strong>Mensaje:</strong><?php echo $filaNotificacion['mensaje'] ?></li>
                <li><a href="descargarArchivo.php?id=<?php echo $fila['id']?>">Descargar</a></li>
                
                <br>
     <?php
    }    }
    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="notificacion" name="notificacion">

                        </div>
                    </div>
                </div>


<?php } ?>

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
