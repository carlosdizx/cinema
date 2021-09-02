<?php
    include("docs/conexion.php");
    if (isset($_POST['registrar']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        echo $email ."-" . $password . "-" . $nombres . "-" . $apellidos;
    }