<?php session_start(); ?>
<?php include("include/inc_1_head_inicio.php") ?>



<title>Contáctanos | Webstudy.com</title>	
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<link href="css/contacto.css" rel="stylesheet">
<script>
   
</script>


<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?> 


<li class="item-2">
    <a title="Ir a Conócenos" href="conocenos.php">Conócenos</a>    				
</li>
<li class="item-3" >
    <a title="Ir a Nuestros cursos" href="nuestrosCursos.php">Nuestros cursos</a>
</li>
<li class="item-4">
    <a title="Ir a Asesoramiento" href="asesoramiento.php"> Asesoramiento </a>
</li>
<li class="item-5">
    <a title="Ir a Soporte/Faq´s" href="soporteFaqs.php"> Soporte/Faq´s </a>
</li>
<li class="item-6 activo">
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

<?php include("include/inc_5_nav_final.php") ?>
<?php include("include/inc_opcional_breadcrumb_Inicio.php") ?>

<li>
    <a title="Contáctanos" href="contacto.php">Contáctanos</a>
</li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="images/left-white-arrow.png"/>
        </a>
    </div>
    <h2>Contáctanos</h2>
    
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>

    <!-- CONTENIDO DE  LA PáGINA -->
    <div class="main inner-block">
        <p class="texto_grande">Te asesoramos, cuentanos qué buscas y nos pondremos en contacto contigo</p>
        <p>Los campos marcados con (*) son obligatorios.</p>
    </div>

    <div class="main inner-block">
        <form>
            <fieldset>
                <legend>¿Qué quieres contarnos?</legend>
                <p>Explícanos lo que necesitas</p>
                <div class="fila_form">
                    <label for="mensaje">Tu mensaje*:</label>
                    <textarea cols="1" rows="1" id="mensaje"> </textarea>
                    <p>Max. 500 caracteres</p>
                </div>
            </fieldset>

            <fieldset>
                <legend>Tus datos personales</legend>
                <p>Envianos tus datos para poder responderte</p>
                <div class="fila_form">
                    <label for="nombre">Nombre*:</label>
                    <input id="nombre"/>
                </div>
                <div class="fila_form">
                    <label for="primerApellido">Primer apellido*:</label>
                    <input id="primerApellido"/>
                </div>
                <div class="fila_form">
                    <label for="segundoApellido">Segundo Apellido*:</label>
                    <input id="segundoApellido"/>
                </div>
                <div class="fila_form">
                    <label for="correo">Correo electrónico*:</label>
                    <input id="correo"/>
                </div>
                <div class="fila_form">
                    <label for="confirm_correo">Confirma tu correo*:</label>
                    <input id="confirm_correo"/>
                </div>
                <div class="fila_form">
                    <label for="direccion">Dirección*:</label>
                    <input id="direccion"/>
                </div>
                <div class="fila_form">
                    <label for="cp">Código Postal*:</label>
                    <div class="contenedorContacto">
                        <div class="columna_izq">
                            <input id="cp">
                        </div>
                        <div class="columna_drcha">
                            <label for="poblacion">Población*:</label>
                            <input id="poblacion">
                        </div>
                    </div>
                </div>
                <div class="fila_form">
                    <div class="texto_legal row">
                        <p>En cumplimiento de los dispuesto en la Ley Orgánica 15/1999 de 13 de diciembre de Protección de Datos de Carácter Personal, los datos de carácter personal facilitados por usted formarán parte del fichero informático de webStudy.com cuyo titular es Enjuto Mojamuto con NIF 12345678R y serán utilizados únicamente para enviarle información y publicidad sobre nuestros productos, así como para facilitar el mantenimiento de la relación contractual, el control y gestión de las compras y sus correspondientes cobros. </p>

                        <input type="checkbox" class="checkboxCss" id="legal">
                        <label class="labelCss" for="legal"> Declaro que he leido las 
                            <span class="texto_subrayado">
                                <a href="documentosLegales/politicaPrivacidad.pdf" target="_blank" title="Condiciones legales"> condiciones legales</a>
                            </span> y las acepto.
                        </label>
                        <div class="boton_enviar contacto">
                            <input type="submit" value="enviar consulta" name="enviar"/>
                        </div>
                    </div>

                </div>

            </fieldset>


        </form>
    </div>

    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>