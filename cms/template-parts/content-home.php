<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Villages_by_DR_Studio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php villages_post_thumbnail(); ?>

	<div class="entry-content">
		
		<section class="jumbotron jumbotron-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/jumbo-bg.png');">
			<div class="container">
				<h1 class="display-3">
					<img src="<?php echo get_template_directory_uri(); ?>/img/everyone.png" alt="EVERYONE">
					<span>has value</span>
					<span><strong>to share!</strong></span>
				</h1>
				<form action="">
					<input type="text" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<p class="smallprint">By clicking Sign Up, I agree to the Terms of Service and Privacy Policy.</p>
					<div class="btn-wrapper">
						<a href="#" class="btn-std btn-white">Join Now</a>
						<input class="btn-std btn-white outline" type="submit" value="Login">
						<a href="#">Login with facebook</a>
					</div>
				</form>
				<a href="#how-it-works">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mouse.png" alt="scroll down">
				</a>
			</div>
		</section>

		<section id="how-it-works">
			<div class="page-wrapper">
				<div class="padded-container">
					<h2 class="section-title">How <strong>it works</strong></h2>
					<div class="row">
						<div class="col-2">
							<div class="flow-wrapper">
								<img src="<?php echo get_template_directory_uri(); ?>/img/flow-1.png" alt="">
								<p class="caption">Sign Up</p>
							</div>
						</div>
						<div class="col-2">
							<div class="flow-wrapper">
								<img src="<?php echo get_template_directory_uri(); ?>/img/flow-2.png" alt="">
								<p class="caption">Create Profile</p>
							</div>
						</div>
						<div class="col-2">
							<div class="flow-wrapper">
								<img src="<?php echo get_template_directory_uri(); ?>/img/flow-3.png" alt="">
								<p class="caption">Post an Ad</p>
							</div>
						</div>
						<div class="col-2">
							<div class="flow-wrapper">
								<img src="<?php echo get_template_directory_uri(); ?>/img/flow-4.png" alt="">
								<p class="caption">Extend your web of trust by inviting and endorsing your friends</p>
							</div>
						</div>
						<div class="col-2">
							<div class="flow-wrapper">
								<img src="<?php echo get_template_directory_uri(); ?>/img/flow-5.png" alt="">
								<p class="caption">Send credit (IOU's) to those who trust you</p>
							</div>
						</div>
						<div class="col-2">
							<div class="flow-wrapper">
								<img src="<?php echo get_template_directory_uri(); ?>/img/flow-6.png" alt="">
								<p class="caption">Accept payments from others, to balance your credit</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="what-they-say">
			<div class="page-wrapper">
				<div class="padded-container">
					<h2 class="section-title">What they say <strong>about Villages</strong></h2>

					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#testimonial-carousel" data-slide-to="1"></li>
							<li data-target="#testimonial-carousel" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-1.png" alt="user-1">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-2.png" alt="user-2">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-3.png" alt="user-3">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-1.png" alt="user-1">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-2.png" alt="user-2">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-3.png" alt="user-3">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">	
								<div class="row">
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-1.png" alt="user-1">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-2.png" alt="user-2">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-3.png" alt="user-3">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">	
								<div class="row">
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-1.png" alt="user-1">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-2.png" alt="user-2">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
									<div class="col-4">
										<div class="testimonial-box">
											<img class="testimonial-avatar" src="<?php echo get_template_directory_uri(); ?>/img/avatar-3.png" alt="user-3">
											<p class="testimonial-content">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
											<p class="testimonial-author">Leo Herrera</p>
											<p class="testimonial-author-twitter-user">@leoherrera</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section id="full-cycle">
			<div class="page-wrapper">
				<div class="padded-container">
					<h2 class="section-title"><strong>Full cycle</strong> of credit</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/full-cycle.png" alt="">
				</div>
			</div>
		</section>

		<section id="villages-hours">
			<div class="page-wrapper">
				<div class="padded-container">
					<h2 class="section-title"><strong>Villages Hours</strong></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed.</p>
					<div class="row">
						<div class="col-12 col-sm-6">
							<div class="framed-box">
								<img src="<?php echo get_template_directory_uri(); ?>/img/box-1.png" alt="">
								<p>We use Village Hours, backed by a sustainable hour’s wage. In our community, there is a general consensus that this is equivalent to $15.</p>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="framed-box">
								<img src="<?php echo get_template_directory_uri(); ?>/img/box-2.png" alt="">
								<p>This is an effective and useful complementary currency system that can be used anywhere in the world.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="social-graph">
			<div class="page-wrapper">
				<div class="padded-container">
					<h2 class="section-title"><strong>Social</strong> Graph</h2>
					<p>Create your own financial network and watch your web of trust expand.</p>
					<img src="<?php echo get_template_directory_uri(); ?>/img/social-graph.png" alt="social-graph">
				</div>
			</div>
		</section>

		<section id="join-call" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/call-bg.png');">
			<a class="btn-std btn-white" href="#"><span class="left-triangle"></span>Join Now<span class="right-triangle"></span></a>
		</section>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'villages' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
