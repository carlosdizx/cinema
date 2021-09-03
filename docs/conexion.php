<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cinema";

    // Conectar a la base de datos
    $conexion = new mysqli($servername,$username,$password,$database)
    or die("Conexion fallida".$conexion->connect_error);
?>
