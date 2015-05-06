<?php

session_start();

if($_SESSION['logged']== TRUE){
?>

    id: <?php echo $_SESSION['idAlumno']; ?>
    nombre: <?php echo $_SESSION['usuario']; ?>
    apellidos: <?php echo $_SESSION['apellidos']; ?>
    avatar: <?php echo $_SESSION['avatar']; ?>

<?php
}//end IF
?>