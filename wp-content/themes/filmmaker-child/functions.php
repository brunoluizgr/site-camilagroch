<?php

add_action('wp_enqueue_scripts', 'camilagroch_enqueue_parent_styles');
if(!function_exists('camilagroch_enqueue_styles')){
  function camilagroch_enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('parent-filmmaker', get_template_directory_uri() . '/asset/css/filmmaker.css');
  }
}

add_action('wp_enqueue_scripts', 'camilagroch_enqueue_child_styles');
if(!function_exists('camilagroch_enqueue_child_styles')){
  function camilagroch_enqueue_child_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css');
  }
}

?>
