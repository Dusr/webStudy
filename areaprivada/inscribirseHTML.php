<?php
session_start();

if (isset($_SESSION['logged'])) {
    include("../areaprivada/openDB.php");

    $idCurso = $_POST['id'];

    $sql = "INSERT into alumno_has_curso VALUES (" . $_SESSION['idAlumno'] . "," . $idCurso . ",0)";

    //INSERTAMOS 
    $result = mysql_query($sql, $con);


    if ($result) {
        //REDIRECCIONAMOS AL CURSO OTRA VEZ perfilUsuario.php
        header("Location: ../cursosOnline/cursoHtmlBasico.php?inscribed");
    } else {
        //SI NO INTRODUCE LOS DATOS CORRECTAMENTE REDIRECCIONAMOS A accederLogin.php
        header("Location: ../cursosOnline/cursoHtmlBasico.php?notinscribed");
    }
} else {
    header("Location: ../accederLogin.php?nologgeduser");
}