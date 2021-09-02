<?php
    include("docs/conexion.php");
    if (isset($_POST['registrar']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        //echo $email ."-" . $password . "-" . $nombres . "-" . $apellidos;

        $query = "INSERT INTO usuarios (nombres, apellidos, correo, password) VALUES
                ('$nombres','$apellidos','$email','$password');";
        $sql = mysqli_query($conexion,$query);
        if (!$sql){
            echo json_encode(["mensaje"=>"No se pudo registrar, ".$conexion->error]);
        }
        else
        {
            $_SESSION['usuario'] = "Bienvenido ".$nombres;
            header("Location:/cinema");
        }
    }