<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css" />

</head>

<body class="home">

    <!-- Layout: header -->
    <header class="home__header">

        <!-- Component: menu -->
        <nav class="menu">
            <div class="menu__title">
                <a href="<?= get_home_url() ?>">
                    <img class="menu__title__image" src="<?= get_theme_file_uri('public/images/logonav.png') ?>" alt="">
                </a>
            </div>

<?php
astronomeet_theme_nav_menu('main-menu');
?>
        </nav>
    </header>