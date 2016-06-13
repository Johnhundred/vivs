<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <!-- Designed & Developed by Particle Designs - particledesigns.dk -->
    <title><?php bloginfo( 'name' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar col-md-12 top-nav" data-spy="affix">
  <div class="container-fluid">
    <ul class="nav navbar-nav center-block">
      <li><a href="#about">About</a></li>
      <li><a href="#ideology">Ideology</a></li>
      <li><a href="#inspiration">Inspiration</a></li>
      <li class="logo-li"><a href="#carousel"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="alt text" class="nav-logo"/></a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#social">Social</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid page-container col-md-12"><!-- page-container -->

