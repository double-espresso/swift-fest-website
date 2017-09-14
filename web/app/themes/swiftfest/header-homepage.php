<!doctype html>
<!--[if lt IE 9]> <html class="no-js lt-ie10 lt-ie9" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <title><?php wp_title( '//', true, 'right' ); ?> <?php echo get_bloginfo('name') ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png" />

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <body id="body_homepage" <?php body_class(); ?>>

    <div class="preloader">
        <div class="loader-inner">
            <div class="bg-2"></div>
            <div class="middle-div">
                <div class="inner"> <img class="loaderGif" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/swiftloader.gif" alt="Image"> </div>
            </div>
        </div>
        <!-- end inner --> 
    </div>
    
    <!-- end preloader -->
    <div class="page-transition">
        <div class="inner"></div>
    </div>
    <!-- end page-transition -->

    <header class="hide-for-tablet-down">
      <div class="row">
        <div class="medium-2 columns">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="header_logo"><?php echo get_bloginfo('name') ?></a>
        </div>
        <div class="medium-7 columns">
          <nav class="primary">
            <?php wp_nav_menu( array( 'menu' => '', 'primary' ) ); ?>
          </nav>
        </div>
        <div class="medium-3 columns">          
          <div class="header_button">
            <a href="https://www.eventbrite.com/e/swiftfest-2017-tickets-37370599469" title="But Tickets" class="squared-button white hero_button">Buy Tickets</a>
          </div>
        </div>
      </div>

      <div class="button_nav_mobile">
        <div class="button_hamburger">
          <span class="hamburger_line"></span>
          <span class="hamburger_line"></span>
          <span class="hamburger_line"></span>
        </div>
      </div>
    </header>

    <!-- NAVBAR MOBILE -->
    <header class="mobile row hide-for-large-up">
      <div class="mobile__toggleMenu">
        <div class="button-nav">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </div>
      </div>
      <a href="<?= esc_url(home_url('/')); ?>" class="header__logo"><?php bloginfo('name'); ?></a>
    </header>

    <div class="container-nav-mobile hide-for-large-up">
      <div class="mobile">
        <?php wp_nav_menu( array( 'menu' => '', 'primary' ) ); ?>
      </div>
    </div>
    <!-- END NAVBAR MOBILE -->

    <?php //get_search_form(); ?>