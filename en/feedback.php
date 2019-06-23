<html>
<head>
  <?php
    include_once 'bibl/bibl.html';
  ?>
  <meta name="descriprion" content="Site feedback testphp.net. This project is designed to simplify the development of the server language PHP.">
  <meta name="keywords" content="feedback, test php, php online">
  <title>Feedback from developers, suggestions for improving the site testphp.net</title>
  <link href="../css/back.css" rel="stylesheet">
  <script src="../scripts/feed.js"></script>
</head>
<body>
  <?php
    include_once 'bibl/header.html';
  ?>
<div class="content">
  <div class="podl">
      <div class="form">
        <div id="w">
          <h1>Write me!</h1>
          <form id="contactform" name="contact" method="post"  action="javascript:void(null);" onsubmit="call()">
            <p class="note"><span class="req">*</span>Fields with an asterisk are required</p>
            <div class="row">
              <label for="name">Your name <span class="req">*</span></label>
              <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder=" Name" required>
            </div>

            <div class="row">
              <label for="email">E-mail <span class="req">*</span></label>
              <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder=" e-mail" required>
            </div>

            <div class="row">
              <label for="message">Message <span class="req">*</span></label>
              <textarea name="message" id="message" class="txtarea" tabindex="4" required></textarea>
            </div>
            <div class="center">
              <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Send message">
            </div>
            <div class="center">
                Also you can write a letter to the mail: support@testphp.net
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
