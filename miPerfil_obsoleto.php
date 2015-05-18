<?php include("include/inc_1_head_inicio.php") ?>


<title>Acceder - Login | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="css/login.css" rel="stylesheet">
<link href="css/areaPrivada.css" rel="stylesheet">


<!-- JAVASCRIPT -->
<!-- SCRIPT de las TABS -->
<script type="text/javascript">
    $(document).ready(function () {
        $("#tab1").hide();
        $("#tab2").hide();
        $("#tab3").hide();
        $("#tabs li:first").attr("id", "current");
        $("#content div:first").fadeIn();

        $('#tabs a').click(function (e) {
            e.preventDefault();
            $("#tab1").hide();
            $("#tab2").hide();
            $("#tab3").hide();
            $("#tabs li").attr("id", "");
            $(this).parent().attr("id", "current");
            $('#' + $(this).attr('title')).fadeIn();
        });
    })();
</script>



<?php include("include/inc_2_head_final.php") ?> 
<?php include("include/inc_3_headerTemplate.php") ?>
<?php include("include/inc_4_nav_inicio.php") ?> 
<ul>
    <li class="item-2">
        <a title="Ir a conocenós" href="conocenos.php">Conócenos</a>    				
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
        <a title="Ir a Contactanos" href="contacto.php"> Contactanós </a>
    </li>
    <li class="menuLogin">
        <a title="Ir a la página de acceso" href="accederLogin.php"> Acceder / Registro </a>
    </li>

    <?php include("include/inc_5_nav_final.php") ?>
    <?php include("include/inc_opcional_breadcrumb_Inicio.php") ?>
    <li>
        <a title="Acceder - registro" href="accederLogin.php">Acceder - Registro</a>
    </li>
</ul>
<div class="header">
    <div class="image">
        <a href="#">
            <img alt="Volver atrás" src="images/left-white-arrow.png">
        </a>
    </div>
    <h2>Acceso a tu área privada</h2>
    <?php include("include/inc_opcional_breadcrumb_final.php") ?>

    <div class="contenedor inner-block"> 
        <div class="info-box row">
            <ul id="tabs" >
                <li>
                    <a href="/" title="tab1">
                        <strong>tu perfil</strong>
                    </a>
                </li>
                <li id="margen" class="pestana2">
                    <a href="/" title="tab2" >
                        <strong>tus cursos</strong>
                    </a>
                </li>
                <li class="pestana3">
                    <a href="/" title="tab3" >
                        <strong>curso actual</strong>
                    </a>
                </li>
            </ul>
        </div>
        <div id="nombreUser">
            Bienvenido PEPE!
        </div>
    </div>

    <div id="content">
        <div id="tab1" class="main inner-block">
            <div id="colIzq">
                <!--                <div id="cabAcceso">
                                        <img src="img/login/icon_acceso.png">
                                        <p>Tus datos personales</p>
                                    </div>-->
                <div id="userData">
                    <form action="" method="">
                        <div id="cabRegistro">
                            <p>Mis Datos</p>
                        </div>
                        <div id="camposRegistro">
                            <div class="left">
                                <label for="nombre">Nombre:</label>
                                <label for="apellidos">Apellidos:</label>
                                <label for="correo">Email:</label>
                                <label for="direccion">Dirección:</label>
                            </div>
                            <div class="inputs">
                                <input type="text" id="nombre" name="nombre">
                                <input type="text" id="apellidos" name="apellidos">
                                <input type="text" id="correo" name="correo">
                                <input type="text" id="direccion" name="direccion">
                            </div>

                            <div class="boton_enviar">
                                <input type="submit" name="Guardar" value="Guardar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div id="colDcha">
                <div id="avatar">
                    <img src=""/>
                </div>    
                <div class="avatar">
<!--                    <input class="avatar" type="file" value="Cambiar avatar" name="avatar">-->
                    <p>Cambiar avatar</p>
                </div>
                <input class="guarda" type="file"/>
            </div>
        </div>

        <div id="tab2" class="main inner-block">
            Pestaña 2 

        </div>

        <div id="tab3" class="main inner-block">
            Pestaña 3

        </div>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>