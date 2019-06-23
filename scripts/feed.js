function call() {
var msg   = $('#contactform').serialize();
    $.ajax({
      type: 'POST',
      url: 'scripts/php/letter.php',
      data: msg,
      success: function(data) {
        console.log(data);
        $('#results').html(data);
      },
      error:  function(xhr, str){
        alert('Возникла ошибка: ' + xhr.responseCode);
      }
    });
}
