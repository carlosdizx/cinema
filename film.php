<!DOCTYPE html>
<html lang="en">
<head>
    <title>One Movies an Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
          crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
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
                            <textarea class="form-control" name="sinopsis" placeholder="Sinopsis" ></textarea>
                        </div>
                        <br />
                        <input class="btn btn-success" type="submit" value="Agregar" name="agregar">
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

<