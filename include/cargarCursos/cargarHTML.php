<?php

include('../areaprivada/openDB.php');

//CONSULTA CURSO
$result = mysql_query("SELECT * "
        . "FROM curso "
        . "WHERE idCurso = 1", $con);

$row = mysql_fetch_array($result);

//Validamos si el curso existe en la base de datos
if (mysql_num_rows($result) == 1) {
    //Si el curso es correcto
    //Creamos sesión
    //session_start();
    //Almacenamos los datos de usuario en variables de sesión
    $_SESSION['idCurso'] = $row['idCurso'];
    $_SESSION['nombreCurso'] = $row['nombre'];
    $_SESSION['lenguaje'] = $row['lenguaje'];
    $_SESSION['duracion'] = $row['duracion'];
    $_SESSION['descripcion'] = $row['descripcion'];
} else {
    //SI NO ESTA EN LA BASE DE DATOS
    //header("Location: ../cursosOnline.php?curso");
    echo '<script>alert(' . mysql_num_rows($result) . ');</script>';
}

//CONSULTA MODULOS DEL CURSO
$modulos = mysql_query("SELECT * "
        . "FROM modulo "
        . "WHERE Curso_idCurso = 1", $con);


//CERRAMOS BASE DATOS
mysql_close();
?>