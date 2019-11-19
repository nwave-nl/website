<html>
<head>
  <title>nwave - Wij creëren websites voor u.</title>
  <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png">
  <link rel="stylesheet" href="<?php echo css('home'); ?>">
  <link rel="stylesheet" href="<?php echo css('over'); ?>">
  <link rel="stylesheet" href="public/css/main.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="<?php echo js("nav"); ?>"></script>
</head>
<body>
      <?php

      echo $this->section('content')

      ?>
<div class="space_before_footer"></div>
<div class="footer">
  <div class="footer_grid">
    <div class="footer_grid-1">
      <h2>Contact</h2>
      <ul>
        <li><a href="/">Github</a></li>
        <li><a href="">Linkedin</a></li>
        <li><a href="">Instagram</a></li>
        <li><a href="mailto:contact@nwave.nl">Mail</a></li>
      </ul>
    </div>
    <div class="footer_grid-2">
      <h2>Pagina's</h2>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="">Over ons</a></li>
        <li><a href="">Portfolio</a></li>
        <li><a href="">Offerte</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </div>
    <div class="footer_grid-3">
      <h2>Informatie</h2>
      <ul>
        <li><a>Contactweg 36</a></li>
        <li><a>1014AN Amsterdam</a></li>
        <li><a>contact@nwave.nl</a></li>
      </ul>
    </div>
  </div>
  <p>Copyright © 2019 nwave</p>
</div>
</body>
</html>
