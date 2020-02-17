<?php
$url = $_SERVER['REQUEST_URI'];
$parts = Explode('/', $url);
$pageURL = $parts[count($parts) - 1];
?>
<!DOCTYPE html>
<html lang="nl">
<head>

    <!--SEO-->
    <meta name="copyright"
          property="copyright"
          content="Copyright © nwave - All Rights Served" />
    <meta name="description"
          property="description"
          content="Wij zijn nwave, een verfrissend en nieuw bedrijf wat zich bezighoudt met het ontwerpen en developen van websites." />
    <meta name="title"
          property="title"
          content="nwave - Wij creeëren websites voor jou!" />
    <meta name="keywords"
          property="keywords"
          content="nwave, websites, seo, develop, development, webdevelopment, website, marco bruijns, jelle stekelenburg, yeno reus," />
    <meta name="robots"
          content="index, follow" />

    <meta name="theme-color" content="#ff824c" />


    <!--Zorgt ervoor dat de title reageerd op gedrag in website-->
    <?php  include "private/php/title.php"?>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo image("main/favicon.png")?>">
    <link rel="stylesheet" href="<?php echo css("home"); ?>">
    <link rel="stylesheet" href="<?php echo  css("main"); ?>">
    <link rel="stylesheet" href="<?php echo css($pageURL); ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo js("nav"); ?>"></script>
    <script src="<?php echo js("hamburgermenu"); ?>"></script>
</head>
<body>
    <div class="long-menu">
        <nav class="nav">
            <div class="nav_left">
                <h2><a href="<?php echo url("/"); ?>">nwave</a></h2>
            </div>
            <div class="nav_right">
                <ul>
                    <li><a <?php if($pageURL == "") {echo "id='active'";} ?> href="<?php echo url("/"); ?>">Home</a></li>
                    <li><a <?php if($pageURL == "over-ons") {echo "id='active'";} ?> href="<?php echo url("/over-ons"); ?>">Over ons</a></li>
                    <li><a <?php if($pageURL == "projecten") {echo "id='active'";} ?> href="<?php echo url("/projecten"); ?>">Projecten</a></li>
                    <li><a <?php if($pageURL == "offerte-aanvragen") {echo "id='active'";} ?> href="<?php echo url("/offerte-aanvragen"); ?>">Offerte</a></li>
                    <li><a <?php if($pageURL == "contact") {echo "id='active'";} ?> href="<?php echo url("/contact"); ?>">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

        <div class="hamburger-menu">
            <header>
                <span>nwave</span>
                <button class="hamburger">&#9776;</button>
                <button class="cross">&#735;</button>
            </header>

            <div class="menu">
                <ul>
                    <li><a <?php if($pageURL == "") {echo "id='active'";} ?> href="<?php echo url("/"); ?>">Home</a></li>
                    <li><a <?php if($pageURL == "over-ons") {echo "id='active'";} ?> href="<?php echo url("/over-ons"); ?>">Over ons</a></li>
                    <li><a <?php if($pageURL == "projecten") {echo "id='active'";} ?> href="<?php echo url("/projecten"); ?>">Projecten</a></li>
                    <li><a <?php if($pageURL == "offerte-aanvragen") {echo "id='active'";} ?> href="<?php echo url("/offerte-aanvragen"); ?>">Offerte</a></li>
                    <li><a <?php if($pageURL == "contact") {echo "id='active'";} ?> href="<?php echo url("/contact"); ?>">Contact</a></li>
                </ul>
            </div>
        </div>

      <?php

      echo $this->section('content')

      ?>

<footer class="footer">
  <div class="footer_grid">
    <div class="footer_grid-1">
      <h2>Contact</h2>
      <ul>
        <li><a href="https://github.com/nwave-nl">Github</a></li>
        <li><a href="https://www.linkedin.com/company/31411281">Linkedin</a></li>
        <li><a href="mailto:contact@nwave.nl">Mail</a></li>
      </ul>
    </div>
    <div class="footer_grid-2">
      <h2>Pagina's</h2>
      <ul>
        <li><a href="<?php echo url("/"); ?>">Home</a></li>
        <li><a href="<?php echo url("/over-ons"); ?>">Over ons</a></li>
        <li><a href="<?php echo url("/projecten"); ?>">Projecten</a></li>
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
