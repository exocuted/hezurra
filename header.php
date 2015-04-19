<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/skeleton.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">
  <title>
    <?php
      if( ! is_home() ):
        wp_title( '|', true, 'right' );
      endif;
      bloginfo( 'name' );
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
<nav class="nav-main row">
    <div class="logoWrapper three columns">
        <a href="/hezurra" title="Ir a la portada" class="titol"><h1><?php bloginfo('name') ?></h1></a>
    </div>
    <!-- NAVWALKER -->
    <div class="nine columns menu-desktop">
        <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
    </div>
    <div class="menu-mobile">
        <div class="botoMenu" onclick="toggleMenu()">
          Menu
        </div>
    </div>
</nav>
<div class="links-menu-mobile" id="menu-responsive">
  <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
</div>

</div>
