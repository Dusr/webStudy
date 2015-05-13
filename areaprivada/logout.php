<?php
//Abrir sesion
session_start();
//Cerrar sesion
session_destroy();

//Redireccionamos a index
header('Location: ../index.php');

?>