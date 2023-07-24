<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("select * from productos where  	ID_Producto=$id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<form class="col-4 p-4 m-auto" method="POST">
  <h3 class="text-center text-secodary">Modificar Producto</h3>
  <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
  <?php
  include  "controlador/modificarPro.php";
    while($datos=$sql->fetch_object()){?>
    <div class="form-group">
        <label for="nombreProducto">Nombre del Producto:</label>
        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" required value="<?=$datos->Nombre_Producto ?>">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required ><?= $datos->Descripcion ?></textarea>
      </div>
      <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required value="<?=$datos->Precio   ?>">
      </div>
      <div class="form-group">
        <label for="cantidadStock">Cantidad en Stock:</label>
        <input type="number" class="form-control" id="cantidadStock" name="cantidadStock" required  value="<?=$datos->Cantidad_Stock    ?>">
      </div>

    <?php }
  ?>
      
      <button type="submit" class="btn btn-primary p-3"name="btnregistrar" value="ok">Modificar Producto</button>
    </form>
</body>
</html>