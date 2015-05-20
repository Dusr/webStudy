<?php include("../include/inc_1_head_inicio_subcarpeta.php") ?>

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
        alert('No se a cambiado el avatar, inténtelo otra vez');
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
    <a title="Ir a conocenós" href="../conocenos.php">Conócenos</a>
</li>
<li class="item-3" >
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
    if ($_SESSION['profesor'] == 0){
 ?>
    <!-- Estructura del Menu secundario. -->

    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul id="tabs">
                <li class="">
                    <a title="Ir a tu perfil" name="tab1" href="/">Tu perfil</a>
                </li>
                <li class="">
                    <a title="Ir al curso actual" name="tab2" href="/">Curso actual</a>
                </li>
                <li class="">
                    <a title="Mis cursos" name="tab3" href="/">Mis cursos</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->

    <!-- MI PERFIL -->
    <div class="content">
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
                                    <img class="flecha" src="../img/iconos/flechaAbajo.png">
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
                        $con = mysqli_connect('localhost', 'project', 'project', 'webstudy');
                        $query = mysqli_query($con, "SELECT * from usuario");
                        if ($row = mysqli_fetch_assoc($query)) {
                            if ($row['avatar'] == NULL) { /*
                                echo "<img src='avatares/avatar_1.png' alt='Imagen por defecto'>";
                            } else { */
                                echo "<img width='240' height='240' src='avatares/".$_SESSION['avatar']."' alt='Avatar'>";
                            }
                        }
                        ?>
                        
                    </div>    
                    <div class="avatar">
                        
    <!--                   <input class="avatar" type="file" value="Cambiar avatar" name="avatar">-->
                        <p>Cambiar avatar</p>
                    </div>
                    <form method="post" action="actualizarUsuario.php" enctype="multipart/form-data">
                        <input class="guarda" name="avatar" type="file"/>
                    </form>

                    <!--                    <form method="post" action="actualizarUsuario.php" enctype="multipart/form-data">
                                            <input type="file" name="avatardavid"/>
                                            <input type="submit" name="formavatar" value="enviar avatar"/>
                                        </form>-->

                </div>
            </form>
        </div>

        <!-- CURSO ACTUAL -->
        <div id="tab2" class="main inner-block">
            <div class="main inner-block" id="mainContainer">
                <!------------------------------------------------------------------------------------------CARGAMOS LA INFORMCION DEL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->

                <?php
//                include("../areaprivada/openDB.php");
                include("../cursosOnline/cargarHTML.php");


                $tiene_curso = mysql_query("SELECT * "
                        . "FROM alumno_has_curso "
                        . "WHERE Alumno_idAlumno= " . $_SESSION['idAlumno'] . " and done=0", $con);

                /* ------------------------------------------------------------------------------------------COMPROBAMOS EL CURSO ACTUAL Y QUE NO ESTÉ ACABADO--------------------------------------------- */


//                $result = mysql_query("SELECT * "
//                        . "FROM alumno_has_curso "
//                        . "WHERE Alumno_idAlumno=".$_SESSION['idAlumno']."and done=0");


                if (mysql_num_rows($tiene_curso) == 1) {
                    ?> <!-- SI ENCUENTRA EN LA BASE DE DATOS -->
                    <div class="headerMod">
                        <h3><?php echo $nombreCurso; ?></h3>
                        <h4 class="paddingLeft"><?php echo $descripcion; ?></h4>
                    </div>

                    <div class="bloqueIzq">
                        <div class="info-box">
                        <div class="tablaModulos paddingLeft"> 
                            <span id="tituloModulo" class="letraGrande">Módulos del curso</span>
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
                        </div>
                    </div>
                    </div>



                    <div class="bloqueDcha">
                        <div class="contentd">

                            <?php
                            //CONSULTA MODULOS DEL CURSO
                            $modulos = mysql_query("SELECT * "
                                    . "FROM modulo "
                                    . "WHERE Curso_idCurso = 1", $con); 
                            
                            if (mysql_num_rows($modulos) > 0) {
                                $controlModulo = 1;
                                while ($rowmodulo = mysql_fetch_array($modulos)) {
                                    ?>  
                                    <div id="tab<?php echo $controlModulo ?>d" class="descripcionModulo">
                                        <span id="tituloModulo"><?php echo $rowmodulo['nombre']; ?></span>

                                        <div id="contenedorDescripcion">
                                            <div class="modulo" style="border:none;">
                                                <div class="imagenMod">
                                                    <img src="../img/iconos/cursosCatalogo/modulo_pdf76x76.png"/>
                                                </div>

                                                <a target="_blank" href="../pdf/HTMLBasico/<?php echo $rowmodulo['apuntes']; ?>.pdf"> Temario para descargar</a>
                                            </div> 


                                            <div class="modulo" style="border:none;">
                                                <div class="imagenMod">
                                                    <img src="../img/iconos/cursosCatalogo/modulo_ejercicios76x76.png"/>
                                                </div>

                                                <a href="../pdf/HTMLBasico/<?php echo $rowmodulo['ejercicios']; ?>.pdf"> Descargar ejercicios</a>
                                            </div> 

                                            <div id="formularioEjercicios">
                                                <form method="POST" action="">
                                                    <p>Formulario de envio</p>
                                                    <input type="text" disabled="" name="nombreModuloCorreo" required size="30" value="<?php echo $rowmodulo['nombre'] ?>"/>
                                                    <input type="text" disabled="" name="nombreAlumnoCorreo" required value="<?php echo $_SESSION['nombre']; ?>"/>
                                                    <input type="file" name="archivoCorreo"/>
                                                    <input type="submit" style="float:right" value="Enviar ejercicios"/>
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
                    echo '<p> No estás inscrito en ningún curso. </p>';
                }
                ?>

            </div>    
        </div>
    </div>
    <!-- MIS CURSOS -->
    <div id="tab3" class="main inner-block">


    </div>
    
    <?php } else { ?> 
    
    <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->
    <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->
    <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->
    <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->
    <!-- ESTO ES LO QUE VAN A VER LOS PROFESORES -->
    
    <!-- Estructura del Menu secundario. -->

    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul id="tabs">
                <li class="">
                    <a title="Ir a tu perfil" name="tab1" href="/">Tu perfil</a>
                </li>
                <li class="">
                    <a title="Ir al curso actual" name="tab2" href="/">Listado cursos de <?php echo $_SESSION['nombre'];?> </a>
                </li>
                <li class="">
                    <a title="Mis cursos" name="tab3" href="/">Notificaciones</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR-->

    <!-- MI PERFIL -->
    <div class="content">
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
                                    <img class="flecha" src="../img/iconos/flechaAbajo.png">
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
                        $con = mysqli_connect('localhost', 'project', 'project', 'webstudy');
                        $query = mysqli_query($con, "SELECT * from usuario");
                        if ($row = mysqli_fetch_assoc($query)) {
                            if ($row['avatar'] == NULL) { /*
                                echo "<img src='avatares/avatar_1.png' alt='Imagen por defecto'>";
                            } else { */
                                echo "<img width='240' height='240' src='avatares/".$_SESSION['avatar']."' alt='Avatar'>";
                            }
                        }
                        ?>
                        
                    </div>    
                    <div class="avatar">
                        
    <!--                   <input class="avatar" type="file" value="Cambiar avatar" name="avatar">-->
                        <p>Cambiar avatar</p>
                    </div>
                    <form method="post" action="actualizarUsuario.php" enctype="multipart/form-data">
                        <input class="guarda" name="avatar" type="file"/>
                    </form>

                    <!--                    <form method="post" action="actualizarUsuario.php" enctype="multipart/form-data">
                                            <input type="file" name="avatardavid"/>
                                            <input type="submit" name="formavatar" value="enviar avatar"/>
                                        </form>-->

                </div>
            </form>
        </div>

        <!-- CURSO ACTUAL -->
        <div id="tab2" class="main inner-block">
            <div class="main inner-block" id="mainContainer">
                <!------------------------------------------------------------------------------------------CARGAMOS LA INFORMCION DEL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->

                <?php
//                include("../areaprivada/openDB.php");
                include("../cursosOnline/cargarHTML.php");


                $tiene_curso = mysql_query("SELECT * "
                        . "FROM alumno_has_curso "
                        . "WHERE Alumno_idAlumno= " . $_SESSION['idAlumno'] . " and done=0", $con);

                /* ------------------------------------------------------------------------------------------COMPROBAMOS EL CURSO ACTUAL Y QUE NO ESTÉ ACABADO--------------------------------------------- */


//                $result = mysql_query("SELECT * "
//                        . "FROM alumno_has_curso "
//                        . "WHERE Alumno_idAlumno=".$_SESSION['idAlumno']."and done=0");


                if (mysql_num_rows($tiene_curso) == 1) {
                    ?> <!-- SI ENCUENTRA EN LA BASE DE DATOS -->
                    <div class="headerMod">
                        <h3><?php echo $nombreCurso; ?></h3>
                        <h4 class="paddingLeft"><?php echo $descripcion; ?></h4>
                    </div>

                    <div class="bloqueIzq">
                        <div class="info-box">
                        <div class="tablaModulos paddingLeft"> 
                            <span id="tituloModulo" class="letraGrande">Módulos del curso</span>
                            <?php
                            if (mysql_num_rows($modulos) > 0) {
                                $controlModulo = 1;
                                while ($rowmodulo = mysql_fetch_array($modulos)) {
                                    ?>  
                                    <li>
                                        <div class="modulo">
                                            <div class="imagenMod">
                                                <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
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
                        </div>
                    </div>
                    </div>



                    <div class="bloqueDcha">
                        <div class="contentd">

                            <?php
                            //CONSULTA MODULOS DEL CURSO
                            $modulos = mysql_query("SELECT * "
                                    . "FROM modulo "
                                    . "WHERE Curso_idCurso = 1", $con); 
                            
                            if (mysql_num_rows($modulos) > 0) {
                                $controlModulo = 1;
                                while ($rowmodulo = mysql_fetch_array($modulos)) {
                                    ?>  
                                    <div id="tab<?php echo $controlModulo ?>d" class="descripcionModulo">
                                        <span id="tituloModulo"><?php echo $rowmodulo['nombre']; ?></span>

                                        <div id="contenedorDescripcion">
                                            <div class="modulo" style="border:none;">
                                                <div class="imagenMod">
                                                    <img src="../img/iconos/cursosCatalogo/modulo_pdf76x76.png"/>
                                                </div>

                                                <a target="_blank" href="../pdf/HTMLBasico/<?php echo $rowmodulo['apuntes']; ?>.pdf"> Temario para descargar</a>
                                            </div> 


                                            <div class="modulo" style="border:none;">
                                                <div class="imagenMod">
                                                    <img src="../img/iconos/cursosCatalogo/modulo_ejercicios76x76.png"/>
                                                </div>

                                                <a href="../pdf/HTMLBasico/<?php echo $rowmodulo['ejercicios']; ?>.pdf"> Descargar ejercicios</a>
                                            </div> 

                                            <div id="formularioEjercicios">
                                                <form method="POST" action="">
                                                    <p>Formulario de envio</p>
                                                    <input type="text" disabled="" name="nombreModuloCorreo" required size="30" value="<?php echo $rowmodulo['nombre'] ?>"/>
                                                    <input type="text" disabled="" name="nombreAlumnoCorreo" required value="<?php echo $_SESSION['nombre']; ?>"/>
                                                    <input type="file" name="archivoCorreo"/>
                                                    <input type="submit" style="float:right" value="Enviar ejercicios"/>
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
                    echo '<p> No estás inscrito en ningún curso. </p>';
                }
                ?>

            </div>    
        </div>
    </div>
    <!-- MIS CURSOS -->
    <div id="tab3" class="main inner-block">


    </div>
    <?php } ?>
    
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("../include/inc_6_footer_template_subcarpeta.php") ?>
