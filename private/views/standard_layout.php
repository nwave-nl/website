<html>
<head>
  <title>nwave • Wij creeëren websites voor u.</title>
  <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png">
  <link rel="stylesheet" href="<?php echo css('home'); ?>">
  <link rel="stylesheet" href="public/css/main.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="<?php echo js("nav"); ?>"></script>
</head>
<body>

<div class="nav">
    <div class="nav_left">
        <h2>nwave</h2>
    </div>
    <div class="nav_right">
        <ul>
            <li><a id="active" href="#">Home</a></li>
            <li><a href="#">Over ons</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Offerte</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</div>
      <?php

      echo $this->section('content')

      ?>
<div class="footer">

</div>
</body>
</html>
