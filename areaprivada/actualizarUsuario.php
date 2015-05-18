<?php

//SESION
session_start();
//CONEXION BASE DATOS.
include 'openDB.php';

//    /**
//     * Get either a Gravatar URL or complete image tag for a specified email address.
//     *
//     * @param string $email The email address
//     * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
//     * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
//     * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
//     * @param boole $img True to return a complete IMG tag False for just the URL
//     * @param array $atts Optional, additional key/value attributes to include in the IMG tag
//     * @return String containing either just a URL or a complete image tag
//     * @source http://gravatar.com/site/implement/images/php/
//     */
//    function get_gravatar($email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array()) {
//        $url = 'http://www.gravatar.com/avatar/';
//        $url .= md5(strtolower(trim($email)));
//        $url .= "?s=$s&d=$d&r=$r";
//        if ($img) {
//            $url = '<img src="' . $url . '"';
//            foreach ($atts as $key => $val)
//                $url .= ' ' . $key . '="' . $val . '"';
//            $url .= ' />';
//        }
//        return $url;
//    }

if (isset($_POST['Guardar'])) {
    move_uploaded_file($_FILES['avatar']['tmp_name'], "avatares/" . $_FILES['avatar']['name']);
    $sql = "UPDATE usuario "
            . "SET avatar='" . $_FILES['avatar']['name'] . "' "
            . "WHERE login='" . $_SESSION['correo'] . "' "
            . "AND password='" . $oldpassword . "'";
}

//if (isset($_POST['formavatar'])) { // Si cambiamos el avatar
//    
//   if (empty($_FILES['avatardavid']['tmp_name']) === false){
//       $file_ext = end(explode('.', $_FILES['avatardavid']['name']));
//       
//       if (in_array(strtolower($file_ext), array('jpg','jpeg', 'png', 'gif')) === false){
//          $errors[] = 'Your avatar must be an image'; 
//       }
//   }
//   
//    $avatar = $_POST['avatardavid'];
//   
//    $sql = "UPDATE usuario "
//                . "SET avatar='" . $avatar . "' "
//                . "WHERE login='" . $_SESSION['correo'] . "' "
//                . "AND password='" . $_POST['oldpass'] . "'";
//    
//    if(file_exists($avatar)){
//        $src_size= getimagesize($avatar);
//        
//        if($src_size['mime'] === 'image/jpeg'){
//            $src_img = imagecreatefromjpeg($avatar);
//        }else if($src_size['mime'] === 'image/png'){
//            $src_img = imagecreatefrompng($avatar);
//        }else if($src_size['mime'] === 'image/gif'){
//            $src_img = imagecreatefromgif($avatar);
//        }else{
//            $src_img = false;
//        }
//        
//        if($src_img !== false){
//            $thumb_width = 200;
//            
//            if($src_size[0] <= $thumb_width){
//                $thumb = $src_img;
//            }else{
//                $new_size[0] = $thumb_width;
//                $new_size[1] = ($src_size[1] / $src_size[0]) * $thumb_width;
//                
//                $thumb = imagecreatetruecolor($new_size[0], $new_size[1]);
//                imagecopyresampled($thumb, $src_img, 0, 0, 0, 0, $new_size[0], $new_size[1], $src_size[0], $src_size[1]);
//            }
//            
//            imagejpeg($thumb, "avatares/{$_SESSION['uid']}.jpg");
//        }
//        
//    }
//    
//    
//    if(!mysql_query($sql)){
//         header("Location: perfilUsuario.php?erroravatar");
//    }else{
//         header("Location: perfilUsuario.php?avatarmodified");
//    }
//    
/*} else */
    if ($_POST['Guardar']) { //Si guardamos sin cambiar el avatar
    //RECOGEMOS LOS DATOS DEL REGISTRO.  
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $login = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $oldpassword = $_POST['oldpass'];
    $newpassword = $_POST['newpass'];

    if ($oldpassword == $_SESSION['pass']) {
        $sql = "UPDATE usuario "
                . "SET login='" . $login . "', " .
                "password='" . $newpassword . "', " .
                "nombre='" . $nombre . "', " .
                "apellidos='" . $apellidos . "', " .
                "direccion='" . $direccion . "', " .
                "avatar='" . $avatar . "' "
                . "WHERE login='" . $_SESSION['correo'] . "' "
                . "AND password='" . $oldpassword . "'";




        if (mysql_query($sql)) {
            //ACTUALIZAMOS LOS DATOS DE LA SESION PARA MOSTRARLOS
            //CONSULTA DE LOS NUEVOS DATOS
            $result = mysql_query("SELECT * "
                    . "From usuario "
                    . "WHERE login = '" . $login . "' "
                    . "AND password= '" . $newpassword . "'", $con);

            $row = mysql_fetch_array($result);

            if (mysql_num_rows($result) == 1) {

                $_SESSION['idAlumno'] = $row['idAlumno'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellidos'] = $row['apellidos'];
                $_SESSION['correo'] = $row['login'];
                $_SESSION['direccion'] = $row['direccion'];
                $_SESSION['avatar'] = $row['avatar'];
                $_SESSION['pass'] = $row['password'];
                $_SESSION['modified'] = TRUE;
                $_SESSION['logged'] = TRUE;

                header("Location: perfilUsuario.php?modified=1");
            }
        } else {
            echo "Error updating record: " . mysql_error($con);
        }
    } else {
        header("Location: perfilUsuario.php?errormodificar=1");
    }
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
//        $sql = "UPDATE usuario SET login=".$login.", ".
//                                  "password=".$password.", ".
//                                  "nombre=".$nombre.", ".
//                                  "apellidos=".$apellidos.", ".
//                                  "direccion=".$direccion.", ".
//                                  "avatar=".$a.",";
//    }
//    
//    
//} 


