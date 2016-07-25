<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>El Tiempo</title>
  </head>
  <body>
    Ciudad: <input type="text" name="City" id="city">
    <button type="button" id="weather">Obtener Tiempo</button>

    <h1>El Tiempo</h1>

    <div id="weather-container">
      Ciudad: <span id="ciudad"></span><br/>
      Temperatura: <span id="temp"></span><br/>
      Presion: <span id="presion"></span><br/>
      Humedad: <span id="humedad"></span><br/>
      Descripción: <span id="desc"></span><br/>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="./js/weather.js"></script>
  </body>
</html>
