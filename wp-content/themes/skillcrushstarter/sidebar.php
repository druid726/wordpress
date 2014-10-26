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
  <?php if (is_active_sidebar('sidebar-1')): ?>
    <div class="widget widget_search-form">
        <form role="search" method="get" class="search-form" action>
          <input type="text" class="input" placeholder="search" value name="s">
          <input type="button" class="input-btn" value>
        </form>
    </div><!--widget_search_form-->
    <div class="no-styles">
      <?php dynamic_sidebar('sidebar-1'); ?>
      <?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
		</div><!--no-styles-->
	<?php endif; ?>
</aside><!-- right-aside -->
