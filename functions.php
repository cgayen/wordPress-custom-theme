<?php

function cgayen_theme_support() {
    //Add Dynamic title & Custom logo support
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}
    add_action('after_setup_theme', 'cgayen_theme_support');

// Register CSS Files.
function cgayen_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'cgayen-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all');
    wp_enqueue_style( 'cgayen-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css", array(), '1.11.3', 'all');
    wp_enqueue_style( 'cgayen-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');

 }
    add_action('wp_enqueue_scripts', 'cgayen_register_styles');

// Register JS Files.
function cgayen_register_scripts() {

    wp_enqueue_script( 'cgayen-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), '5.3.3', true);
    wp_enqueue_script( 'cgayen-javascript', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);    

}
    add_action('wp_enqueue_scripts', 'cgayen_register_scripts');


// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}


// Register navigation menus
function cgayen_custom_menus() {
  $locations = array(
      'main-menu'   => __( 'Main Header Menu' ),
      'footer-menu'  => __( 'Footer Menu' ),
  );
  register_nav_menus( $locations );
}

  // Hook them into the theme-'init' action
  add_action( 'init', 'cgayen_custom_menus' );


// bootstrap 5 wp_nav_menu walker End.




/**
 * A custom WordPress comment walker class to implement the Bootstrap 3 Media object in wordpress comment list.
 *
 * @package     wp-bootstrap-5-comment-walker
 * @version     1.0.0
 */

 class Bootstrap_5_Comment_Walker extends Walker_Comment
 {
   /**
    * Output a comment in the HTML5 format.
    *
    * @access protected
    * @since 1.0.0
    *
    * @see wp_list_comments()
    *
    * @param object $comment Comment to display.
    * @param int    $depth   Depth of comment.
    * @param array  $args    An array of arguments.
    */
   protected function html5_comment($comment, $depth, $args)
   {
     $icon_svg_reply = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                   <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"></path>
                 </svg>';
     $tag = ('div' === $args['style']) ? 'div' : 'li';
 ?>
     <?php
     $col_total = 12;
     $col_rem =  $depth == 1 ? ($col_total) : ($col_total - $depth);
     $col_rem =  $depth == 1 ? ($col_total) : ($col_total - 1);
 
     $class_comment =  $depth == 1 ? ' ' : ' comment_reply ';
     // echo $depth; 
     echo '<div class="col-' . $col_rem . '">';
     echo '<div class="row justify-content-end">';
     ?>
     <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class($this->has_children ? 'parent comment border-secondary mb-2 mb-md-3 p-3' . $class_comment : 'comment border-secondary mb-2 mb-md-3 p-3' . $class_comment); ?>>
 
       <?php if (0 != $args['avatar_size']) : ?>
         <div class="d-flex flex-row">
           <?php
           if (get_comment_author() == get_comment_author_link()) {
           ?>
             <a href="<?php echo get_comment_author_url(); ?>" class="user-image me-2 me-md-3">
               <img src="<?php print get_avatar_url($comment->user_id, ['size' => '40']); ?>" class="rounded-circle" />
               <?php
               // echo get_avatar($comment, $args['avatar_size']);
               ?>
             </a>
           <?php
           } else {
           ?>
             <div href="<?php echo get_comment_author_url(); ?>" class="user-image me-2 me-md-3">
               <img src="<?php print get_avatar_url($comment->user_id, ['size' => '40']); ?>" class="rounded-circle" />
               <?php
               // echo get_avatar($comment, $args['avatar_size']);
               ?>
             </div>
           <?php
           }
           ?>
           <div class="meta d-flex flex-column w-100">
 
             <div class="d-flex justify-content-between">
               <div>
                 <?php
                 if (get_comment_author() == get_comment_author_link()) {
                 ?>
                   <a class="text-primary fw-bold mb-0" href="<?php comment_author_url(); ?>">Visit <?php comment_author(); ?>'s site</a>
                 <?php
                 } else {
                 ?>
                   <h6 class="text-primary fw-bold mb-0"><?php comment_author(); ?></h6>
                 <?php
                 }
                 ?>
 
                 <a class="comment_link text-decoration-none text-light" href="<?php echo esc_url(get_comment_link($comment->comment_ID, $args)); ?>">
                   <time class="date small" datetime="<?php comment_time('c'); ?>">
                     <?php printf(_x('%1$s at %2$s', '1: date, 2: time'), get_comment_date(), get_comment_time()); ?>
                   </time>
                 </a>
               </div>
               <div>
                 <a class="comment_link text-decoration-none text-light" href="<?php echo esc_url(get_comment_link($comment->comment_ID, $args)); ?>">
                   <time class="date small" datetime="<?php comment_time('c'); ?>">
                     <?php printf(_x('%1$s at %2$s', '1: date, 2: time'), get_comment_date(), get_comment_time()); ?>
                   </time>
                 </a>
               </div>
             </div>
 
             <hr class="my-1 bg-secondary" />
 
             <div class="comment-body mt-1 mt-md-2" id="div-comment-<?php comment_ID(); ?>">
 
               <?php if ('0' == $comment->comment_approved) : ?>
                 <p class="comment-awaiting-moderation label label-info"><?php _e('Your comment is awaiting moderation.'); ?></p>
               <?php endif; ?>
 
               <div class="content">
                 <?php comment_text(); ?>
               </div><!-- .content mb-0 mt-2 mt-md-3 -->
 
             </div>
 
             <div class="d-flex justify-content-between">
 
               <?php
               comment_reply_link(array_merge($args, array(
                 'reply_text' => __('Reply ' . $icon_svg_reply . '', 'textdomain'),
                 'add_below' => 'div-comment',
                 'depth'     => $depth,
                 'max_depth' => $args['max_depth'],
                 // 'before'    => '<div class="reply">',
                 // 'after'     => '</div>'
               )));
               ?>
 
               <?php edit_comment_link(__('Edit '), '<div class="edit-link ms-2">', '</div>'); ?>
 
             </div>
           </div>
         </div>
       <?php endif; ?>
 
       <?php
       echo '</div>'; // End row
       echo '</div>'; // End col-md-12
       ?>
   <?php
   }
 }
// custom WordPress comment walker End.



//blog list excerpt length change (default length is 55 words)
 function new_excerpt_length($length) {
  return 25;  
  }  
  add_filter('excerpt_length', 'new_excerpt_length');


/**
 * Register Sidebar
 */
function cgayen_register_sidebars() {
 
  /* Register first sidebar name Primary Sidebar */
  register_sidebar(
      array(
          'name'          => __( 'Primary Sidebar', 'cgcustom' ),
          'id'            => 'sidebar-1',
          'description' => __( 'A short description of the sidebar.', 'cgcustom' ),
          'before_widget' => '<section id="%1$s" class="align-items-center mt-5 widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h6 class="widget-title mb-3 d-inline-block">',
          'after_title' => '</h6>'
      )
  );

  /* Register second sidebar name Secondary Sidebar */
  register_sidebar(
      array(
          'name'          => __( 'Secondary Sidebar', 'cgcustom' ),
          'id'            => 'sidebar-2',
          'description' => __( 'A short description of the sidebar.', 'cgcustom' ),
          'before_widget' => '<section id="%1$s" class="align-items-center mt-5 widget %2$s">',
          'after_widget' => '</section>',
          'before_title' => '<h6 class="widget-title mb-3 d-inline-block">',
          'after_title' => '</h6>'
      )
  );  

  /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'cgayen_register_sidebars' );

  
?>