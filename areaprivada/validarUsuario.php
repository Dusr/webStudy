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
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellidos'] = $row['apellidos'];
        $_SESSION['correo'] = $row['login'];
        $_SESSION['direccion'] = $row['direccion'];
        $_SESSION['avatar'] = $row['avatar'];
        $_SESSION['pass'] = $row['password'];
        $_SESSION['logged'] = TRUE;

        

        //Redireccionamos a la pagina: Perfil del usuario
        header("Location: perfilAlumno.php");  
    }
}else{
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $login = $_POST['login'];
    $password = $_POST['pass'];
    
    $sql = "INSERT INTO alumno(idAlumno, login, password, nombre, apellidos, avatar) ".
    "VALUES(default,'".$login."', '".$password."', '".$nombre."', '".$apellidos."',null)";
    
    $result = mysql_query($sql,$con);    
    $row = mysql_fetch_array($result);
    if ($resVal) {
        //Creamos sesión
        session_start();  

        //Almacenamos los datos de usuario en variables de sesión
        $_SESSION['idAlumno'] = $row['idAlumno'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellidos'] = $row['apellidos'];
        $_SESSION['correo'] = $row['login'];
        $_SESSION['direccion'] = $row['direccion'];
        $_SESSION['avatar'] = $row['avatar'];
        $_SESSION['logged'] = TRUE;
        
        header("Location: perfilAlumno.php?insert=1");
    } else {
        header("Location: ../accederLogin.php?insert=0");
    }
}

if(isset($_GET['login'])){
    if(mysql_num_rows($result)==0){
     //En caso que el nombre de Usuario sea incorrecto enviamos un msj y redireccionamos a login.php
        echo 'ERROR';
        header("Location: ../accederLogin.php?incorrect=1");
     }
}  

if(isset($_GET['update'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $login = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $password = $_POST['pass'];
    $rpassword = $_POST['rpass'];
    $avatar = $_POST['avatar'];
    
    if($password == $_SESSION['pass'] && $password==$rpassword){
        $sql = "UPDATE alumno SET login=".$login.", ".
                                  "password=".$password.", ".
                                  "nombre=".$nombre.", ".
                                  "apellidos=".$apellidos.", ".
                                  "direccion=".$direccion.", ".
                                  "avatar=".$a.",";
    }
    
    
} 

//Liberamos la memoria empleada para realizar la consulta
mysql_free_result($result);

//Cerramos la base de datos para no sobrecargar el servidor en caso de que reciba muchas visitas
mysql_close();

