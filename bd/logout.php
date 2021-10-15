<?php
session_start();
//liberamos las variables de sesion con unset
unset($_SESSION['session']);
session_destroy();//destruimos la sesion
header('Location:../index.php') ;
?>