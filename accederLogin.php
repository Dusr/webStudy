<?php include("include/inc_1_head_inicio.php") ?>


<title>Acceder - Login | Webstudy.com</title>

<!-- METAS de la pagina -->
<meta name="description" content=''/>
<meta name="keywords" content="Keyword1,Keyword2,Keyword3,Keyword4,Keyword5"/>

<!-- LINK hojas de CSS -->
<link href="css/login.css" rel="stylesheet">


<!-- JAVASCRIPT -->
<script type="text/javascript" src="js/functions.js"></script>

<script>
    window.onload = document.getElementById('formRegister').style.display = 'block';
</script>
<!------------------------ Si la contraseña no es correcta ----------------------------------->
<?php
if (isset($_SESSION['nosamepass'])) {
    ?>
    <script>
        document.getElementById('formRegister').style.display = 'block';
    </script>
    <?php
}
?>
<!------------------------------------------------------------------------------->
<?php
if (isset($_GET['insert'])) {
    if ($_GET['insert'] == 0) {
        ?>
        <script>
            alert('Usuario no se ha creado');
        </script>
        <?php
    }
}
?>
<!------------------------------------------------------------------------------->

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
        <a title="Ir a Asesoramiento" href="asesoramiento.php"> Asesoramiento </a>
    </li>
    <li class="item-5">
        <a title="Ir a Soporte/Faq´s" href="soporteFaqs.php"> Soporte/Faq´s </a>
    </li>
    <li class="item-6">
        <a title="Ir a Contáctanos" href="contacto.php"> Contáctanos </a>
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
                <?php if (!isset($_SESSION['logged']) === TRUE) { ?>
                    <div id="formLogin">
                        <form action="areaprivada/validarUsuario.php" method="POST">
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
                <?php } else { ?>
                    <div>
                        Bienvenido <?php echo $_SESSION['nombre'] ?>
                    </div>    

                <?php } ?>
            </div>
        </div>	

        <div class="row">
            <div id="formRegister">
                <form action="areaprivada/registrarUsuario.php" method="POST">
                    <div id="cabRegistro">
                        <p>nuevo registro</p>
                    </div>
                    <div id="camposRegistro">
                        <div class="left">
                            <label for="nombre">*Nombre:</label>
                            <label for="apellidos">Apellidos:</label>
                            <label for="correo">*Correo electrónico:</label>
                            <label for="password">*Contraseña:</label>
                            <label for="rpassword">*Repita su contraseña:</label>
                        </div>
                        <div class="inputs">
                            <input type="text" id="nombre" name="nombre" required/>
                            <input type="text" id="apellidos" name="apellidos"/>
                            <input type="text" id="correo" name="login" required onblur="validarEmail(this);"/>
                            <input type="password" id="password" name="pass" required onblur="validarContrasena();"/>
                            <input type="password" id="rpassword" name="rpass" required onblur="validarContrasena();"/>
                            <br>
                            <div id="politica" class="row">
                                <input type="checkbox" required>
                                <p>Acepto y entiendo la Política de Privacidad.</p>
                            </div>

                        </div>

                        <div class="boton_enviar">
                            <input type="submit" name="enviar" value="ACCEDER">
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_GET['nosamepass'])) {
                    ?>
                        <script>document.getElementById('formRegister').style.display = 'block';</script>
                        <br>
                        <span class="alerta" style="color:red">Las contraseñas no coinciden.</span>
                    <?php
                } else if (isset($_GET['nocorrectdata'])) {
                    ?>
                        <script>document.getElementById('formRegister').style.display = 'block';</script>
                        <br>
                        <span class="alerta" style="color:red">Los datos introducidos no son admitidos.</span>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- ESTRUCTURA PARA EL FOOTER DE LA PAGINA -->
    <?php include("include/inc_6_footer_template.php") ?>