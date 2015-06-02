<?php

/* Script descargar_archivo.php */


include("./openDB.php");

 $consulta = "SELECT tipo, contenido FROM archivos WHERE id=".$_GET['id'];
 $res = mysql_query($consulta);
 $tipo = mysql_result($res, 0, "tipo");
 $contenido = mysql_result($res, 0, "contenido");

 header("Content-type: $tipo");
 print $contenido; 