<?php
/**
 * Skillcrush Starter functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * since Skillcrush Starter 1.0
 */

// Turns on widgets & menus
if (function_exists('register_sidebar')) {
	register_sidebar();
}

// Disables admin bar on external site
// add_filter('show_admin_bar', '__return_false');

/** Creating menus **/
// Check if the menu exists
// $primary_menu = wp_get_nav_menu_object('Primary Menu');

// if (!$primary_menu) {
//     $primary_menu_id = wp_create_nav_menu('Primary Menu');

//     wp_update_nav_menu_item($primary_menu_id, 0, array(
//         'menu-item-title' =>  __('Homepage'),
//         'menu-item-url' => home_url( '/' ), 
//         'menu-item-status' => 'publish')
// 	);
// }

// register_nav_menu('primary-menu', 'Primary Menu');

// // Check if the menu exists
// $blog_posts_menu = wp_get_nav_menu_object('Favorite Blog Posts');

// if (!$blog_posts_menu) {
//     $blog_posts_menu_id = wp_create_nav_menu('Favorite Blog Posts');
// }

// register_nav_menu('primary-menu', 'Primary Menu');

register_nav_menu('social-menu', 'Social Menu');

register_nav_menu('category-menu', 'Category Menu');

//Enqueue scripts and styles.

function skillcrushstarter_scripts() {
  wp_enqueue_style('skillcrusher-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'skillcrushstarter_scripts' );

// Turns on featured images
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

/**
 * Remove the text - 'You may use these <abbr title="HyperText Markup
 * Language">HTML</abbr> tags ...'
 * from below the comment entry box.
 */

add_filter('comment_form_defaults', 'remove_comment_styling_prompt');

function remove_comment_styling_prompt($defaults) {
  $defaults['comment_notes_after'] = '';
  return $defaults;
}


//Attempt at customizing comments themselves -- called in comments.php.  Custom function for comment form is only in comments.php

function mytheme_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);

  if ('div' == $args['style'] ) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }
?>
  <?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
  <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
  <?php endif; ?>
  <div class="comment-author vcard">
    <?//php if ( $args['avatar_size'] !=0) echo get_avatar( $comment, $args['avatar'] ); ?>
    <?php //printf( _( '<cite class="fn">%s</cite <span class="says>SAYS, YO:</span>' ), get_comment_author_link() ); ?>
    <a href="<?php the_permalink() ?>"><?php the_author( ); ?></a>
  </div>
  <?php if ( $comment->comment_approved = '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e( "Your comment is awaiting moderation." ); ?> </em>
    <br />
  <?php endif; ?>

  <div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
    <?php $d = "d/m/Y"; $comment_date = get_comment_date( $d ); echo $comment_date;?></a><?php edit_comment_link( __( '(Edit)' ), '&nbsp;&nbsp;', ''); ?>
  </div>

  <?php comment_text(); ?>
  
  <?php if ( 'div' != $args['style'] ) : ?>
  </div>
  <?php endif; ?>
<?php
}

