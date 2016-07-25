<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Catalogo de productos</title>
  </head>
  <body>
    Nombre <input type="text" id="name"><br/>
    Marca <input type="text" id="brand"><br/>
    Precio <input type="text" id="price"><br/>
    Stock <input type="text" id="stock"><br/>
    <button type="button" name="Guardar" id="save">Guardar</button>

    <h1>Catalogo de productos</h1>

    <div id="catalog-container">
      <table id="table-products" border="1">

      </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="./js/catalog.js"></script>
  </body>
</html>
