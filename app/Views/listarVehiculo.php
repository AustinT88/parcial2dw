<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
<a href="<?=base_url('/agregarVehiculos')?>">Agregar Vehiculos</a>
<br>
<a href="<?=base_url('/borrarVehiculo')?>">Borrar Vehiculos</a>
<br>
 
    <h1>lista de vehiculos</h1>
   
    <table border="1" >
        <thead>
            <tr>
                <th>id</th>
                <th>placa</th>
                <th>precio</th>
                <th>marca</th>
                <th>fechacompra</th>
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
            </tr>
           
        <?php
        endforeach;
        ?>

        </tbody>
    </table>
</body>
</html>