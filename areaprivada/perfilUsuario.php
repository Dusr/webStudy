<?php include("../include/inc_1_head_inicio_areaprivada.php") ?>

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

<?php include("../include/inc_3_headerTemplate_subcarpeta.php") ?>
<?php include("../include/inc_4_nav_inicio_subcarpeta.php") ?> 

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
<?php include("../include/inc_5_nav_final.php") ?>

<?php include("../include/inc_opcional_breadcrumb_Inicio_subcarpeta.php") ?>

<li>
    <a title="Area privada" href="../accederLogin.php.php">Area privada</a>
</li>

</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="../images/left-white-arrow.png">
        </a>
    </div>

    <h2>Bienvenido <?php echo $_SESSION['nombre'] ?></h2>
    <?php include("../include/inc_opcional_breadcrumb_final_subcarpeta.php") ?>


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
                    <li class="">
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
                                        <img class="flecha" src="../img/iconos/flechaAbajo_roja.png">
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
                            /*                             * **************************************************    AVATAR   **************************************************************************** */

                            if ($_SESSION['avatar'] != NULL) {
                                ?>
                                <img width='240' height='240' src='avatares/<?php echo $_SESSION['avatar'] ?>' alt='Avatar'>
                                <?php
                            } else {
                                ?>
                                <img width='240' height='240' src='avatares/avatar_1.png' alt='Avatar por defecto'>
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
                    <!------------------------------------------------------------------------------------------CARGAMOS LA INFORMCION DEL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->

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
                                <a href="cursoHecho.php?id=<?php echo $idCurso ?> ">Pincha aqui cuando acabes el curso</a>
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
                                                        <img src="../img/iconos/cursosCatalogo/modulos76x76_areaprivada.png"/>
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
                                                        <img src="../img/iconos/cursosCatalogo/modulo_pdf76x76.png"/>
                                                    </div>

                                                    <a target="_blank" href="../pdf/<?php echo $idCurso ?>/<?php echo $rowmodulo['apuntes']; ?>.pdf"> Temario para descargar</a>
                                                </div> 


                                                <div class="modulo" style="border:none;">
                                                    <div class="imagenMod">
                                                        <img src="../img/iconos/cursosCatalogo/modulo_ejercicios76x76.png"/>
                                                    </div>

                                                    <a target="_blank" href="../pdf/<?php echo $idCurso ?>/<?php echo $rowmodulo['ejercicios']; ?>.pdf"> Descargar ejercicios</a>
                                                </div> 

                                                <div id="formularioEjercicios">
                                                    <?php
                                                    if (isset($_GET["mensaje_enviado"])) {
                                                        ?>
                                                        <script>alert('Se ha enviado su mensaje al profesor satisfactoriamente')</script>    
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    include("./openDB.php");
                                                   
                                                    $query = mysql_query("select * from usuario where idAlumno = (select Alumno_idAlumno from profesor_has_curso where profesor_has_curso.Alumno_idAlumno = usuario.idAlumno and profesor_has_curso.Curso_idCurso=".$idCurso.")");
                                                    
                                                    $row = mysql_fetch_array($query);
                                                    
                                                    if($query){
                                                        $idProfe = $row['idAlumno'];
                                                        $nombreProfe = $row['nombre'];
                                                        $apellidosProfe = $row['apellidos'];
                                                        $correoProfe = $row['login'];
                                                    }
                                                    
                                                    ?>

                                                    <form name="mp" method="POST" action="enviarMensaje.php">
                                                        <legend>Formulario de envio</legend>
                                                        <label for="titulo">Módulo: </label>
                                                        <input type="text" disabled="" id="titulo" name="titulo" required size="30" value="<?php echo $rowmodulo['nombre'] ?>"/>

                                                        <label for="emisor">Alumno: </label>
                                                        <input type="text" disabled="" id="emisor" name="emisor" required value="<?php echo $_SESSION['nombre']; ?>"/>

                                                        <input style="display:none" id="receptor" name="receptor" value="<?php echo $idProfe?>"/>

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

        <div class="menu_secundario">
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
                                        <img class="flecha" src="../img/iconos/flechaAbajo_roja.png">
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
                            /*                             * **************************************************    AVATAR   **************************************************************************** */

                            if ($_SESSION['avatar'] != NULL) {
                                ?>
                                <img width='240' height='240' src='avatares/<?php echo $_SESSION['avatar'] ?>' alt='Avatar'>
                                <?php
                            } else {
                                ?>
                                <img width='240' height='240' src='avatares/avatar_1.png' alt='Avatar por defecto'>
                                <?php
                            }
                            ?>

                        </div>    
                        <div class="avatar">
                            <p>Cambiar avatar</p>
                        </div>

                        <input class="guarda" name="avatar" type="file"/>
                    </div>
                </form>
            </div>

            <!-- CURSO ACTUAL -->
            <div id="tab2" class="main inner-block">
                <div class="main inner-block" id="mainContainer">
                    <!------------------------------------------------------------------------------------------CARGAMOS LA INFORMCION DEL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->

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
                            <h4 class="titListado">Listado de alumnos del <?php echo $nombreCurso ?></h4>
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
                    <a href='#'>Tiene un mensaje de: <?php
                        if (isset($_GET["id"])) {
                            $sql = mysql_query("SELECT * FROM mensajes WHERE id = '$_GET[id]' and '$_POST[idAlumno]'='$_SESSION[idAlumno]'");
                            $fetch = mysql_fetch_array($sql);
                            echo $fetch[emisor]
                            ?></a><?php } ?>
                </div>
                <div class="notificacion" name="notificacion">
                    <?php
                    if (isset($_GET["borrar"])) {
                        mysql_query("DELETE FROM mensajes WHERE id = '$_GET[borrar]'");
                        echo "<script>alert('El mensaje número $_GET[borrar] ha sido eliminado'); document.location=('perfilUsuario.php')</script>";
                    }
                    ?>
                    <?php
                    if (isset($_GET["id"])) {
                        $sql = mysql_query("SELECT * FROM mensajes WHERE id = '$_GET[id]' and '$_POST[idAlumno]'='$_SESSION[idAlumno]'");
                        $fetch = mysql_fetch_array($sql);
                        echo"<table><tr><td>
	                  De: $fetch[emisor]
	                  </td></tr><tr><td>
	                  Para: $fetch[receptor]
	                  </td></tr><tr><td>
	                  Mensaje: $fetch[mensaje]
	                  </td></tr></table><hr><a href='perfilUsuario.php?borrar=$fetch[id]'>Eliminar</a>";
                    } else {
                        ?>
                        <?php
                        $query = mysql_query("SELECT * FROM mensajes where receptor = '$_SESSION[login]' order by id ASC ");
                        if (mysql_num_rows($query)) {
                            if ($row = mysql_fetch_array($query)) {
                                echo "<table><tr><td>
	                  De: $row[emisor]
	                  </td></tr><tr><td>
	                  Para: $row[receptor]
	                  </td></tr><tr><td>
                          Mensaje: $row[mensaje]
	                  </td></tr></table>
				
	                  ";
                            }
                        } else {
                            echo'No hay mensajes<hr>';
                        }
                        ?>
                    <?php } ?>
                </div>
            </div>
        </div>



    <?php } ?>

    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("../include/inc_6_footer_template_subcarpeta.php") ?>
