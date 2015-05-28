<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
?>
<?php include("../include/inc_1_head_inicio_subcarpeta.php") ?>

<!------------------------------------------------------------------------------------------CARGAMOS LA INFORMCIOND EL CURSO Y DE LOS MODULOS DE LA BASE DE DATOS-->
<?php include("../cursosOnline/cargarCursos/cargarAjax.php") ?>

<title><?php echo $nombreCurso; ?> | Cursos Online | Nuestros cursos | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="../css/cursosCatalogo.css" rel="stylesheet">
<link href="../css/detalleCursoStyle.css" rel="stylesheet">
<!-- JAVASCRIPT -->


<?php include("../include/inc_3_headerTemplate_subcarpeta.php") ?>
<?php include("../include/inc_4_nav_inicio_subcarpeta.php") ?> 
<li class="item-2">
    <a title="Ir a conócenos" href="../conocenos.php">Conócenos</a>
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
    <a title="Ir a Contáctanos" href="../contacto.php"> Contáctanos </a>
</li>
<?php
if (!isset($_SESSION['logged'])) {
    ?>
    <li class="menuLogin">
        <a title="Ir a la página de acceso" href="../accederLogin.php"> Acceder / Registro </a>

    </li>
    <?php
} else {
    ?>
    <li class="menuLogin">
        <a href="#"> Bienvenido <?php echo $_SESSION['nombre']; ?></a>
        <div class="header">
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="../areaprivada/perfilUsuario.php">
                        Ir a mi perfil
                    </a>
                </li>
                <li>
                    <a href="../areaprivada/logout.php">
                        Cerrar sesion
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
    <h2>Cursos online</h2>
    <?php include("../include/inc_opcional_breadcrumb_final_subcarpeta.php") ?>

    <!-- Estructura del Menu secundario. -->
    <div class="menu_secundario">
        <div class="contenedor_menu_secundario">
            <ul>
                <li class="">
                    <a title="Cursos personalizados" href="../cursosPersonalizados.php">Cursos <br />personalizados</a>
                </li>
                <li class="">
                    <a title="Cursos presenciales" href="../cursosPresenciales.php">Cursos <br />presenciales</a>
                </li>
                <li class="activa cursos_online">
                    <a title="Cursos online" href="../cursosOnline.php">Cursos online</a>
                </li>
                <li class="">
                    <a title="Seminarios gratuitos" href="../cursosSeminarios.php">Seminarios <br />  gratuitos</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="full-block fondo_gris presenciales">
        <div class="inner-block-alternative titulo_detalleCurso">
            <a title="Ir a Cursos Online" href="../cursosOnline.php">
                <img alt="Volver atrás" src="../img/cursosCatalogo/flechaIzq.png">
            </a>
            <h3><?php echo $nombreCurso; ?></h3>
            <?php
            if (isset($_SESSION['logged'])) {

                $result = mysql_query("SELECT * "
                        . "FROM alumno_has_curso "
                        . "WHERE Curso_idCurso=" . $idCurso . " AND Alumno_idAlumno= '" . $_SESSION['idAlumno'] . "'"
                        . "AND done=0", $con);

                if (mysql_num_rows($result) == 1) { // SI YA ESTÁ INSCRITO EN ESE CURSO
                    ?>
                    <input class="inscrito" type="submit" value="inscrito"/>
                    <?php
                } else {

                    $result2 = mysql_query("SELECT * "
                            . "FROM alumno_has_curso "
                            . "WHERE Alumno_idAlumno= '" . $_SESSION['idAlumno'] . "' "
                            . "AND done=0", $con);

                    // Para ver si ya ha terminado el curso.

                    $result3 = mysql_query("SELECT * "
                            . "FROM alumno_has_curso "
                            . "WHERE Curso_idCurso=" . $idCurso . " AND Alumno_idAlumno= '" . $_SESSION['idAlumno'] . "' "
                            . "AND done=1", $con);


                    if (mysql_num_rows($result2) == 1) { // SI ESTA INSCRITO EN OTRO CURSO QUE NO SEA ESTE
                        ?>

                        <h4>Ya estás inscrito en otro curso, terminalo antes de inscribirte en otro</h4>

                        <?php
                    } else if (mysql_num_rows($result3) == 1) { // SI YA HA HECHO EL CURSO
                        ?>

                        <h4>Ya has finalizado el curso!</h4>

                        <?php
                    } else {
                        // SI NO ESTÁ INSCRITO APARECERA EL BOTON PARA INSCRIBIRSE
                        ?>
                        <form action="../areaprivada/inscribirseCurso.php" method="POST">
                            <input class="hide" id="id" name="id" type="text" value="<?php echo $idCurso; ?>"/>
                            <input class="botonIncribir" type="submit" value="Inscribirse"/>
                        </form>
                        <?php
                    }
                }
            }
            ?>
        </div>

    </div>


    <?php include("../include/inc_opcional_slider_Inicio_subcarpeta.php") ?>

    <img alt="" src="../img/imgSlider/ajaxSlider.png">

    <?php include("../include/inc_opcional_slider_Final_subcarpeta.php") ?>
    <!-- ESTRUCTURA PARA EL CONTENEDOR SUPERIOR -->
    <div class="contenedor top-block"> 
        <div class="info-box">
            <div class="introCursos row">
                <p>AJAX, acrónimo de Asynchronous JavaScript And XML (JavaScript asíncrono y XML), es una técnica 
                    de desarrollo web para crear aplicaciones interactivas. 
                    Estas aplicaciones se ejecutan en el cliente, es decir, en el navegador de los usuarios mientras
                    se mantiene la comunicación asíncrona con el servidor en segundo plano..</p>
                <p> De esta forma es posible
                    realizar cambios sobre las páginas sin necesidad de recargarlas, mejorando la interactividad, 
                    velocidad y usabilidad en las aplicaciones </p>

            </div>
        </div>
    </div>	

    <div class="main inner-block fondoBlanco detalleCurso">
        <ul>
            <li>
                <div class="iconoCurso">
                    <img alt="Fecha de inicio" src="../img/iconos/cursosCatalogo/calendario76x76.png">
                    <h4>Fecha de inicio</h4>
                </div>
                <div class="texto_dcha">
                    <p><strong>
                            <?php echo $duracion; ?> horas de dedicación efectiva, incluyendo lecturas, estudio y ejercicios.
                        </strong>
                    </p><p>(Se estiman 20 días | 3 horas/día)</p>
                </div>
            </li>
            <li>
                <div class="iconoCurso">
                    <img alt="Duración" src="../img/iconos/cursosCatalogo/reloj76x76.png">
                    <h4>Duración</h4>
                </div>
                <div class="texto_dcha">
                    <p><strong>
                            <?php echo $duracion; ?> horas de dedicación efectiva, incluyendo lecturas, estudio y ejercicios.
                        </strong>
                    </p><p>(se estiman 40 dias dedicando 3 horas diarias)</p>
                </div>
            </li>
            <li>
                <div class="iconoCurso">
                    <img alt="Descripcion del curso" src="../img/iconos/cursosCatalogo/descripcion76x76.png">
                    <h4>Descripción del curso</h4>
                </div>
                <div class="texto_dcha">
                    <p>
                        <?php echo $descripcion; ?>
                    </p>
                </div>
            </li>
            <li>
                <div class="iconoCurso">
                    <img alt="Modulos del curso" src="../img/iconos/cursosCatalogo/modulos76x76.png">
                    <h4>Módulos que integran el curso</h4>
                </div>
                <div class="texto_dcha">
                    <ol class="lista_numeros">
                        <?php
                        if (mysql_num_rows($modulos) > 0) {
                            while ($rowmodulo = mysql_fetch_array($modulos)) {
                                ?>  
                                <li>

                                    <strong> <?php
                                        echo $rowmodulo['nombre'];
                                        ?>
                                    </strong>
                                    <p class='paddingLeft'>
                                        <?php
                                        echo $rowmodulo['descripcion'];
                                        ?>
                                    </p> 
                                </li>
                                <?php
                            }//end_while
                        } else {
                            //SI NO ESTA EN LA BASE DE DATOS
                            header("Location: ../cursosOnline.php");
                        }
                        ?>

                    </ol>
                </div>
            </li>
        </ul>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("../include/inc_6_footer_template_subcarpeta.php") ?>