<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("../Control/validaLogin.php"); ?>
    <h1>BIENVENIDO <?php echo $_SESSION['usuario']['Nombre'] ?></h1>
    <a href="../Control/finalySession.php">Cerrar sesión</a>
</body>
</html>
