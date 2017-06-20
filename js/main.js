$( document ).ready(function() {
    console.log( 'ready!' );
    $('#changeColor').on('click', function(){
      $('#text').css('color', 'red');
    });

    $('#loadData').on('click', function(){
      $.ajax({
        url: 'data.php',
        dataType: 'html',
        success: function(data) {
          $('#container').html(data);
        }
      });
    });

    $('#clearData').on('click', function(){
      $('#container').html('');
    });

    $('#retrieveTasks').on('click', function(){
      $.ajax({
        url: 'retrieveTasks.php',
        dataType: 'html',
        success: function(data) {
          $('#tasksContainer').html(data);
        }
      });
    });
});
