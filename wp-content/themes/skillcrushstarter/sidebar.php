<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>

<aside class="right-aside">
  <!-- THIS IS THE SIDEBAR.PHP -->
  <?php if (is_active_sidebar('sidebar-1')): ?>
    <div id="widget" class="widget_search-form">
        <form action="http://localhost:8888/wordpress/" class="search-form" method="get">
        <input type="text" class="input" id="search-box-text" placeholder="Search " value="" name="s" title>
          <input type="submit" id="searchsubmit" class="input-btn" value>
        </form>
    </div><!--widget_search_form-->
    <div class="no-styles">
      <div class="widget">
        <?php dynamic_sidebar('sidebar-1'); ?>
        <h2 class="widgettitle">Categories</h2>
        <?php wp_nav_menu(array('theme_location' => 'category-menu')); ?>
        <h2 class="widgettitle">Let's Connect</h2>
        <ul id="menu-social-menu" class="menu social-menu-sidebar">
          <?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
          <?php get_template_part( 'menu', 'social' ); ?>
        </ul>
      </div><!--widget-->
		</div><!--no-styles-->
	<?php endif; ?>
</aside><!-- right-aside -->
