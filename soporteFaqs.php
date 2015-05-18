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


            <dt class="pregunta">¿Dónde puedo encontrar una referencia de la sintaxis de los lenguajes de programación?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Cada lenguaje tiene su propia interfaz de programación de aplicaciones (API:Application Programming Interface)las cuales definen todas las herramientas y caracteristicas de su libreria. Las API pueden ser una guia muy útil al momento de estudiar nuevos lenguajes o, simplemente, como una buena referencia a tener a mano cuando se necesite.  </dd>


            <dt class="pregunta">¿Cuesta dinero usar webStudy?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>webStudy es gratis y siempre lo será.</dd>


            <dt class="pregunta">¿Qué edad tengo que tener para registrarme en webStudy?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Nunca se es demasiado joven para aprender ni demasiado viejo para cambiar, es por ello que no nos importa la edad. ¡Vámos a aprender!</dd>

            <dt class="pregunta">¿Cómo cambio mi dirección de correo electrónico?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd>Se puede cambiar desde la zona "Mi perfil"</dd>


            <dt class="pregunta">¿Puedo cambiar mi nombre de usuario?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd></dd>


            <dt class="pregunta">¿Puedo obtener un certificado despues de terminar un curso?
            <div class="flechaAbajo">
                <img class="flecha" alt="icono flecha" src="img/iconos/flechaAbajo.png">
            </div>
            </dt>
            <dd></dd>
        </dl>
    </div>

    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>