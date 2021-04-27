<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    <h1>Agregar Vehiculo</h1>
    <form action="<?=base_url('/guardarVehiculos')?>" method="post">
     <label for="txtplaca">Placa:</label>
    <input type="text" name="txtplaca">
    <br>
    <label for="txtprecio">Precio:</label>
    <input type="text" name="txtprecio">
    <br>
    <label for="txtmarca">Marca:</label>
    <input type="text" name="txtmarca">
    <br>
    <label for="txtfechacompra">fecha de compra:</label>
    <input type="date" name="txtfechacompra">
    <br>
    <input type="submit" value="Enviar" name="btnenviar">
    
    </form>
</body>
</html>