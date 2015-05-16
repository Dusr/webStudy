<?php
    if(isset($_POST['Guardar'])){
        move_uploaded_file($_FILES['avatar']['tmp_name'],"avatares/".$_FILES['avatar']['name']);
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

