<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

<?php if( !is_front_page() ) { ?>


<footer class="navigation container">
<?php get_sidebar( 'footer' ); ?>
  <div class="left">
  <?php next_posts_link(); ?>
  <?php previous_posts_link(); ?>
  </div><!--left-->
</footer>
  
<?php } ?>

	<?php wp_footer(); ?>
</body>
</html>