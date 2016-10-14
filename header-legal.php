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

	<header id="header" role="banner" class="legal">
	
	<section id="nav">
		<div class="row wrapper">
			<div class="wordandbrown-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?= get_template_directory_uri(); ?>/img/logo-medid.svg" alt=""></a>
			</div>
		    <div id="menu-icon">
		        <span></span>
		    </div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div id="primary-menu" class="menu">
					<ul>
						<li class="page_item current_page_item">
							<a href="<?= get_template_directory_uri(); ?>/MedID/">Legal Header</a>
						</li>
						<li class="page_item">
							<a href="<?= get_template_directory_uri(); ?>/Support/">Support</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="<?= get_template_directory_uri(); ?>/img/assets/play-store-white.svg" alt="">
							</a>
						</li>
						<li class="page_item">
							<a href="">
								<img src="<?= get_template_directory_uri(); ?>/img/assets/app-store-white.svg" alt="">
							</a>
						</li>
			</nav><!-- #site-navigation -->
		</div>
	</section>

	</header>

	