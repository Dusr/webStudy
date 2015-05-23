<?php

include('../areaprivada/openDB.php');

//CONSULTA CURSO
$result = mysql_query("SELECT * "
        . "FROM curso "
        . "WHERE idCurso = 5", $con);

$row = mysql_fetch_array($result);

//Validamos si el curso existe en la base de datos
if (mysql_num_rows($result) == 1) { //Si esta inscrito
  
        
    //Almacenamos los datos del curso en variables de sesión
    $idCurso = $row['idCurso'];    
    $nombreCurso = $row['nombre'];
    $lenguaje = $row['lenguaje'];
    $duracion = $row['duracion'];
    $descripcion = $row['descripcion'];
    $_SESSION['inscribed'] = TRUE;
}

//CONSULTA MODULOS DEL CURSO
$modulos = mysql_query("SELECT * "
        . "FROM modulo "
        . "WHERE Curso_idCurso = 5", $con);

//CERRAMOS BASE DATOS
mysql_close();

?>