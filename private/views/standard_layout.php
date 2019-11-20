<?php
$url = $_SERVER['REQUEST_URI'];
$parts = Explode('/', $url);
$pageURL = $parts[count($parts) - 1];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>nwave - Wij creëren websites voor u.</title>
    <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png">
    <link rel="stylesheet" href="<?php echo css('home'); ?>">
    <link rel="stylesheet" href="<?php echo css('over'); ?>">
    <link rel="stylesheet" href="<?php echo  css("main"); ?>">
    <link rel="stylesheet" href="<?php echo  css("contact"); ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="<?php echo js("nav"); ?>"></script>
</head>
<body>
<nav class="nav">
    <div class="nav_left">
        <h2>nwave</h2>
    </div>
    <div class="nav_right">
        <ul>
            <li><a <?php if($pageURL == "") {echo "id='active'";} ?> href="<?php echo url("/"); ?>">Home</a></li>
            <li><a <?php if($pageURL == "over-ons") {echo "id='active'";} ?> href="<?php echo url("/over-ons"); ?>">Over ons</a></li>
            <li><a <?php if($pageURL == "portfolio") {echo "id='active'";} ?> href="<?php echo url("/portfolio"); ?>">Portfolio</a></li>
            <li><a <?php if($pageURL == "offerte-aanvragen") {echo "id='active'";} ?> href="<?php echo url("/offerte-aanvragen"); ?>">Offerte</a></li>
            <li><a <?php if($pageURL == "contact") {echo "id='active'";} ?> href="<?php echo url("/contact"); ?>">Contact</a></li>
        </ul>
    </div>
</nav>

      <?php

      echo $this->section('content')

      ?>

<footer class="footer">
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
        <li><a href="<?php echo url("/"); ?>">Home</a></li>
        <li><a href="<?php echo url("/over-ons"); ?>">Over ons</a></li>
        <li><a href="<?php echo url("/portfolio"); ?>">Portfolio</a></li>
        <li><a href="<?php echo url("/offerte-aanvragen"); ?>">Offerte</a></li>
        <li><a href="<?php echo url("/contact"); ?>">Contact</a></li>
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
  <p>Copyright © <?php echo date("Y"); ?> nwave</p>
</footer>
</body>
</html>
