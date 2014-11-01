<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<div class="container wrap">
	<div class="main-content">
			<header class="page-header">
				<h1 class="page-title">Not Found</h1>
			</header>
			<div class="page-content">
				<p>It looks like nothing was found at this location. Maybe try a search?</p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- container -->

<?php get_footer(); ?>
