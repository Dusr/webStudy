<?php

include('openDB.php');

if(isset($_GET['borrarMsg']))
                                {
                                $borrar = mysql_escape_string($_GET['borrarMsg']);
                                $sql_query="DELETE FROM mensaje WHERE id={$borrar}";
                                mysql_query($sql_query);
                                echo "<p>No tienes ningún mensaje. </p>";
                                header("location:perfilUsuario_cursoHecho.php");
                                exit();
                                }
?>