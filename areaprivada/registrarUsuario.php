<?php

//CONEXION BASE DATOS.
    include 'openDB.php';

    
//RECOGEMOS LOS DATOS DEL REGISTRO.   
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $login = $_POST['login'];
    $password = base64_encode($_POST['pass']);
    $rpassword = base64_encode($_POST['rpass']);
    $profesor = 0;
    
    if(isset($_POST['profesor'])){
        $profesor = 1;
    }
    
    if($password == $rpassword){
        $sql = "INSERT INTO usuario(idAlumno, login, password, nombre, apellidos, profesor) ".
               "VALUES(default,'".$login."', '".$password."', '".$nombre."', '".$apellidos."',".$profesor.")";

        $result = mysql_query($sql, $con);    
        
        
        if ($result){
               // $row = mysql_fetch_array($result)
                $result0 = mysql_query("SELECT * "
                     ."From usuario "
                     ."WHERE login = '".$login."' "
                     ."AND password= '".$password."'",
                     $con);
                
                $row = mysql_fetch_array($result0);
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
                $_SESSION['profesor'] = $row['profesor'];
                $_SESSION['registered'] = TRUE;
                $_SESSION['logged'] = TRUE;

            //LIBERAMOS LA MEMORIA EMPLEADA PARA HACER LA CONSULTA
                mysql_free_result($result);
                
            //REDIRECCIONAMOS A perfilUsuario.php
                header("Location: perfilUsuario.php");
                
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






