<?php
 
/*Capturamos los datos del formulario y los almacenamos en variables*/
$login = $_POST['login'];
$pass = $_POST['pass'];

//CONEXION BASE DATOS.
    include 'openDB.php';

//CONSULTA
$result = mysql_query("SELECT * "
                     ."From usuario "
                     ."WHERE login = '".$login."' "
                     ."AND password= '".$pass."'",
                     $con);

$row = mysql_fetch_array($result);

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if(mysql_num_rows($result) == 1){
    //Si el usuario es correcto ahora validamos su contraseña
    
        //Creamos sesión
        session_start();  

        //Almacenamos los datos de usuario en variables de sesión
        $_SESSION['idAlumno'] = $row['idAlumno'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellidos'] = $row['apellidos'];
        $_SESSION['correo'] = $row['login'];
        $_SESSION['direccion'] = $row['direccion'];
        $_SESSION['avatar'] = $row['avatar'];
        $_SESSION['pass'] = $row['password'];
        $_SESSION['logged'] = TRUE;
        
        //Redireccionamos a la pagina: Perfil del usuario
        header("Location: ../index.php");
}else{
    //SI NO ESTA EN LA BASE DE DATOS
    header("Location: ../accederLogin.php?errorlogin=1");
}

//CERRAMOS BASE DATOS
    mysql_close();




