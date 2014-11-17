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

		<div class="heroContainer interior issues" style="https://s3.amazonaws.com/rahm-chicago-production/hero/tags.jpg">
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
									<a href="http://rahmforchicago.herokuapp.com/stories/new">Share Your Story</a>
								</li>
								<li>
									<a href="http://rahmforchicago.herokuapp.com/progress">See Programs In Your Neighborhood</a>
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
									<a href="http://rahmforchicago.herokuapp.com/about">About</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/arts-and-culture">Arts</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/changing-the-culture-in-city-hall">Changing the Culture in City Hall</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/economic-development">Economic Development</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/education">Education</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/energy-and-sustainability">Energy and Sustainability</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/immigration">Immigration</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/infrastructure">Infrastructure</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/parks">Parks</a>
								</li>
								<li>
									<a href="http://rahm-press.herokuapp.com/public-safety">Public Safety</a>
								</li>
							</ul>
							<ul data-target="3">
								<li>
									<a href="http://rahm-press.herokuapp.com/campaign-updates">Campaign Updates</a>
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