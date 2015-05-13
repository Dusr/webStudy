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
<link href="../css/login.css" rel="stylesheet">
<link href="../css/miPerfil.css" rel="stylesheet">
<link href="../css/cursosCatalogo.css" rel="stylesheet">
<link href="../css/cursoActual.css" rel="stylesheet">

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
    <li class="menuLogin">
                    <a title="Ir a mi perfil" href="#"> Bienvenido <?php echo $_SESSION['nombre']; ?></a>
                    <div class="header">
                        <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="../areaprivada/perfilAlumno.php">
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
<ul>
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

    <h2>Bienvenido <?php echo $_SESSION['nombre'] ?></h2>

    <?php include("../include/inc_opcional_breadcrumb_final_subcarpeta.php") ?>
    <!-- Estructura del Menu secundario. -->

    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul id="tabs">
                <li class="activa">
                    <a title="Ir a tu perfil" name="tab1" href="#">Tu perfil</a>
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
            <form action="actualizarUsuario.php" method="POST">
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
                        <img src=""/>
                    </div>    
                    <div class="avatar">
                        <?php echo $_SESSION['avatar']; ?>
    <!--                    <input class="avatar" type="file" value="Cambiar avatar" name="avatar">-->
                        <p>Cambiar avatar</p>
                    </div>
                    <input class="guarda" name="avatar" type="file"/>

                </div>
            </form>
        </div>

        <!-- CURSO ACTUAL -->
        <div id="tab2" class="main inner-block">
            <div class="main inner-block" id="mainContainer">


                <div class="bloqueIzq">
                    <div class="headerMod">
                        <p> Modulos del curso </p>
                    </div>
                    <div class="tablaModulos">    
                        <div class="modulo">
                            <div class="imagenMod">
                                <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                            </div>

                            <p>MÓDULO 0: Presentación.</p>

                            <input class="botonAcceder" type="button" name="acceder" value="ACCEDER">
                        </div>
                        <div class="modulo">
                            <div class="imagenMod">
                                <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                            </div>
                            <p>MÓDULO 1: HTML: Conceptos básicos, conceptos avanzados.</p>

                            <div class="botonAcceder">
                                <input type="button" name="acceder">
                            </div>
                        </div>
                        <div class="modulo">
                            <div class="imagenMod">
                                <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                            </div>
                            <p>MÓDULO 1: HTML: Conceptos básicos, conceptos avanzados.</p>

                            <div class="botonAcceder">
                                <input type="button" name="acceder">
                            </div>
                        </div>
                        <div class="modulo">
                            <div class="imagenMod">
                                <img src="../img/iconos/cursosCatalogo/modulos76x76.png"/>
                            </div>
                            <p>MÓDULO 1: HTML: Conceptos básicos, conceptos avanzados.</p>

                            <div class="botonAcceder">
                                <input type="button" name="acceder">
                            </div>
                        </div>
                    </div>
                </div>

            </div>    
        </div>
    </div>
    <!-- MIS CURSOS -->
    <div id="tab3" class="main inner-block">


    </div>

    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("../include/inc_6_footer_template_subcarpeta.php") ?>
