<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<!-- <section> -->
	<div class="container wrap">
			<?php if ( have_posts() ) : ?>

		<header class="top-head-title">
			<?php printf( __( 'Posts categorized as <span>%s</span>', 'skillcrushstarter' ), single_cat_title( '', false ) ); ?>
		</header><!-- .category-header -->
		<div class="main-content">

					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .category-header -->

				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
					<!-- next / prev here -->
				<?php else: ?>
					<article>
						<h4>No posts found!</h4>
					</article>
				<?php endif; ?>
		</div><!-- #main-content -->
		<?php get_sidebar(); ?>
	</div><!-- container wrap -->	
<!-- </section> -->
<?php

get_footer();
