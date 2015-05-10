<?php

//CONEXION BASE DATOS.
    include 'openDB.php';
    
//RECOGEMOS LOS DATOS DEL REGISTRO.   
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $login = $_POST['login'];
    $password = $_POST['pass'];
    $rpassword = $_POST['rpass'];
    
    if($password == $rpassword){
        $sql = "INSERT INTO alumno(idAlumno, login, password, nombre, apellidos, avatar) ".
               "VALUES(default,'".$login."', '".$password."', '".$nombre."', '".$apellidos."',null)";

        $result = mysql_query($sql, $con);    
        
        
        if ($result){
                $row = mysql_fetch_array($result);
            
            //CREAMOS SESION.
                session_start();  

            //ALMACENAMOS LOS DATOS DEL USUARIO EN LA SESION.
                
                $_SESSION['idAlumno'] = $row['idAlumno'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellidos'] = $row['apellidos'];
                $_SESSION['pass'] = $row['password'];
                $_SESSION['correo'] = $row['login'];
                $_SESSION['direccion'] = $row['direccion'];
                $_SESSION['avatar'] = $row['avatar'];
                $_SESSION['registered'] = TRUE;
                $_SESSION['logged'] = TRUE;

            //LIBERAMOS LA MEMORIA EMPLEADA PARA HACER LA CONSULTA
                mysql_free_result($result);
                
            //REDIRECCIONAMOS A perfilAlumno.php
                header("Location: perfilAlumno.php");
                
    }else{
            //SI NO INTRODUCE LOS DATOS CORRECTAMENTE REDIRECCIONAMOS A accederLogin.php
                
                header("Location: ../accederLogin.php?nocorrectdata=0");
                
    }
}else{
    //SI LAS CONTRASEÑAS NO COINCIDEN REDIRECCIONAMOS OTRA VEZ A accederLogin.php
        
        header("Location: ../accederLogin.php?nosamepass=0");
}

//CERRAMOS LA BASE DE DATOS (Para no sobrecargar el servidor en caso de mucha afluencia de visitas)
mysql_close();






