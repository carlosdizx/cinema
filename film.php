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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="btn btn-secondary" href="index.php">
                <span class="mdi mdi-arrow-left">Volver</span>
            </a>
        </div>
    </nav>
        <div class="container p-4">
        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="agregar_film.php" method="post" autocomplete="off">
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
                                    $consulta=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($consulta)){ ?>
                                        <option value="<?= $row['id'];?>"><?= $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <input disabled value="Genero">
                                <select name="genero" class="form-control">
                                    <?php
                                    $query="SELECT * FROM generos;";
                                    $consulta=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($consulta)){ ?>
                                        <option value="<?= $row['id'];?>"><?= $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <input disabled value="Plataforma">
                                <select name="plataforma" class="form-control">
                                    <?php
                                    $query="SELECT * FROM plataformas;";
                                    $consulta=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($consulta)){ ?>
                                        <option value="<?= $row['id'];?>"><?= $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                                <br />
                                <input disabled value="Pais">
                                <select name="pais" class="form-control">
                                    <?php
                                    $query="SELECT * FROM paises;";
                                    $consulta=mysqli_query($conexion, $query);
                                    while($row=mysqli_fetch_array($consulta)){ ?>
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
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>Detalles</th>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Genero</th>
                                    <th>Pais</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $sql = "SELECT f.id,f.nombre,t.nombre AS tipo,g.nombre AS genero,p.nombre AS pais,pl.nombre AS plataforma FROM films f
                                    INNER JOIN tipos t ON f.tipo = t.id
                                    INNER JOIN generos g ON f.genero = g.id
                                    INNER JOIN paises p ON f.pais = p.id
                                    INNER JOIN plataformas pl ON f.plataforma = pl.id;";
                                $consulta=mysqli_query($conexion,$sql)or die(mysqli_error($conexion));
                                while($row=mysqli_fetch_array($consulta)){
                            ?>
                                <tr>
                                    <td>
                                        <a class="btn btn-primary" href="single.php?id=<?=$row['id']?>">
                                            <span class="mdi mdi-eye"></span>
                                        </a>
                                    </td>
                                    <td><?=$row['nombre']?></td>
                                    <td><?=$row['tipo']?></td>
                                    <td><?=$row['genero']?></td>
                                    <td><?=$row['pais']?></td>
                                    <td>
                                        <a class="btn btn-danger" href="eliminar_film.php?eliminar=<?=$row['id']?>">
                                            <span class="mdi mdi-trash-can-outline"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>