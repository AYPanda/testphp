  $(document).ready(function() {
    editor.setValue('<?php \necho "Hello!";');
    $('.btn_php_search').click(function () {
      input = editor.getValue();
      error_check = false;
      if (input.indexOf("<?php") == -1) {
        input = "<?php "+input;
      }
      if (input.indexOf("<script>") != -1) {
       //input = input.match("script");
        //input = input.replace("<script>","");
        //input = input.replace("</script>","");
      }
      if (input.indexOf("echo") == -1 && input.indexOf("print_r") == -1) {
          error_check = true;
      }
      $.ajax({
        type: "POST",
        url: "../test.php",
        data: { input : input },
        success: function(data) {
          console.log(data);
          //res = JSON.parse(data);
          /*if (res.message) {
          $('.php_res').html(res.message);
        }*/
          if (data === "") {
             result = 'Empty answer';
             if (error_check === true) {
                 result += '\nPerhaps there is no output on the screen. "echo" or "print_r()"';
             }
             result += '\n\Have a question? Contact us';
          } else {
              result = data;
          }
          $('.php_res').html(result);
        }
      });
    });
  });
