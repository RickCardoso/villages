<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Villages_by_DR_Studio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="page-wrapper">

			<div class="site-info">
				<div class="logo-link">
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo_grayscale.png" alt="Villages">
					</a>
				</div>
				<div class="footer-nav">
					<?php
						wp_nav_menu( array(
							'theme_location' 		=> 'menu-1',
							'menu_id'        		=> 'footer-menu',
							'container_id'			=> 'footer-navbar',
							) );
							?>
					<div class="legal">
						<span>&copy; 2017 - Villages</span>
						<span>Privacy Policy &bullet; Terms of Service</span>
					</div>
				</div>
				<div class="footer-social">

				<?php

				$menu_name = 'menu-2';

				if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
					
					$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
					
					$menu_items = wp_get_nav_menu_items($menu->term_id); ?>
				
					<ul class="social-navbar">
				
					<?php foreach ( (array) $menu_items as $key => $menu_item ) : ?>

						<li class="nav-item">
							<a class="nav-link" href="<?php echo $menu_item->url; ?>"><i class="fab fa-<?php echo $menu_item->title; ?><?php echo ($menu_item->title == 'facebook' ? '-f' : ''); ?>" aria-hidden="true"></i></a>
						</li>

					<?php endforeach; ?>

					</ul>

				<?php endif; ?>

				</div>
			</div><!-- .site-info -->

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
