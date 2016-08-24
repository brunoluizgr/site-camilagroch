<?php

add_action('wp_enqueue_scripts', 'camilagroch_enqueue_scrollrevealjs');
if(!function_exists('camilagroch_enqueue_scrollrevealjs')){
  function camilagroch_enqueue_scrollrevealjs() {
    wp_enqueue_script('scrollreveal-script', get_stylesheet_directory_uri() . '/assets/bower_components/scrollreveal/dist/scrollreveal.min.js');
  }
}

add_action('wp_enqueue_scripts', 'camilagroch_enqueue_animatecss');
if(!function_exists('camilagroch_enqueue_animatecss')){
  function camilagroch_enqueue_animatecss() {
    wp_enqueue_style('animate-style', get_stylesheet_directory_uri() . '/assets/bower_components/animate.css/animate.min.css');
  }
}

add_action('wp_enqueue_scripts', 'camilagroch_enqueue_hovercss');
if(!function_exists('camilagroch_enqueue_hovercss')){
  function camilagroch_enqueue_hovercss() {
    wp_enqueue_style('hover-style', get_stylesheet_directory_uri() . '/assets/bower_components/hover/css/hover-min.css');
  }
}

add_action('wp_enqueue_scripts', 'camilagroch_enqueue_parent_styles');
if(!function_exists('camilagroch_enqueue_styles')){
  function camilagroch_enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('parent-filmmaker-style', get_template_directory_uri() . '/asset/css/filmmaker.css');
  }
}

add_action('wp_enqueue_scripts', 'camilagroch_enqueue_child_styles');
if(!function_exists('camilagroch_enqueue_child_styles')){
  function camilagroch_enqueue_child_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css');
  }
}

?>
