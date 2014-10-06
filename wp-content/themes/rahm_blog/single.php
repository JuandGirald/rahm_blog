<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<div class="heroContainer interior issues" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/hero-issues.jpg')">
				<div class="row">
					<div class="small-12 columns">
						<?php
							global $post;
							$category = get_the_category($post->ID);
							echo '<h6>ey ' . $category['name'] . "</h6>";
							echo '<h6>ey ' . $category->name . "</h6>";
							print '<h6>ey ' . $category[name] . "</h6>";
						?>
						<!-- <img src="/images/icon-graph.png" alt="Economic Development" /> -->
						<!-- <h2>economic Development</h2> -->
						<p><?php echo $category->cat_name; ?></p>
						<p><?php print_r($category) ?></p>
					</div>
				</div>
			</div>

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