<html>
<head>
  <?php
    include_once 'bibl/bibl.html';
  ?>
  <script src="scripts/script.js"></script>
  <title>Test PHP - Тестирование кода PHP онлайн</title>
  <meta name="description" content="С помощью данного сервиса вы сможете выполнять свой код PHP онлайн. Тестировать небольшие куски PHP кода.">
  <meta name="keywords" content="Тестирование PHP кода,php online,phptester,PHP,php онлайн,сервер PHP,test php,php testing,зрз онлайн,пхп онлайн, выполнить PHP">
</head>
<body>
  <?php
    include_once 'bibl/header.html';
  ?>
  <div class="content">
    <div style="float:left; width:0%; height:75%; margin-top:20px;"></div>
    <div class="podl">
      <div class="php_test">
          <div style="width:100%; text-align: center; margin-top:-10px;">
              <!--<script language="JavaScript" charset="UTF-8" src="http://z1520.takru.com/in.php?id=1521154"></script>-->
<!--              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
<!-- Block top -->
<!--<ins class="adsbygoogle"-->
<!--     style="display:inline-block;width:728px;height:90px"-->
<!--     data-ad-client="ca-pub-7526595922932477"-->
<!--     data-ad-slot="8265922621"></ins>-->
<!--<script>-->
<!--(adsbygoogle = window.adsbygoogle || []).push({});-->
<!--</script>-->
            <a href="http://www.seosprint.net/?ref=11039064" target="_blank"><img src="http://www.seosprint.net/baners/seobaner1.gif" width="468" height="60" border="0" alt="SEO sprint - Всё для максимальной раскрутки!" /></a>  
          </div>
        
          <!--<span style="float: left;width: 100%;margin-top: -10px;">Нужен дополнительный заработок дома или тебе нужно раскрутить сайт SEO? <a target="_blank" rel="nofollow" href="http://www.seosprint.net/?ref=10662649">Заходи и регистрируйся! seosprint.net</a> </span>-->
        <!--<span style="float: left;width: 100%;margin-top: -10px;">Нужен клиент SOAP? <a target="_blank" rel="nofollow" href="http://soap-web.com/">Заходи и тестируй: http://soap-web.com/</a></span>-->
        <textarea id="code" class="php_input" placeholder="Введите свой PHP код"></textarea>
        <div class="btn_c" style="float: left;width: 6%;height: 90%;">
            <button type="button" onclick="yaCounter44672860.reachGoal('run'); return this;" class="btn_php_search">Run</button>
            <button type="button" class="btn_hor"><i class="glyphicon glyphicon-th-list"></i></button>
        </div>
        <textarea readonly class="php_res" placeholder="Результат"></textarea>
      </div>
      <h1>Оставьте свой комментарий!</h1>
  <!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

<script type="text/javascript">
  VK.init({apiId: 6134448, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
</script>
    </div>
  </div>
  <script>
  $(document).ready(function() {
     $('.btn_hor').click(function() {
       // $(".topBlock").css({"top":"5px", "left":"0"}) 
        $(".CodeMirror").css({"width":"100%", "height":"45%"});
        $(".php_res").css({"width":"100%", "height":"45%"});
        $(".btn_c").css({"width":"90%", "height":"15%"});
        $('.btn_php_search').css({"margin":"5px 5px 0px 5px"});
     });
  });
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true, // Нумеровать каждую строчку.
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 2, // Длина отступа в пробелах.
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
      });
  </script>
</body>
</html>