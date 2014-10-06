<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article class="postBlurb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_post_thumbnail(); ?>
		<?php if ( is_single() ) : ?>
			<h3><?php the_title(); ?></h3>
		<?php else : ?>
			<h3>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h3>
		<?php endif; // is_single() ?>


		<?php if ( is_single() ) : // Only display full copy for Single page ?>
			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
		<?php else : ?>			
			<div class="entry-summary">
				<?php the_excerpt(); ?>
				<a class="readMore" href="<?php echo get_permalink(); ?>">Read more &#62;</a>
				<?php the_tags('<ul class="tagBox"><li>','</li><li>','</li></ul>'); ?>
			</div><!-- .entry-summary -->
		<?php endif; ?>



		<div class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->

	</article><!-- #post -->
