<?php
/**
 * The template for displaying Tag pages.
 *
 * Used to display archive-type pages for posts in a tag.
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
								<a href="https://services.myngp.com/ngponlineservices/contribution.aspx?X=cfDMWmlEmBSBK4sJZVu0iSDa2phOqx8U">Contribute</a>
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

		<div class="heroContainer interior issues" style="background-image:url('https://s3.amazonaws.com/rahm-chicago-production/hero/tags.jpg')">
			<div class="gradient"></div>
			<div class="row">
				<div class="small-12 columns">
					<?php
						global $post;
						$tags = get_the_tags($post->ID);
						if ($tags) {
							foreach($tags as $tag) {
								echo "<h2>" . $tag->name . "</h2>";
								break;
							}
						} else {
							echo "<h2>Tag does not exist</h2>";
						}
					?>
				</div>
			</div>
		</div>

		<div class="contentContainer">
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
								<a href="http://www.chicagotogether.org//progress" class="seeProgress">
									<p class="icon magnify"></p>
									<p class="txt">
										<span>SEE PROGRESS IN <br/>YOUR NEIGHBORHOOD</span>
									</p>
								</a>
							</li>
							<li>
								<a href="http://www.chicagotogether.org//stories/new">
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
	</section><!-- #primary -->

<?php get_footer(); ?>