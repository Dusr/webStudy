<?php include("include/inc_1_head_inicio.php") ?>


<title>Acceder - Login | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="css/login.css" rel="stylesheet">


<!-- JAVASCRIPT -->


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



    <div class="main inner-block" id="mainContainer">
        <div class="row">
            <div id="imgPrincipal">
                <img src="img/login/loginRegistro.jpg"/>
                <div class="textoRegistro">
                    <p>Registrate para acceder a webStudy y poder realizar los cursos que te ofrecemos.</p>
                </div>
                <div class="botonRegistro">
                    <p class="texto_boton">REGÍSTRATE</p>
                </div>
            </div>
            <div id="login">
                <div id="cabAcceso">
                    <img src="img/login/icon_acceso.png">
                    <p>Acceso</p>
                </div>
                <div id="formLogin">
                    <form action="php/validarUsuario.php" method="POST">
                        <div id="camposLogin">
                            <div>
                                <label for="login">Correo electrónico:</label>
                                <input type="text" id="email" name="login"/>
                            </div>
                            <div>
                                <label for="pass" >Contraseña:</label>
                                <input type="password" id="pass" name="pass"/>
                            </div>
                            <div class="boton_enviar">
                                <input type="submit" name="enviar" value="ACCEDER">
                            </div>
                            <?php
                            
                            if (isset($_GET['incorrect'])) {
                                ?>
                                    <br>
                                    <span style="color:red">El usuario es incorrecto</span>
                                <?php
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>	

        <div class="row">
            <div id="formRegister">
                <form action="" method="">
                    <div id="cabRegistro">
                        <p>nuevo registro</p>
                    </div>
                    <div id="camposRegistro">
                        <div class="left">
                            <label for="nombre">Nombre*:</label>
                            <label for="apellidos">Apellidos*:</label>
                            <label for="correo">Correo electrónico*:</label>
                        </div>
                        <div class="inputs">
                            <input id="correo">
                            <input id="nombre">
                            <input id="apellidos">
                            <div id="politica" class="row">
                                <input type="checkbox">
                                <p>Acepto y entiendo Politica de Privacidad.</p>
                            </div>

                        </div>

                        <div class="boton_enviar">
                            <input type="submit" name="enviar" value="ACCEDER">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>