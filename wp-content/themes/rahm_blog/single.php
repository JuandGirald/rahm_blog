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

			<nav class="mainNav">
				<div class="central">
					<div class="row">
						<div class="small-12 columns">
							<ul class="mainList">
								<li data-id="1">
									<a>GET INVOLVED</a>
								</li>
								<li data-id="2">
									<a>Issues</a>
								</li>
								<li data-id="3">
									<a>blog</a>
								</li>
								<br>
								<li data-id="4">
									<a>ENDORSEMENTS</a>
								</li>
								<li data-id="5">
									<a>OUR ADS</a>
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
									<a href="http://action.chicagotogether.org/page/s/stay-up-to-date">Stand with Rahm</a>
								</li>
								<li>
									<a href="http://action.chicagotogether.org/page/s/commit-to-vote">Commit to Vote</a>
								</li>
								<li>
									<a href="http://action.chicagotogether.org/page/s/volunteer-signup">Volunteer</a>
								</li>
								<li>
									<a href="https://services.myngp.com/ngponlineservices/contribution.aspx?X=cfDMWmlEmBSBK4sJZVu0iSDa2phOqx8U">Donate</a>
								</li>
								<li>
									<a href="/stories/new">Share Your Story</a>
								</li>
							</ul>
							<ul data-target="2">
								<li>
									<a href="/about">About</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/arts-and-culture/">Arts</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/economic-development/">Economic Development</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/education/">Education</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/energy-and-sustainability/">Energy and Sustainability</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/immigration/">Immigration</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/infrastructure/">Infrastructure</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/parks/">Parks</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/public-safety/">Public Safety</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/reforming-city-hall/">Reforming City Hall</a>
								</li>
							</ul>
							<ul data-target="3">
								<li>
									<a href="http://www.chicagotogether.org/blog/campaign-updates/">Campaign Updates</a>
								</li>
							</ul>

							<ul data-target="4">
								<li>
									<a href="http://www.chicagotogether.org/blog/endorsements/chicago-tribune-endorsement-for-mayor-rahm-emanuel/">Chicago Tribune</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/endorsements/chicago-sun-times-rahm-emanuel-has-earned-your-vote/">Sun Times</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/endorsements/crains-chicago-business-chicagos-on-the-right-track-under-emanuel/">CRAIN’S CHICAGO BUSINESS</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/endorsements/the-chicago-citizen-mayor-rahm-emanuel-the-best-choice-for-chicago/">The Chicago Citizen</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/endorsements/chicago-defender-the-chicago-defender-endorses-rahm-emanuel-for-mayor/">The Chicago Defender</a>
								</li>
							</ul>

							<ul data-target="5">
								<li>
									<a href="http://www.chicagotogether.org/blog/ads/ads-3/">Watch</a>
								</li>
								<li>
									<a href="http://www.chicagotogether.org/blog/ads/ads-en-espanol/">En Español</a>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</nav>

			<?php
				global $post;
				$category = get_the_category($post->ID);

				echo '<div class="heroContainer interior issues" style="background-image:url(\'https://s3.amazonaws.com/rahm-chicago-production/hero/'.$category[0]->slug.'.jpg\')"><div class="gradient"></div><div class="row"><div class="small-12 columns">';
				echo "<img src='" . get_bloginfo('template_directory') . "/assets/icon-" . $category[0]->slug . ".png' alt='" . $category[0]->cat_name . "' />";
				echo "<h2>" . $category[0]->cat_name . "</h2>";

				echo "</div></div></div>";
			?>

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
										<span>Contribute</span>
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