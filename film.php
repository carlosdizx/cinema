<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
          crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <?php include("docs/conexion.php"); ?>
</head>
<body>
        <div class="container p-4">
        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <input class="form-control" type="text" name="nombre" placeholder="Nombre de la pelicula" required />
                                <br />
                                <input disabled value="Fecha de estreno">
                                <input class="form-control" type="date" name="fecha" required />
                                <br />
                                <input class="form-control" type="text" name="trailer" placeholder="Trailer" required />
                                <br />
                                <input class="form-control" type="text" name="director" placeholder="Director" required />
                                <br />
                                <input class="form-control" type="text" name="ruta_img" placeholder="URL imagen" required />
                                <br />
                                <textarea class="form-control" name="sinopsis" placeholder="Sinopsis" required ></textarea>
                                <br />
                                <input disabled value="Tipo de film">
                                <select name="tipo" class="form-control">
                                    <?php
                                    $query="SELECT * FROM tipos;";
                                    $sql=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($sql)){ ?>
                                        <option value="<?= $row['id'];?>"><?= $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <input disabled value="Genero">
                                <select name="genero" class="form-control">
                                    <?php
                                    $query="SELECT * FROM generos;";
                                    $sql=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($sql)){ ?>
                                        <option value="<?= $row['id'];?>"><?= $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <input disabled value="Plataforma">
                                <select name="plataforma" class="form-control">
                                    <?php
                                    $query="SELECT * FROM plataformas;";
                                    $sql=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($sql)){ ?>
                                        <option value="<?= $row['id'];?>"><?= $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <input disabled value="Pais">
                                <select name="pais" class="form-control">
                                    <?php
                                    $query="SELECT * FROM paises;";
                                    $sql=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($sql)){ ?>
                                        <option value="<?= $row['id'];?>"><?= $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <input class="btn btn-success" type="submit" value="Agregar" name="agregar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>Listado de pelisculas</strong>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
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

        echo $tipo."-".$genero."-".$plataforma."-".$pais;

        /*
        $query = "INSERT INTO films (nombre, fecha, trialer, director, sinopsis, ruta_img, genero, tipo, pais, plataforma)  VALUES
                    ('$nombre','$fecha','$trailer','$director','$sinopsis');";
        */
    }