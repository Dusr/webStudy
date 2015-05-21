<?php
session_start();

if (isset($_SESSION['logged'])) {
    include("../areaprivada/openDB.php");

    $idCurso = $_POST['id'];

    $sql = "INSERT into alumno_has_curso VALUES (" . $_SESSION['idAlumno'] . "," . $idCurso . ",0)";

    //INSERTAMOS 
    $result = mysql_query($sql, $con);


    if ($result) {
        //REDIRECCIONAMOS AL CURSO OTRA VEZ al curso
        if ($idCurso == 1){
            header("Location: ../cursosOnline/cursoHtmlBasico.php?inscribed");
        }else if ($idCurso == 2){
            header("Location: ../cursosOnline/cursoCss.php?inscribed");
        }else if ($idCurso == 3){
            header("Location: ../cursosOnline/cursoJavascript.php?inscribed");
        }else if ($idCurso == 4){
            header("Location: ../cursosOnline/cursoPrestashop.php?inscribed");
        }else{
            header("Location: ../areaprivada/perfilUsuario.php");
        }
        
    } else {
        //SI NO INTRODUCE LOS DATOS CORRECTAMENTE
        if ($idCurso == 1){
            header("Location: ../cursosOnline/cursoHtmlBasico.php?notinscribed");
        }else if ($idCurso == 2){
            header("Location: ../cursosOnline/cursoCss.php?notinscribed");
        }else if ($idCurso == 3){
            header("Location: ../cursosOnline/cursoJavascript.php?notinscribed");
        }else if ($idCurso == 4){
            header("Location: ../cursosOnline/cursoPrestashop.php?notinscribed");
        }else{
            header("Location: ../areaprivada/perfilUsuario.php");
        }
        
    }
} else {
    header("Location: ../accederLogin.php?nologgeduser");
}