<?php

session_start();

if (isset($_SESSION['logged'])) {

    include("./openDB.php");


    $titulo = $_POST["title"];
    $emisor = $_POST["emisor"];
    $receptor = $_POST["receptor"];
    $mensaje = $_POST["mensaje"];

    $archivo = $_FILES["archivo"]["tmp_name"];
    $size = $_FILES["archivo"]["size"];
    $tipo = $_FILES["archivo"]["type"];
    $nombreArchivo = $_FILES["archivo"]["name"];

    
    if ($titulo != null && $titulo != "" &&
            $emisor != null && $emisor != "" &&
            $receptor != null && $receptor != "" &&
            $archivo != null) {

        /* Preparando el archivo */
        $fp = fopen($archivo, "rb");
        $contenido = fread($fp, $size);
        $contenido = addslashes($contenido);
        fclose($fp);
     
        $queryArchivo = "INSERT INTO archivos (nombre,titulo,contenido,tipo,receptor) VALUES
                ('" . $nombreArchivo . "','" . $titulo . "','" . $contenido . "','" . $tipo . "',".$receptor.")";

        if (mysql_query($queryArchivo)) {
            /* Si inserta el archivo */
            $sql = "INSERT INTO mensaje (titulo, emisor, receptor, mensaje, archivo) VALUES ('" . $titulo . "','" . $emisor . "'," . $receptor . ",'" . $mensaje . "','" . $archivo . "')";
            
            if (mysql_query($sql) or die(mysql_error())) { 
                /* Inserta en mensajes */
                
                header("Location: ./perfilUsuario.php?mensaje_enviado");
            }
            
        }
    } else {
        header("Location: ./perfilUsuario.php?withoutarchive");
    }
}else{
    header("Location: ../accederLogin.php");
}    