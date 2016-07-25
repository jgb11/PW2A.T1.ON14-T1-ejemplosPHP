$(function() {
  console.log( 'ready!' );

  function retrieveTasks() {
    $.ajax({
      url: 'http://localhost/pc-laravel-tasks/public/api',
      dataType: 'json',
      success: function(data) {
        $('#tasks-container').html('');
        $('#tasks-container').append('<tr>');
        $('#tasks-container').append('<th>id</th>');
        $('#tasks-container').append('<th>task</th>');
        $('#tasks-container').append('<th>status</th>');
        $('#tasks-container').append('<th>author_id</th>');
        $('#tasks-container').append('<th>created_at</th>');
        $('#tasks-container').append('<th>updated_at</th>');
        $('#tasks-container').append('</tr>');
        for (var i = 0; i < data.length; i++) {
          $('#tasks-container').append('<tr><td>' + data[i].id + '</td><td>' + data[i].task + '</td><td>' + data[i].status + '</td><td>' + data[i].author_id + '</td><td>' + data[i].created_at + '</td><td>' + data[i].updated_at + '</td></tr>');
        }
      },
      error: function() {
        alert('Error al recuperar las tareas');
      }
    });
  }

  retrieveTasks();

  setInterval(retrieveTasks, 60000);

});
