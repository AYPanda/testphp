$(document).ready(function() {
  $('#but_cl').click(function(){
    inp_b = $('#inp_b').val();
    $('#err').html('');
    if (inp_b != '') {
      $("#but_cl").button('loading')
      $.ajax({
        type: 'POST',
        data: { inp_b },
        url: 'soap_run.php',
        success: function(response) {
          $("#but_cl").button('reset');
          res = JSON.parse(response);
          tt = '';
          for (i=0; i<res[0].length; i++) {
            tt += '<div class="row"><div class="col-md-12"><a href="#">'+res[0][i]+'</a></div></div>';
          }
          $('.functions').html(tt);
          console.log(res);
        }
      })
    } else {
      $('#err').html('Empty WSDL URL');
    }
  });
});
