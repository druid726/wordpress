<?php
  /**
   * The template for homepage
   *
   * @package WordPress
   * @subpackage Skillcrush_Starter
   * @since Skillcrush Starter 1.0
   */

  get_header(); 
?>
<section class="landing-page landing-bg">
  <div class="container">
    <div class="author-intro">
      <div class="content">
        <?php
          // Start the Loop.
          while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
      </div><!-- content -->
      <div class="social-btns">
              <a href="https://twitter.com/druid726" class="soc-icon tw"></a>
              <a href="https://www.facebook.com/patricia.oneill.16718" class="soc-icon fb"></a>
              <a href="https://www.linkedin.com/in/pattioneill726 " class="soc-icon ln"></a>
            </div><!--social-btns-->
            <a href="http://localhost:8888/wordpress/blog/" class="btn">View My Blog</a>
    </div><!--author-intro-->
  </div><!--container wrap-->
</section>
<?php get_footer(); ?>