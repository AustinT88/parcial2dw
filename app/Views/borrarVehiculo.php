<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>

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
<br>
<br>
<h1>Elija el ID que quiere Borrar </h1>
<br>
   <form action="<?=base_url('/vehiculoBorrado/' . $vehi['id'])?>" method="post">
     <label for="txtid">Ingrese ID que quiere Borrar </label>
    <input type="text" name="txtid">
    <br>
    <input type="submit" value="Enviar" name="btnenviar">
    
    </form>
    
</body>
</html>