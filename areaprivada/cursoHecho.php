<?php
session_start();

if (isset($_SESSION['logged'])) {
    include("../areaprivada/openDB.php");

    $idCurso = $_GET['id'];

    $sql = "UPDATE alumno_has_curso SET done=1 where Alumno_idAlumno=".$_SESSION['idAlumno'];

    //UPDATE 
    $result = mysql_query($sql, $con);

    if ($result) {
        //REDIRECCIONAMOS AL CURSO OTRA VEZ al curso
        if ($idCurso == 1){
            header("Location: ../cursosOnline/cursoHtmlBasico.php");
        }else if ($idCurso == 2){
            header("Location: ../cursosOnline/cursoCss.php");
        }else if ($idCurso == 3){
            header("Location: ../cursosOnline/cursoJavascript.php");
        }else if ($idCurso == 4){
            header("Location: ../cursosOnline/cursoPrestashop.php");
        }else{
            header("Location: ../areaprivada/perfilUsuario.php");
        }
        
    } else {
        //SI NO INTRODUCE LOS DATOS CORRECTAMENTE
        if ($idCurso == 1){
            header("Location: ../cursosOnline/cursoHtmlBasico.php");
        }else if ($idCurso == 2){
            header("Location: ../cursosOnline/cursoCss.php");
        }else if ($idCurso == 3){
            header("Location: ../cursosOnline/cursoJavascript.php");
        }else if ($idCurso == 4){
            header("Location: ../cursosOnline/cursoPrestashop.php");
        }else{
            header("Location: ../areaprivada/perfilUsuario.php");
        }
        
    }
} else {
    header("Location: ../accederLogin.php?nologgeduser");
}
