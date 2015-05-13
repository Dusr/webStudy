<?php session_start(); ?>
<?php include("include/inc_1_head_inicio.php") ?>

<title>Soporte - faq´s | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="css/soporteFaqs.css" rel="stylesheet">

<!-- JAVASCRIPT -->
<script>
    $(document).ready(function () {
        $('.menuLogin').click(function (e) {
            $(".header").find('.dropdown-menu').slideToggle("fast").end();
        });
    });
</script>


<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?> 

<li class="item-2">
    <a title="Ir a Conócenos" href="conocenos.php">Conócenos</a>    				
</li>
<li class="item-3" >
    <a title="Ir a Nuestros Cursos" href="nuestrosCursos.php">Nuestros cursos</a>
</li>
<li class="item-4">
    <a title="Ir a Asesoramiento" href="asesoramiento.php"> Asesoramiento </a>
</li>
<li class="item-5 activo">
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
        <a href="#"> Bienvenido <?php echo $_SESSION['nombre']; ?></a>
    </li>

    <?php
}
?>

<?php include("include/inc_5_nav_final.php") ?>
<?php include("include/inc_opcional_breadcrumb_Inicio.php") ?>

<li>
    <a title="Nuestros cursos" href="soporteFaqs.php">Preguntas frecuentes</a>
</li>

</ul>
<div class="header">
    <div class="image">
        <a href="index.php">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Preguntas frecuentes</h2>
    <ul>
        <li>
            <ul class="dropdown-menu" role="menu">
                <a href="../areaprivada/perfilAlumno.php">
                    <li>Ir a mi perfil</li>
                </a>

                <a href="../areaprivada/logout.php">
                    <li>Cerrar sesion</li>
                </a>
            </ul>
        </li>
    </ul>
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>

    <div class="main inner-block">
        <dl class="faqs">
            <dt class="pregunta">¿Existen unos requerimientos técnicos para la realización del curso?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Para la realización de los cursos es necesario disponer de un ordenador personal con un navegador web habitual: Mozilla FireFox v.35, Google  Chrome, Internet Explorer 8 o superior. 
                Es muy importante activar Javascript, y desactivar el bloqueador de ventanas emergentes. 
                En el caso de que algún curso necesite un requerimiento específico, el profesor lo notificará en la introducción del curso.</dd>


            <dt class="pregunta">¿Cuánto tiempo es necesario dedicar a un curso?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Depende de cada curso. Te recomendamos que revises el módulo 0 donde el equipo docente te explicará qué dedicación requiere el curso e información en relación al mismo.</dd>


            <dt class="pregunta">¿Qué son los certificados de superación?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Los certificados de superación pueden emitirse para todos y cada uno de los cursos que se imparten en Miríada X, a solicitud del usuario. Su función es reconocer al usuario que lo obtiene la superación con éxito del 100% de las actividades obligatorias de cada curso.  Tienen un coste que puede consultarse desde la página principal de cada curso.

                Los certificados de superación son emitidos por Miríada X y cuentan con el respaldo de la universidad, cuya imagen aparece en el diploma correspondiente, y del equipo docente, del que se incluye una firma también en el diploma.</dd>


            <dt class="pregunta">If the previous was the first question this must be the second one. Isn't it?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>


            <dt class="pregunta">And what about the third question?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>


            <dt class="pregunta">If the previous was the first question this must be the second one. Isn't it?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>


            <dt class="pregunta">And what about the third question?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>


            <dt class="pregunta">If the previous was the first question this must be the second one. Isn't it?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </dd>


            <dt class="pregunta">And what about the third question?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Nam eget dui. Etiam rhoncus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</dd>
        </dl>
    </div>

    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>