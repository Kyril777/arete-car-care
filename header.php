<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <title><?php bloginfo('name'); ?></title>

    <!-- Favicon. -->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>>/images/car-flat.png" />

    <!-- Style. -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>>/css/flexboxgrid.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>>/css/font-awesome.css">

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script type="application/javascript">
      $(document).ready(function(){
        $('ul li a').click(function(){
          $('li a').removeClass("active");
          $(this).addClass("active");
        });
      });
    </script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- HEADER. -->
    <header id="main-header">
      <div class="container">
        <div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">

          <!-- Logo. -->
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
            <h1><span class="primary-text">Arete</span> Car Care</h1>
          </div>
          <!-- Menu. -->
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
            <nav id="navbar">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </header>
