<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario AJAX</title>
  </head>
  <body>
    Base: <input type="text" id="base" placeholder="Escribe el primer valor"><br/>
    Altura: <input type="text" id="altura" placeholder="Escribe el segundo valor"><br/>
    <button type="button" id="calculate">Calcular</button>

    <div id="result">

    </div>

    Filas: <input type="text" id="rows" placeholder="Escribe el primer valor"><br/>
    Columnas: <input type="text" id="columns" placeholder="Escribe el segundo valor"><br/>
    <button type="button" id="createTable">Tabla</button>

    <div id="table">

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="./js/form.js"></script>
  </body>
</html>
