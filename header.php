<!DOCTYPE html>
<html lang="en">
<head>
  <script data-ad-client="ca-pub-3639773116001251" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

  <div class="container">

  <!-- site header -->
  <header class="site-header"> 
    <!-- <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
    <h5><?php bloginfo('description'); ?></h5> -->

    <nav class="site-nav">
      <?php
        $args = array('theme_location' => 'primary');
      ?>
      <?php wp_nav_menu($args); ?>
    </nav>
  </header>