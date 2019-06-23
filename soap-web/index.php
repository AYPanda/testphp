<html>
<head>
  <meta charset="utf-8" />
  <title>Online SOAP client - WSDL Browser</title>
  <meta name="description" content="Client SOAP online.">
  <meta name="keywords" content="SOAP, client, online, WSDL">
  <script src="../scripts/jquery-3.1.1.min.js"></script>
  <link href="../css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Suez+One" rel="stylesheet">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="scripts/script_q.js"></script>
  <link rel="icon" href="http://testphp.net/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="http://testphp.net/favicon.ico" type="image/x-icon" />
  <style>
  #err {
    color: red;
    font-size: 16px;
    font-weight: bold;
    margin-top: 5px;
  }
  </style>
</head>
<body>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  w.yaCounter44672860 = new Ya.Metrika2({
                      id:44672860,
                      clickmap:true,
                      trackLinks:true,
                      accurateTrackBounce:true,
                      webvisor:true
                  });
              } catch(e) { }
          });

          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () { n.parentNode.insertBefore(s, n); };
          s.type = "text/javascript";
          s.async = true;
          s.src = "https://mc.yandex.ru/metrika/tag.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks2");
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/44672860" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
  <!-- <script src="scripts/bookmark.js"></script> -->
    <header>
      <div id="logo">
           <h1 style="margin:5px; font-family: 'Suez One', serif;">SOAP client</h1>
      </div>
      <!--<div id="auth">-->
        <!--<a href="#" style="color:#fff;float: right;text-align: right;margin-right: 5px;" onclick="return add_favorite(this);"><h5 style="margin-top:3px;">Добавить сайт <br />в Закладки</h5></a>-->
        <!-- <a href="#">Вход/Авторизация</a> -->
      <!--</div>-->
    </header>
    <div class="menu">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">TestPhp</a></li>
        <li><a href="index.php">SOAP Client</a></li>
        <li><a href="../about_client.php">Как пользоваться</a></li>
        <li><a href="../feedback.php">Обратная связь</a></li>
        <li><a href="../donate.php">Помощь проекту</a></li>
      </ul>
    </div>

  <div class="content">
    <div style="float:left; width:16%; height:75%; margin-top:20px;"></div>
    <div class="podl">
      <div class="php_test">
          <div style="width:100%; text-align: center; margin-top:-10px;">


          </div>
        <h1 style="text-align:center">Client SOAP Online</h1>
        <div class="row">
          <div style="width:100%; text-align: center;">
            <input type="text" id="inp_b" class="form-control" placeholder="WSDL URL" style="width:70%; display:inline-block;"/> <input class="btn btn-primary" data-loading-text="Загрузка..." id="but_cl" type="button" value="Get Metods"/>
            <br /><div id="err"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 functions">
            
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
