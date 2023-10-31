<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Khadija Bidari</title>
    <?php wp_head() ?>
</head>

<body>


<header>
        <nav id=navigation>
            <div class=logo-image>
                <!-- revnoi à l'url de la page d'accueil du site -->
                <a class="logo-site" href="<?php echo home_url(); ?>">
                K.B
                </a>

            </div>
            <div class="burgerMenu">
                <span class="line l1"></span>
                <span class="line l2"></span>
                <span class="line l3"></span>
            </div>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu', //specifie l'emplacement du menu à afficher
                'menu_class' => 'navbar-nav mr-auto menu-full',
                
            )); ?>
        </nav>
    </header>

    <main>