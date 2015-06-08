<?php

session_start();

if (isset($_SESSION['logged'])) {

    include("./openDB.php");


    $titulo = $_POST["title"];
    $emisor = $_POST["login"];
    $receptor = $_POST["receptor"];
    $mensaje = $_POST["mensaje"];

    $archivo = $_FILES["archivo"]["tmp_name"];
    $size = $_FILES["archivo"]["size"];
    $tipo = $_FILES["archivo"]["type"];
    $nombreArchivo = $_FILES["archivo"]["name"];

    
    if ($titulo != null && $titulo != "" &&
            $emisor != null && $emisor != "" &&
            $receptor != null && $receptor != "") {

        /* Preparando el archivo */
        $fp = fopen($archivo, "rb");
        $contenido = fread($fp, $size);
        $contenido = addslashes($contenido);
        fclose($fp);
     
        
            $sql = "INSERT INTO mensaje (titulo, login, receptor, mensaje, nb_archivo, contenido, tipo) VALUES ('" . $titulo . "','" . $emisor . "'," . $receptor . ",'" . $mensaje . "','" . $nombreArchivo . "','" . $contenido . "','" . $tipo . "')";
            
            if (mysql_query($sql)) { 
                /* Inserta en mensajes */
                
                header("Location: ./perfilUsuario_cursoActual.php?mensaje_enviado");
            }else{
                header("Location: ./perfilUsuario_cursoActual.php?withoutarchive");
                
            }
            
        }else{
            header("Location: ./perfilUsuario_cursoActual.php?notallfields");
        }
    
}else{
    header("Location: ../accederLogin.php");
}    