<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pokemons</title>
  </head>
  <body>
    Nombre <input type="text" id="name"><br/>
    <button type="button" name="Buscar" id="search-pokemon">Buscar</button>

    <h1>Pokemon</h1>

    <div id="pokemon-container">
      Nombre: <span id="nombre-pokemon"></span><br/>
      Tipo: <span id="tipo-pokemon"></span>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="./js/pokemons.js"></script>
  </body>
</html>
