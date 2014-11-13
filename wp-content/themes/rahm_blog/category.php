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

			<?php
				$current_url = rtrim($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], "/");
				$arr_current_url = split("/", $current_url);
				if ($arr_current_url[1] == 'category') {
					$category = get_category_by_slug($arr_current_url[2]);
				} else {
					$category = get_category_by_slug($arr_current_url[1]);	
				}

				echo "<div class='heroContainer interior issues' style='background-image:url(\'https://s3.amazonaws.com/rahm-chicago-production/hero/".$category->slug.".jpg\')''><div class='row'><div class='small-12 columns'>";

				echo "<img src='" . get_bloginfo('template_directory') . "/assets/icon-" . $category->slug . ".png' alt='" . $category->cat_name . "' />";
				echo "<h2>" . $category->cat_name . "</h2>";

				echo "</div></div></div>";

			?>

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
								<a href="#">
									<p class="icon news"></p>
									<p class="txt">
										<span>SIGN UP, BE THE <br/>FIRST TO KNOW</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="icon face"></p>
									<p class="txt">
										<span>LIKE US</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="icon tweet"></p>
									<p class="txt">
										<span>FOLLOW US</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#" class="seeProgress">
									<p class="icon magnify"></p>
									<p class="txt">
										<span>SEE PROGRESS IN <br/>YOUR NEIGHBORHOOD</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="icon share"></p>
									<p class="txt">
										<span>SHARE YOUR STORY</span>
									</p>
								</a>
							</li>
							<li>
								<a href="#">
									<p class="icon donate"></p>
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