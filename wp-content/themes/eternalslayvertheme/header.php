
<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!--<script type="text/javascript" src="scripts.js"></script>-->
</head>
<body>

<!-- MAIN CONTAINER -->
<div class="main__container">

<!-- HEADER -->
<header class="main-header">
    <!-- main-header__section -->
    <div class="l-container main-header__section">
        <div class="img-logo-content">
        <a href="home"><img class="img-logo" src="assets/img/Logo-ChipsDesings-Sep-2019.png" alt="Logo chips designs"></a>
        </div>
    
        <div class="navbar-toggle" id="navbar-toggle"></div>

        <?php 
            if('has_nav_menu'):
                wp_nav_menu(array(
                    'theme_location'    => 'main_menu',
                    'container'         => 'nav',
                    'container_class'   => 'main-navbar',
                    'container_id'      => 'main-navbar'
                ));
            else: ?>
                <nav class="main-navbar" id="main-navbar">
                    <ul class="navbar--menu">
                        <?php wp_list_pages('title_li'); ?>
                        <!-- ****** Menú estático
                        <li class="navbar__item"><a class="navbar__link" href="home">Home</a></li>
                        <li class="navbar__item" id="navbar__item"><a class="navbar__link servicios" id="servicios_link"        href="http://">Servicios</a>
                            <ul class="navbar--child" id="navbar--child">
                                <li class="navbar__item--child"><a class="navbar__link--child" href="diseño-web">Diseño web</       a></li>
                                <li class="navbar__item--child last-child"><a class="navbar__link--child"       href="consultor-seo">Posicionamiento SEO</a></li>
                            </ul>
                        </li>
                        <li class="navbar__item"><a class="navbar__link" href="chip-designs">Chip Designs</a></li>
                        <li class="navbar__item"><a class="navbar__link" href="portfolio">Portfolio</a></li>
                        <li class="navbar__item"><a class="navbar__link" href="contacto">Contacto</a></li>
                        -->
                    </ul>
                </nav>
            <?php endif; ?>

    </div>
    <!-- main-header__section end -->
</header>
<!-- HEADER END -->
    
<!-- MAIN CONTAINER -->
<main class="main"> 