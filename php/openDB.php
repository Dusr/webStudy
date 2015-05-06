<?php

$DB_SERVER = 'localhost';

$DB_NAME = 'webstudy';

$DB_USER = 'david';

$DB_PASS = 'segur1dad';

//Conexion con la base de datos
$con = mysql_connect($DB_SERVER, $DB_USER, $DB_PASS);

//Seleccionamos la base de datos
mysql_select_db($DB_NAME,$con);

?>