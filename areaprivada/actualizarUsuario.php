<?php
//SESION
   session_start();
//CONEXION BASE DATOS.
    include 'openDB.php';
    
//RECOGEMOS LOS DATOS DEL REGISTRO.  
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $login = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $oldpassword = $_POST['oldpass'];
    $newpassword = $_POST['newpass'];
    $avatar = $_POST['avatar'];

    if($oldpassword == $_SESSION['pass']){
        $sql = "UPDATE alumno "
             . "SET login='".$login."', ".
                                  "password='".$newpassword."', ".
                                  "nombre='".$nombre."', ".
                                  "apellidos='".$apellidos."', ".
                                  "direccion='".$direccion."', ".
                                  "avatar='".$avatar."' "
              . "WHERE login='".$_SESSION['correo']."' "
              . "AND password='".$oldpassword."'";
       
        if (mysql_query($sql)) {
            //ACTUALIZAMOS LOS DATOS DE LA SESION PARA MOSTRARLOS
            
            //CONSULTA DE LOS NUEVOS DATOS
                $result = mysql_query("SELECT * "
                                     ."FROM alumno "
                                     ."WHERE login = '".$login."' "
                                     ."AND password= '".$newpassword."'",
                                     $con);

                $row = mysql_fetch_array($result);
                
                if(mysql_num_rows($result) == 1){
                    
                    $_SESSION['idAlumno'] = $row['idAlumno'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['apellidos'] = $row['apellidos'];
                    $_SESSION['correo'] = $row['login'];
                    $_SESSION['direccion'] = $row['direccion'];
                    $_SESSION['avatar'] = $row['avatar'];
                    $_SESSION['pass'] = $row['password'];
                    $_SESSION['modified'] = TRUE;
                    $_SESSION['logged'] = TRUE;

                    header("Location: perfilAlumno.php?modified=1");
                }    
        }else{
            echo "Error updating record: " . mysql_error($con);
        }
    }else{
         header("Location: perfilAlumno.php?errormodificar=1");
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


