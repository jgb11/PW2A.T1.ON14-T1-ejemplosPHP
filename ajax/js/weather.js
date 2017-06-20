$( document ).ready(function() {
    console.log( 'ready!' );

    $('#weather').on('click', function(){
      var ciudad = $('#city').val();
      $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/weather?q=' + ciudad + ',es&appid=dcaaeb00a7560ae66f0f64161b53d709',
        dataType: 'json',
        success: function(data) {
          $('#temp').html(data.main.temp);
          $('#ciudad').html(data.name);
          $('#humedad').html(data.main.humidity + '%');
          $('#presion').html(data.main.pressure);
          $('#desc').html(data.weather[0].description);

          $('#city').val('');
        },
        error: function() {
          alert('Error al obtener el tiempo');
        }
      });
    });
});
