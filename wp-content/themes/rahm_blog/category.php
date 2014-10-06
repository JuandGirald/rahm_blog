<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary">
		<div id="content" role="main">

			<div class="heroContainer interior issues" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/hero-issues.jpg')">
				<div class="row">
					<div class="small-12 columns">
						<?php
							global $post;
							$category = get_the_category($post->ID);
							echo "<img src='" . bloginfo('template_directory') . "/assets/" . $category[0]->slug . ".png' alt='" . $category[0]->cat_name . "' />";
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
									<a>infrastructure</a>
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
				<div class="row headline">
					<div class="small-12 columns">
						<?php if ( category_description() ) : // Show an optional category description ?>
							<h3><?php echo category_description(); ?></h3>
						<?php endif; ?>
					</div>
				</div>

				<div class="row">
					<div class="large-7 medium-8 columns postList">
						<?php if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/* Include the post format-specific template for the content. If you want to
								 * this in a child theme then include a file called called content-___.php
								 * (where ___ is the post format) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );

							endwhile;

							twentytwelve_content_nav( 'nav-below' );
							?>

						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
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
	</section><!-- #primary -->

<?php get_footer(); ?>