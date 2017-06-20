$( document ).ready(function() {
    console.log( 'ready!' );

    $('#calculate').on('click', function(){
      var base = $('#base').val();
      var altura = $('#altura').val();
      $.ajax({
        url: 'areaTri.php',
        dataType: 'text',
        method: 'post',
        data: {
          base: base,
          altura: altura
        },
        success: function(data) {
          $('#result').html(data);
        },
        error: function() {
          alert('Error al realizar el cálculo');
        }
      });
    });

    $('#createTable').on('click', function(){
      var rows = $('#rows').val();
      var columns = $('#columns').val();
      $.ajax({
        url: 'createTable.php',
        dataType: 'html',
        method: 'post',
        data: {
          rows: rows,
          columns: columns
        },
        success: function(data) {
          $('#table').html(data);
        },
        error: function() {
          alert('Error al crear la tabla');
        }
      });
    });
});
