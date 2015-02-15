<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ontrei
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site wrapper">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ontrei' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="site-branding">
      <map name="header-map">
        <area shape="rect" coords=715,155,975,335 href="<?php echo esc_url( home_url( '/' ) ); ?>">
      </map>
      <div class="mainlogo">
        <img src="<?php bloginfo('template_directory'); ?>/images/night_header.jpg" usemap=#header-map class="header">
      </div>
    </div>

    <nav id="site-navigation" class="main-navigation" role="navigation">
      <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'ontrei' ); ?></button>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
