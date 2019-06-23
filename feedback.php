<html>
<head>
  <?php
    include_once 'bibl/bibl.html';
  ?>
  <meta name="description" content="Обратная связь сайта testphp.net. Данный проект создан для упрощения освоения серверного языка PHP.">
  <meta name="keywords" content="Обратная связь, test php, тестирование PHP кода онлайн">
  <title>Обратная связь с разработчиками, предложения по улучшению сайта testphp.net</title>
  <link href="css/back.css" rel="stylesheet">
  <script src="scripts/feed.js"></script>
</head>
<body>
  <?php
    include_once 'bibl/header.html';
  ?>
<div class="content">
  <div class="podl">
      <div class="form">
        <div id="w">
          <h1>Напишите нам!</h1>
          <form id="contactform" name="contact" method="post"  action="javascript:void(null);" onsubmit="call()">
            <p class="note"><span class="req">*</span> Поля со звездочкой обязательны для заполнения</p>
            <div class="row">
              <label for="name">Ваше Имя <span class="req">*</span></label>
              <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder=" Name" required>
            </div>

            <div class="row">
              <label for="email">E-mail Адрес <span class="req">*</span></label>
              <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder=" e-mail" required>
            </div>

            <div class="row">
              <label for="message">Сообщение <span class="req">*</span></label>
              <textarea name="message" id="message" class="txtarea" tabindex="4" required></textarea>
            </div>
            <div class="center">
              <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Отправить Сообщение">
            </div>
            <div class="center">
                Так же вы можете написать письмо на почту: support@testphp.net
            </div>
            <div id="results">

            </div>
          </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
