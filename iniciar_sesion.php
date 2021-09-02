<?php
    include("docs/conexion.php");
    if (isset($_POST['iniciar']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email ."-".$password;
    }