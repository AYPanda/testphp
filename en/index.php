<html>
<head>
  <?php
    include_once 'bibl/bibl.html';
  ?>
  <script src="scripts/script.js"></script>
  <title>Test PHP - Testing PHP online</title>
  <meta name="descriprion" content="This test php executes the server code without starting the server. This saves time, and it is easier for beginners to learn a new programming language. Testing PHP code online.">
  <meta name="keywords" content="test php, php online, phptester, PHP, test, server PHP, php testing, php online test, online PHP">
</head>
<body>
  <?php
    include_once 'bibl/header.html';
  ?>
  <div class="content">
     <div style="float:left; width:16%; height:75%; margin-top:20px;">

</div>
    <div class="podl">
      <div class="php_test">
          <span style="float: left;width: 100%;margin-top: -10px;">Need an SOAP client? <a target="_blank" rel="nofollow" href="http://soap-web.com/">Go: http://soap-web.com/</a></span>
        <textarea id="code" class="php_input" placeholder="Enter your PHP code"></textarea>
        <button type="button" onclick="yaCounter44672860.reachGoal('run'); return this;" class="btn_php_search">Run</button>
        <textarea readonly class="php_res" placeholder="Result"></textarea>
        </div>
      </div>
    </div>
  </div>
  <script>
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
