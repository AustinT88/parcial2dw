<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="card">
        <div class="card-body">
    <h1>Iniciar Sesión</h1>
    <form action="<?=base_url('/guardarVehiculos')?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label for="txtplaca">Placa:</label>
    <input type="text" name="txtplaca" class="form-control">
    <br>
    <label for="txtprecio">Precio:</label>
    <input type="text" name="txtprecio" class="form-control">
    <br>
     <input type="submit" value="Guardar Vehiculo" name="btnenviar" class="btn btn-success">
    </div>
    </form>
    </div>
    </div>

</body>
</html>