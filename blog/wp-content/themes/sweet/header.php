<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- {{-- icon lib --}} -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
</head>

<body id="home">

    <nav class="main-nav">
        <div class="container">
            <a href=""><img src="http://localhost/sweet-2/assets/images/logo.svg" alt=""></a>
            <i class='bx bx-menu'></i>
            <ul class="menu-links">
                <a href="http://localhost/sweet-2/#home" class="home-link">
                    <li>Home</li>
                </a>
                <a href="http://localhost/sweet-2/#about" class="about-link">
                    <li>About-us</li>
                </a>
                <a href="http://localhost/sweet-2/blog/" class="active">
                    <li>Blog</li>
                </a>
                <a href="http://localhost/sweet-2/#menu" class="menu-link">
                    <li>Menu</li>
                </a>
                <a href="http://localhost/sweet-2/#gallary" class="gallary-link">
                    <li>Gallary</li>
                </a>
                <a href="http://localhost/sweet-2/#prices" class="prices-link">
                    <li>Prices</li>
                </a>
                <a href="http://localhost/sweet-2/#contact" class="contact-link">
                    <li>Contact-us</li>
                </a>
            </ul>
        </div>
    </nav>