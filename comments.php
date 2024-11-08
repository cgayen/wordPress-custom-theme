<?php
  $args = array(
    // 'walker'            => null,
    'walker'        => new Bootstrap_5_Comment_Walker(),
    // 'walker'        => new comment_walker(),
    'max_depth'         => '',
    'style'             => 'div',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
    'short_ping'        => true,   // @since 3.6
    'echo'              => true     // boolean, default is true
  );
  
  wp_list_comments($args);
  ?>