<?php

        $busquedaSql="";                                       
        $nomCurso="";
        $mesFecha="";
        
       
        $nomCurso=$_GET['nombreCurso'];
       // $modali_Curso=$_POST['modalidad'];
        $mesFecha=$_GET['mes_Select'];
     include '/areaprivada/openDB.php'; // conexion
     // consultas
    if ($nomCurso!="" && $nomCurso!="Nombre del curso")
    {
         //echo'<p>'.$nomCurso.'</p>';
      $busquedaSql=mysql_query("select * from curso where nombre like '".mysql_real_escape_string($nomCurso)."'")or die (mysql_error());
    }
//                                     
    if ($mesFecha!="")
    {
       //echo'<p>'.$mesFecha.'</p>';
      $busquedaSql=mysql_query("select * from curso where duracion like '".mysql_real_escape_string($mesFecha)."'") or die (mysql_error());
      
    }
    


?>

