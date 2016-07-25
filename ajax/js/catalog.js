$(function() {
  console.log( 'ready!' );

  function retrieve() {
    /*
    $.ajax({
      url: 'retrieveProducts.php',
      dataType: 'html',
      success: function(data) {
        $('#catalog-container').html(data);
      },
      error: function() {
        alert('Error al recuperar los productos');
      }
    });
    */
    $.ajax({
      url: 'create-json.php',
      dataType: 'json',
      success: function(data) {
        $('#table-products').html('');
        $('#table-products').append('<tr>');
        $('#table-products').append('<th>Referencia</th>');
        $('#table-products').append('<th>Nombre</th>');
        $('#table-products').append('<th>Marca</th>');
        $('#table-products').append('<th>Precio</th>');
        $('#table-products').append('<th>Stock</th>');
        $('#table-products').append('</tr>');
        for (var i = 0; i < data.length; i++) {
          $('#table-products').append('<tr><td>' + data[i].referencia + '</td><td>' + data[i].nombre + '</td><td>' + data[i].marca + '</td><td>' + data[i].precio + '</td><td>' + data[i].stock + '</td></tr>');
        }
      },
      error: function() {
        alert('Error al recuperar los productos');
      }
    });
  }

  retrieve();

  setInterval(retrieve, 60000);

  $('#save').on('click', function() {
    var $nombre = $('#name').val();
    var $marca = $('#brand').val();
    var $precio = $('#price').val();
    var $stock = $('#stock').val();

    $.ajax({
      url: 'saveProduct.php',
      method: 'post',
      data: {
        nombre: $nombre,
        marca: $marca,
        precio: $precio,
        stock: $stock
      },
      success: function() {
        retrieve();
        $('#name').val('');
        $('#brand').val('');
        $('#price').val('');
        $('#stock').val('');
      },
      error: function() {
        alert('Error al guardar el producto');
      }
    });
  });
});
