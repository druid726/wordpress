<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>
	<div class="container wrap">
		<div class="main-content">
 <!-- THIS IS SINGLE.PHP -->
 <!-- /*

 This is what will be pulled in for a single blog post

 */ -->
			<?php
        // Start the Loop.
        while ( have_posts() ) : the_post();
          get_template_part( 'content-single', get_post_format() );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        endwhile;
      ?>
    </div><!-- main-content -->
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
</div><!--container -->
