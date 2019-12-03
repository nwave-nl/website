<?php
http_response_code(404);
$pageURL = "404";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <!--    Zorgt ervoor dat de title reageerd op gedrag in website-->
    <?php  include "private/php/title.php"?>
    <title><?php echo $title ?></title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="public/images/main/favicon.png">
    <link rel="stylesheet" href="<?php echo  css("main"); ?>">
    <link rel="stylesheet" href="<?php echo css($pageURL); ?>">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="<?php echo js("nav"); ?>"></script>
</head>
<body>

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
<div class="background">
    <div class="relative">
        <div class="center">
            <svg id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1334 786.72">
                <defs>
                    <style>
                        .cls-1{
                            fill:#fff;
                        }
                    </style>
                </defs>
                <polygon class="cls-1" points="484.11 692.32 81.67 399.9 330.15 219.36 330.15 160.02 0 399.9 532.38 786.72 532.34 377.01 942.75 694.22 942.75 632.9 484.11 278.9 484.11 692.32"/>
                <polygon class="cls-1" points="1003.85 626.7 1334 386.82 801.62 0 802.13 408.89 391.72 92.5 391.72 594.54 439.96 628.9 439.96 190.6 942.75 578.13 942.75 516.81 942.75 417.07 942.75 192.87 894.51 157.81 894.51 480.02 850.37 445.68 850.37 94.74 1252.33 386.82 1003.85 567.36 1003.85 626.7"/>
            </svg>
            <div class="text">
                <h1>404. Pagina niet gevonden</h1>
                <h3><a href="<?php echo url("/"); ?>">Terug naar de vorige pagina »</a></h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>

