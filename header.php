<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
  	<i class="fa fa-bars fa-2x hamburger"></i>
    <nav class="clearfix">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'social-media-header'
      )); ?>
    </nav>
    <div class="main-heading"
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <h1><?php bloginfo( 'name' ); ?></h1>
      </a>
    </div>
  </div> <!-- /.container -->
</header><!--/.header-->

