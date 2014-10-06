<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<div class="heroContainer interior issues" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/hero-issues.jpg')">
				<div class="row">
					<div class="small-12 columns">
						<?php
							global $post;
							$category = get_the_category($post->ID);
							echo "<img src='" . get_bloginfo('template_directory') . "/assets/icon-" . $category[0]->slug . ".png' alt='" . $category[0]->cat_name . "' />";
							echo "<h2>" . $category[0]->cat_name . "</h2>";
						?>
					</div>
				</div>
			</div>

			<nav class="mainNav">
				<div class="central">
					<div class="row">
						<div class="small-12 columns">
							<ul class="mainList">
								<li data-id="1">
									<a>TAKE ACTION</a>
								</li>
								<li data-id="2">
									<a>FACTS</a>
								</li>
								<li data-id="3">
									<a>LATEST</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="dropdown">
					<div class="row">
						<div class="small-12 columns">
							<ul data-target="1">
								<li>
									<a>Share Your Story</a>
								</li>
								<li>
									<a>See Programs In Your Neighborhood</a>
								</li>
								<li>
									<a>Sign Up</a>
								</li>
								<li>
									<a>Donate</a>
								</li>
							</ul>
							<ul data-target="2">
								<li>
									<a>About</a>
								</li>
								<li>
									<a>Contact</a>
								</li>
								<li>
									<a>Parks</a>
								</li>
								<li>
									<a>Infrastructure</a>
								</li>
								<li>
									<a>Economic Development</a>
								</li>
								<li>
									<a>Education</a>
								</li>
							</ul>
							<ul data-target="3">
								<li>
									<a>Blog</a>
								</li>
								<li>
									<a>Twitter</a>
								</li>
								<li>
									<a>Facebook</a>
								</li>
								<li>
									<a>Youtube</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>

			<div class="contentContainer">
				<div class="row">
					<div class="large-7 medium-8 columns postList">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', get_post_format() ); ?>

							<nav class="nav-single">
								<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
								<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
								<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
							</nav><!-- .nav-single -->

						<?php endwhile; // end of the loop. ?>
					</div>
					<div class="medium-4 columns right rightRail">
						<ul>
							<li>
								<a href="#" class="beFirst">
									<p class="icon">
										<span class="picto news">m</span>
									</p>
									<p class="txt">
										<span>SIGN UP, BE THE <br/>FIRST TO KNOW</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="icon">
										<span class="picto face">G</span>
									</p>
									<p class="txt">
										<span>LIKE US</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="icon">
										<span class="socialico tweet">L</span>
									</p>
									<p class="txt">
										<span>FOLLOW US</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#" class="seeProgress">
									<p class="icon">
										<span class="picto magnify">y</span>
									</p>
									<p class="txt">
										<span>SEE PROGRESS IN <br/>YOUR NEIGHBORHOOD</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="icon">
										<span class="picto share">b</span>
									</p>
									<p class="txt">
										<span>SHARE YOUR STORY</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#" class="donateMod">
									<p class="icon">
										<span class="picto donate">$</span>
									</p>
									<p class="txt">
										<span>DONATE</span>
									</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>