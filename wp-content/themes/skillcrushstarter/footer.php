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
      <a href="<?php echo site_url('/') ?>">&larr;&nbsp;&nbsp;Back to posts</a>
    </div><!--left-->
	</footer><!-- navigation container -->
  
<?php } ?>

	<?php wp_footer(); ?>
</body>
</html>