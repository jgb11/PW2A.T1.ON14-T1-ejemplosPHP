$(function() {
  console.log( 'ready!' );

  $('#search-pokemon').on('click', function(){
    var $pokemon = $('#name').val();
    $.ajax({
      url: 'http://pokeapi.co/api/v2/pokemon/' + $pokemon,
      dataType: 'json',
      success: function(data) {
        $('#nombre-pokemon').html(data.name);
        $('#tipo-pokemon').html(data.types[0].type.name);
        $('#name').val('');
      },
      error: function() {
        alert('Error al recuperar los datos');
      }
    });
  });
});
