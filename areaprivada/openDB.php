<?php

$DB_SERVER = 'localhost';

$DB_NAME = 'webstudy';

$DB_USER = 'project';

$DB_PASS = 'project';

//Conexion con la base de datos
$con = mysql_connect($DB_SERVER, $DB_USER, $DB_PASS);

//Seleccionamos la base de datos
mysql_select_db($DB_NAME,$con);

mysql_query("SET NAMES 'UTF8'");

?>