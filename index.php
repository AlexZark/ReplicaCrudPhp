<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
</head>
<body>
    
<h1 class="text-center p-3">Productos de Limpieza</h1>
<?php 
  include "modelo/conexion.php";
include "controlador/Eliminar.php";
?>
<div class="container-fluid row">
<form class="col-4 p-4" method="POST">
  <h3 class="text-center text-secodary">Formulario de Requisitos de Producto de Limpieza</h3>
  <?php
  include "modelo/conexion.php";
  include "controlador/registro_producto.php";
  ?>
      <div class="form-group">
        <label for="nombreProducto">Nombre del Producto:</label>
        <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" required>
      </div>
      <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
      </div>
      <div class="form-group">
        <label for="cantidadStock">Cantidad en Stock:</label>
        <input type="number" class="form-control" id="cantidadStock" name="cantidadStock" required>
      </div>
      <button type="submit" class="btn btn-primary p-3"name="btnregistrar" value="ok">Agregar Producto</button>
    </form>
    <div class="col-8 p-4">
    <h3 class="text-center text-secodary">Tabla de Productos de Limpieza</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID del Producto</th>
          <th>Nombre del Producto</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Cantidad en Stock</th>
          <th>Acciones</th> <!-- Nueva columna para los botones de editar y eliminar -->
        </tr>
      </thead>
      <tbody>
        <!-- Ejemplo de una fila de datos -->
        <?php
        include "modelo/conexion.php";
        $sql=$conexion->query("select * from productos");
        while($datos=$sql->fetch_object()){?>
 <tr>
          <td><?= $datos->ID_Producto ?></td>
          <td><?= $datos->Nombre_Producto ?></td>
          <td><?= $datos->Descripcion ?></td>
          <td><?= $datos->Precio ?></td>
          <td><?= $datos->Cantidad_Stock ?></td>
          <td>
            <!-- Botones de editar y eliminar -->
            <a href="modificar.php?id=<?= $datos->ID_Producto ?>" class="btn btn-primary">Editar</a>
            <a href="index.php?id=<?= $datos->ID_Producto ?>" class="btn btn-danger">Eliminar</a>

          </td>
        </tr>
    <?php
        }
        ?>
       
        <!-- Puedes agregar más filas aquí con datos de la base de datos -->
      </tbody>
    </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</body>
</html>