<?php

/* Script descargar_archivo.php */


include("./openDB.php");

 $consulta = "SELECT tipo, contenido FROM mensaje WHERE id=".$_GET['id'];
 $res = mysql_query($consulta);
 $tipo = mysql_result($res, 0, "tipo");
 $contenido = mysql_result($res, 0, "contenido");
 $nb=$_GET['nb'];
 
 header("Content-Description: File Transfer");
 header("Content-Type: $tipo");
 header("Content-Disposition: attachment; filename=$nb");  
 header("Content-Transfer-Encoding: binary");  
 header("Expires: 0");  
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");  
 header("Pragma: public");  
 header("Content-Length: ".filesize($contenido));  
 

print $contenido; 
 //readfile($contenido);