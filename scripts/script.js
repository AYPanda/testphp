  $(document).ready(function() {
    editor.setValue('<?php \necho "Hello!";');
    $('.btn_php_search').click(function () {
      input = editor.getValue();
      error_check = false;
      if (input.indexOf("<?php") == -1) {
        input = "<?php "+input;
      }
      if (input.indexOf("echo") == -1 && input.indexOf("print_r") == -1) {
          error_check = true;
      }
      $.ajax({
        type: "POST",
        url: "test.php",
        data: { input : input },
        success: function(data) {
          console.log(data);
          if (data === "") {
             result = 'Сервер вернул пустой ответ!';
             if (error_check === true) {
                 result += '\nВозможно у вас нет вывода на экран. "echo" или "print_r()"';
             }
             result += '\n\nПо всем вопросам обращайтесь в обратную связь';
          } else {
              result = data;
          }
          $('.php_res').html(result);
        }
      });
    });
  });
