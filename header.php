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
        <a href="/" title="Ir a la portada" class="titol"><h1><?php bloginfo('name') ?></h1></a>
    </div>
    <!-- NAVWALKER -->
    <div class="nine">
        <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
    </div>
</nav>
</div>
