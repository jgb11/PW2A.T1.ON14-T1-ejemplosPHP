<?php
session_start();
if (isset($_GET['ref']) && is_numeric($_GET['ref'])) {
  $ref = addslashes(strip_tags($_GET['ref']));

  $connection = new mysqli('localhost', 'root', '', 'ejemplos');
  $result = $connection->query("SELECT * FROM productos WHERE referencia = $ref");

  if ($result->num_rows == 0) {
    $_SESSION['msg'] = 'Producto no encontrado.';
    header('Location: catalogo.php');
    exit();
  }
  $producto = $result->fetch_assoc();

  $connection->close();

} else {
  $_SESSION['msg'] = 'Producto no válido.';
  header('Location: catalogo.php');
  exit();
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar producto</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
      <form class="form-horizontal" name="editar" action="update.php" method="post">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <i class="icon-calendar"></i>
            <h3 class="panel-title">Editar Producto</h3>
          </div>
        </div>
        <legend>Datos del producto</legend>
        <input type="hidden" class="form-control" name="referencia" value="<?php echo $ref; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label">Nombre</label>
          <div class="col-md-4">
            <input type="text" class="form-control" name="nombre" value="<?php echo $producto['nombre']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Marca</label>
          <div class="col-md-4">
            <input type="text" class="form-control" name="marca" value="<?php echo $producto['marca']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Precio</label>
          <div class="col-md-4">
            <input type="text" class="form-control" name="precio" value="<?php echo $producto['precio']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Stock</label>
          <div class="col-md-4">
            <input type="text" class="form-control" name="stock" value="<?php echo $producto['stock']; ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
           <div class="col-md-4">
               <button type="submit" class="btn btn-primary">Editar producto</button>
           </div>
       </div>
      </form>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
