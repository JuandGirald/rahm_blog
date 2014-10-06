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
						print_r($category);
					?>
					<!-- <img src="/images/icon-graph.png" alt="Economic Development" /> -->
					<!-- <h2>economic Development</h2> -->
					<p><?php $category->cat_name; ?></p>
					<p><?php $category->slug; ?></p>
				</div>
			</div>
		</div>

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

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

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>