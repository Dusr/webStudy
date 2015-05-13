<?php
 
/*Capturamos los datos del formulario y los almacenamos en variables*/
$login = $_POST['login'];
$pass = $_POST['pass'];

//CONEXION BASE DATOS.
    include 'openDB.php';

//CONSULTA
$result = mysql_query("SELECT * "
                     ."FROM alumno "
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


//if(isset($_GET['login'])){
//    if(mysql_num_rows($result)==0){
//     //En caso que el nombre de Usuario sea incorrecto enviamos un msj y redireccionamos a login.php
//        echo 'ERROR';
//        header("Location: ../accederLogin.php?incorrect=1");
//     }
//}  
//
//if(isset($_GET['update'])){
//    $nombre = $_POST['nombre'];
//    $apellidos = $_POST['apellidos'];
//    $login = $_POST['correo'];
//    $direccion = $_POST['direccion'];
//    $password = $_POST['pass'];
//    $rpassword = $_POST['rpass'];
//    $avatar = $_POST['avatar'];
//    
//    if($password == $_SESSION['pass'] && $password==$rpassword){
//        $sql = "UPDATE alumno SET login=".$login.", ".
//                                  "password=".$password.", ".
//                                  "nombre=".$nombre.", ".
//                                  "apellidos=".$apellidos.", ".
//                                  "direccion=".$direccion.", ".
//                                  "avatar=".$a.",";
//    }
//    
//    
//} 


