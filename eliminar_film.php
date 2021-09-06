<?php
include("docs/conexion.php");
if(isset($_GET['eliminar']))
{
    $id = $_GET['eliminar'];
    $query = "DELETE FROM films WHERE id = '$id';";
    if (!mysqli_query($conexion, $query))
    {
        echo "<script>alert('No se pudo eliminar')</script>";
    }
    else
    {
        header("Location:/cinema/film.php");
    }
}
