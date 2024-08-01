<?php
session_start(); 

// Limpiar las variables de sesión y destruir la sesión
$_SESSION = array();
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("location: ../View/login.php");
exit;
?>
