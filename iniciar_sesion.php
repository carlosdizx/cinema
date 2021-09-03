<?php
    include("docs/conexion.php");
    if (isset($_POST['iniciar']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM usuarios WHERE correo='$email' AND password = '$password';";
        $sql = mysqli_query($conexion,$query);
        $campos = mysqli_fetch_array($sql);
        if (!$sql){
            echo "<script>alert('No se ha podido ejecutar consulta')</script>";
        }
        else
        {
            if (!$campos)
            {
                echo "<script>alert('Usuario incorrecto')</script>";
            }
            else
            {
                $_SESSION['usuario'] = "Bienvenido ".$campos['nombres'];
            }
            header("Location:/cinema");
        }
    }