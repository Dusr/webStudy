<?php

        $busquedaSql="";                                       
        $nomCurso="";
        $mesFecha="";
        $modali_Curso="";
        
       
        $nomCurso=$_GET['nombreCurso'];
        $modali_Curso=$_GET['modalidad'];
        $mesFecha=$_GET['mes_Select'];
        /*
        if (isset($_REQUEST['nombreCurso'])) {
            $nomCurso = $_REQUEST['nombreCurso'];
        } else {
            $nomCurso = "";
        }
        */
        //@$nomCurso = $_GET['nombreCurso'];
        
       // @$nomCurso = isset($_GET['nombreCurso']) ? $_GET['nombreCurso'] : null ;
        
     include '/areaprivada/openDB.php'; // conexion
     // consultas
    if ($nomCurso!="" && $nomCurso!="Nombre del curso")
    {
      //echo'<p>'.$nomCurso.'</p>';
      $busquedaSql=mysql_query("select * from curso where nombre like '".mysql_real_escape_string($nomCurso)."'")or die (mysql_error());
    }
//                                     
    if ($mesFecha!="" && $mesFecha!="todos")
    {
       //echo'<p>'.$mesFecha.'</p>';
      $busquedaSql=mysql_query("select * from curso where comienzoCurso like '".mysql_real_escape_string($mesFecha)."'") or die (mysql_error());
      
    }
    
    if ($modali_Curso!="" && $modali_Curso!="todas")
    {
      // echo'<p>'.$modali_Curso.'</p>';
      $busquedaSql=mysql_query("select * from curso where modalidad like '".mysql_real_escape_string($modali_Curso)."'") or die (mysql_error());
      
    }
    


?>

