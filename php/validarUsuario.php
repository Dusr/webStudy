<?php

/**CONEXION BASE DATOS. 

/*Capturamos los datos del formulario y los almacenamos en variables*/

$login = $_POST['login'];
$pass = $_POST['pass'];

include 'openDB.php';

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$result = mysql_query("SELECT * "
                     ."FROM alumno "
                     ."WHERE login = '".$login."' "
                     ."AND password= '".$pass."'",
                     $con);

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if(mysql_num_rows($result) == 1){
    $row = mysql_fetch_array($result);
    
    //Si el usuario es correcto ahora validamos su contraseña
    if($row["password"] == $pass) {
        //Creamos sesión
        session_start();  

        //Almacenamos los datos de usuario en variables de sesión
        $_SESSION['idAlumno'] = $row['idAlumno'];
        $_SESSION['usuario'] = $row['nombre'];
        $_SESSION['apellidos'] = $row['apellidos'];
        $_SESSION['avatar'] = $row['avatar'];
        $_SESSION['logged'] = TRUE;

        

        //Redireccionamos a la pagina: Perfil del usuario
        header("Location: perfilAlumno.php");  
    }
}

if(mysql_num_rows($result)==0){
 //En caso que el nombre de Usuario sea incorrecto enviamos un msj y redireccionamos a login.php
    echo 'ERROR';
    header("Location: ../accederLogin.php?incorrect=1");
 }

//Liberamos la memoria empleada para realizar la consulta
mysql_free_result($result);

//Cerramos la base de datos para no sobrecargar el servidor en caso de que reciba muchas visitas
mysql_close();

