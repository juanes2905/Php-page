<?php 
    $host = "127.0.0.1"; 
    $usuario = "root"; 
    $password = "";
    $base_datos = "Db_Developerjuan"; 


    $conexion = mysqli_connect($host, $usuario, $password, $base_datos);

    if(!$conexion){
        //MENSAJE PARA VERLO DESDE LA WEB
        //die("ERROR AL CONECTAR A LA BASE DE DATOS: ".mysqli_connect_error());
        //MENSAJE PARA VERLO DESDE LA CONSOLA DEL NAVEGADOR USANDO JAVASCRIP 
        echo "<script>console.log('ERROR AL CONECTAR A LA BASE DE DATOS: " . mysqli_connect_error() . "');</script>";
    }else{
        //MENSAJE PARA VERLO DESDE LA WEB
        //echo 'LA CONEXION A LA BASE DE DATOS FUE EXITOSA';
        //MENSAJE PARA VERLO DESDE LA CONSOLA DEL NAVEGADOR USANDO JAVASCRIP 
        echo "<script>console.log('LA CONEXION A LA BASE DE DATOS FUE EXITOSA');</script>";

    } 
        
?>