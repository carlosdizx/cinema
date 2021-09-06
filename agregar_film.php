<?php
include("docs/conexion.php");
if (isset($_POST['agregar']))
{
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $trailer = $_POST['trailer'];
    $director = $_POST['director'];
    $ruta_img = $_POST['ruta_img'];
    $sinopsis = $_POST['sinopsis'];
    $tipo = $_POST['tipo'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $pais = $_POST['pais'];

    $query = "INSERT INTO films (nombre, fecha, trialer, director, sinopsis, ruta_img, genero, tipo, pais, plataforma)  VALUES
                        ('$nombre','$fecha','$trailer','$director','$sinopsis','$ruta_img','$tipo','$genero','$pais','$plataforma');";
    if (!mysqli_query($conexion, $query))
    {
        echo "<script>alert('No se pudo registrar')</script>";
    }
    else
    {
        header("Location:/cinema/film.php");
    }
}
