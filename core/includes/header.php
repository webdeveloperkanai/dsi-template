<!-- Header Page -->
<?php
function dsi_header($title)
{
    require "config.php";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/demo.css">
    </head>

    <body>
        <main>
            <section class="section-1">
                <nav>
                    <div class="nav-main">
                        <div class="nav-logo">
                            <a href="index"><img src="https://rvs-indiebrew-landing-page.vercel.app/Assets/Logo.svg" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="signup">Get Started - <span>It's free</span></a></li>
                        </ul>
                        <div class="nav-mobile-menu" id="nav-mobile-menu">
                            <img src="https://rvs-indiebrew-landing-page.vercel.app/Assets/Hamburger-Menu.svg" alt="">
                        </div>
                    </div>
                </nav>

                <nav class="mobile-menu">
                    <ul>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="signup">Get Started - <span>It's free</span></a></li>
                    </ul>
                </nav>
            <?php
        }
