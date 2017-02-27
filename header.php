<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kicksim
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,900" rel="stylesheet">
<!-- <script src="https://use.fontawesome.com/d28374772b.js"></script> -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="wrapper">
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kicksim' ); ?></a>

		<?php if (is_front_page()) : ?>
		<header id="masthead" class="site-header home" role="banner">
		<?php else : ?>
		<header id="masthead" class="site-header" role="banner">
		<?php endif; ?>
			<div class="site-header--content">
					<div class="top-bar">
						<div class="container top-bar--container">
								<div class="logo">
									<?php
									if ( function_exists( 'the_custom_logo' ) ) {
										the_custom_logo();
									}
									?>
								</div>
								<nav id="site-navigation" class="main-navigation" role="navigation">
									<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
										<span class="menu-toggle__bars"></span>
										<?php esc_html_e( '	', 'kicksim' ); ?>
									</button>
									<ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
										<li class="menu-item"><a href="http://localhost/wordpress/">Home</a></li>
										<li class="menu-item"><a href="#o-que-e-o-kicksim">O que é o KickSIM</a></li>
										<li class="menu-item"><a href="#como-usar">Como usar</a></li>
										<li class="menu-item"><a href="http://localhost/wordpress/contato/">Contato</a></li>
									</ul>
								</nav><!-- #site-navigation -->
								<div class="social-media">
									<span class="follow-us">Siga-nos: </span>
									<a href="#">
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
									</a>
									<a href="#">
										<i class="fa fa-linkedin-square" aria-hidden="true"></i>
									</a>
								</div> <!-- .social-media -->
						</div> <!-- .container -->
					</div> <!-- .top-bar -->