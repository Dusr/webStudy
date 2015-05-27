<?php

session_start();

if (isset($_SESSION['logged'])) {
    include("./openDB.php");

    $titulo = $_POST["titulo"];
    $emisor = $_POST["emisor"];
    $receptor = $_POST["receptor"];
    $mensaje = $_POST["mensaje"];
    $archivo = $_POST["archivo"];

    $sql = "INSERT INTO mensaje (titulo, emisor, receptor, mensaje, archivo) VALUES (" . $titulo . "," . $receptor . "," . $emisor . "," . $mensaje . ")";
    if ($titulo != null && $titulo != "" &&
            $emisor != null && $emisor != "" &&
            $receptior != null && $receptor != "" &&
            $mensaje != null && $mensaje != "") {



        if (mysql_query($sql) or die(mysql_error())) {
         
            header("Location: perfilUsuario.php?mensaje_enviado");

        }
    }
}    