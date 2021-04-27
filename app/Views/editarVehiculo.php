<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <?php
    print_r ($vehiculo)
    ?>

    <h1>EDITAR VEHICULOS</h1>
    
    <div class="card">
        <div class="card-body">

    <form action="<?=base_url('/actualizarVehiculos')?>" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="id" value="<?=$vehiculo['id']?>">

    <div class="form-group">
    <label for="txtplaca">Placa:</label>
    <input type="text" value="<?=$vehiculo['placa']?>" name="txtplaca" class="form-control">
    <br>
    <label for="txtprecio">Precio:</label>
    <input type="text" value="<?=$vehiculo['precio']?>" name="txtprecio" class="form-control">
    <br>
    <label for="txtmarca">Marca:</label>
    <input type="text" value="<?=$vehiculo['marca']?>" name="txtmarca" class="form-control">
    <br>
    <label for="txtfechacompra">fecha de compra:</label>
    <input type="date" value="<?=$vehiculo['fechacompra']?>" name="txtfechacompra" class="form-control">
    <br>
    <input type="submit" value="Actualizar" name="btnenviar" class="btn btn-success">
    </div>
    </form>
    </div>
    </div>
    

</body>
</html>