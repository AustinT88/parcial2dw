<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="container">


<a href="<?=base_url('/agregarVehiculos')?>" class="btn btn-success"  >Agregar Vehiculos</a>
<br>
<br>
 
    <h1>lista de vehiculos</h1>
   

    <table border="1" class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>id</th>
                <th>placa</th>
                <th>precio</th>
                <th>marca</th>
                <th>fechacompra</th>
                <th>acciones</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
        foreach($chonita as $vehi):
        ?>
            <tr>
                <td> <?php echo $vehi['id']?> </td>
                <td> <?php echo $vehi['placa']?> </td>
                <td> <?php echo $vehi['precio']?> </td>
                <td> <?php echo $vehi['marca']?> </td>
                <td> <?php echo $vehi['fechacompra']?> </td>
                <td>
                <a href="<?=base_url('editarVehiculo/' . $vehi['id'] )?>" class="btn btn-info" type="button">Editar</a> / 
                 <a href="<?=base_url('borrar/' . $vehi['id'] )?>" class="btn btn-danger" type="button">Borrar</a>   
                 </td>
            </tr>
           
        <?php
        endforeach;
        ?>

        </tbody>
    </table>

    </div>
</body>
</html>