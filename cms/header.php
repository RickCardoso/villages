<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Villages_by_DR_Studio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'villages' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="page-wrapper">

			<nav id="site-navigation" class="main-navigation">

				<nav class="navbar navbar-expand-lg">

					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;
						
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
					
					<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#primary-navbar" aria-controls="primary-navbar"
						aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
					<!-- <div class="collapse navbar-collapse" id="collapsibleNavId">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact Us</a>
							</li>
						</ul>
					</div> -->
					<?php
						wp_nav_menu( array(
							'theme_location' 		=> 'menu-1',
							'menu_id'        		=> 'primary-menu',
							'menu_class'				=> 'navbar-nav',
							'container_id'			=> 'primary-navbar',
							'container_class'		=> 'collapse navbar-collapse',
							) );
							?>


					<?php

					$menu_name = 'menu-2';

					if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
						
						$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						
						$menu_items = wp_get_nav_menu_items($menu->term_id); ?>
						
						<nav id="social-navbar">
							<ul class="nav navbar-nav">
						
							<?php foreach ( (array) $menu_items as $key => $menu_item ) : ?>

								<li class="nav-item">
									<a class="nav-link" href="<?php echo $menu_item->url; ?>"><i class="fab fa-<?php echo $menu_item->title; ?><?php echo ($menu_item->title == 'facebook' ? '-f' : ''); ?>" aria-hidden="true"></i></a>
								</li>

							<?php endforeach; ?>

							</ul>
						</nav>

					<?php endif; ?>
	
					<a href="#" class="btn-std btn-blue">Join Now</a>
	
					<a href="#" class="btn-std btn-blue outline">Login</a>

				</nav>

			</nav><!-- #site-navigation -->

		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
