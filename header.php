<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wbc
 */

global $varCurrentPage;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<main id="main" class="page-contact" role="main">

	<header id="header" role="banner" class="<?=$varCurrentPage?>">
	
	<section id="nav">
		<div class="row wrapper">
			<div class="wordandbrown-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?= get_template_directory_uri(); ?>/img/logo-medid.svg" alt=""></a>
			</div>
		    <div id="menu-icon">
		        <span></span>
		    </div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</section>

	