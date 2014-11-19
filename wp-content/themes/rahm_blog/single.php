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

			<?php
				global $post;
				$category = get_the_category($post->ID);

				echo '<div class="heroContainer interior issues" style="background-image:url(\'https://s3.amazonaws.com/rahm-chicago-production/hero/'.$category[0]->slug.'.jpg\')"><div class="row"><div class="small-12 columns">';

				echo "<img src='" . get_bloginfo('template_directory') . "/assets/icon-" . $category[0]->slug . ".png' alt='" . $category[0]->cat_name . "' />";
				echo "<h2>" . $category[0]->cat_name . "</h2>";

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
									<a href="http://www.chicagotogether.org/stories/new">Share Your Story</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/progress">See Programs In Your Neighborhood</a>
								</li>
								<li>
									<a href="http://action.chicagotogether.org/page/s/">Sign Up</a>
								</li>
								<li>
									<a href="https://services.myngp.com/ngponlineservices/contribution.aspx?X=cfDMWmlEmBSBK4sJZVu0iSDa2phOqx8U">Donate</a>
								</li>
							</ul>
							<ul data-target="2">
								<li>
									<a href="http://www.chicagotogether.org/about">About</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/arts-and-culture">Arts</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/economic-development">Economic Development</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/education">Education</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/energy-and-sustainability">Energy and Sustainability</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/immigration">Immigration</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/infrastructure">Infrastructure</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/parks">Parks</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/public-safety">Public Safety</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/reforming-city-hall">Reforming City Hall</a>
								</li>
							</ul>
							<ul data-target="3">
								<li>
									<a href="http://www.chicagotogether.org/blog/campaign-updates">Campaign Updates</a>
								</li>
								<li>
									<a target="_blank" href="https://twitter.com/rahmemanuel">Twitter</a>
								</li>
								<li>
									<a target="_blank" href="https://www.facebook.com/rahmemanuel">Facebook</a>
								</li>
								<li>
									<a target="_blank" href="https://www.youtube.com/user/ChicagoforRahm">Youtube</a>
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
								<a href="http://action.chicagotogether.org/page/s/">
									<p class="icon news"></p>
									<p class="txt">
										<span>SIGN UP, BE THE <br/>FIRST TO KNOW</span>
									</p>
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/rahmemanuel" target="_blank">
									<p class="icon face"></p>
									<p class="txt">
										<span>LIKE US</span>
									</p>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/rahmemanuel" target="_blank">
									<p class="icon tweet"></p>
									<p class="txt">
										<span>FOLLOW US</span>
									</p>
								</a>
							</li>
							<li>
								<a href="http://www.chicagotogether.org/progress" class="seeProgress">
									<p class="icon magnify"></p>
									<p class="txt">
										<span>SEE PROGRESS IN <br/>YOUR NEIGHBORHOOD</span>
									</p>
								</a>
							</li>
							<li>
								<a href="http://www.chicagotogether.org/stories/new">
									<p class="icon share"></p>
									<p class="txt">
										<span>SHARE YOUR STORY</span>
									</p>
								</a>
							</li>
							<li>
								<a href="https://services.myngp.com/ngponlineservices/contribution.aspx?X=cfDMWmlEmBSBK4sJZVu0iSDa2phOqx8U">
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
	</div><!-- #primary -->

<?php get_footer(); ?>