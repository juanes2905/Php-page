<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include("../Model/conexion.php");

if (!empty($_POST["verificacion"])) {
    if (empty($_POST["Correo"]) || empty($_POST["Contraseña"])) {
        echo "LOS CAMPOS SE ENCUENTRAN VACIOS";
        echo "<script>console.log('LOS CAMPOS SE ENCUENTRAN VACIOS');</script>";
    } else {
        $Correo = $_POST["Correo"];
        $Contraseña = $_POST["Contraseña"];

        
        $stmt = $conexion->prepare("SELECT * FROM Users WHERE Correo=? AND Contraseña=?");
        $stmt->bind_param("ss", $Correo, $Contraseña);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows > 0) {
            
            $usuario = $res->fetch_assoc();

            $_SESSION['usuario'] = $usuario;
            
            header("location: ../View/inicio.php");
        } else {
            echo "ACCESO DENEGADO";
            echo "<script>console.log('ACCESO DENEGADO');</script>";
        }
    }
}
?>
