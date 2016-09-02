<?php
/*
* POSTYPES e suas METABOXES
*/
include_once 'includes/postypes/cinema-postype.php';
include_once 'includes/postypes/televisao-postype.php';
include_once 'includes/postypes/projetos-postype.php';
include 'includes/custom-fields.php';

/*
* Funções DIVERSAS
*/
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

function grochfilmes_oembed_provider() {

	wp_oembed_add_provider( 'https://youtube.com/*', 'https://youtube.com/oembed', false );
}
add_action( 'init', 'grochfilmes_oembed_provider' );
/*
* Função que adiciona STYLESHEETS do tema pai, necessário pra funcionamento do tema filho
*/
add_action('wp_enqueue_scripts', 'camilagroch_enqueue_parent_styles');
if(!function_exists('camilagroch_enqueue_styles')){
  function camilagroch_enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('parent-filmmaker-style', get_template_directory_uri() . '/asset/css/filmmaker.css');
  }
}

/*
* Função que adiciona os STYLESHEETS do tema filho
*/
add_action('wp_enqueue_scripts', 'camilagroch_enqueue_child_styles');
if(!function_exists('camilagroch_enqueue_child_styles')){
  function camilagroch_enqueue_child_styles() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css');
  }
}

/*
* Função que adiciona os SCRIPTS do tema filho
*/
add_action('wp_enqueue_scripts', 'camilagroch_enqueue_child_scripts');
if(!function_exists('camilagroch_enqueue_child_scripts')){
  function camilagroch_enqueue_child_scripts() {
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/assets/js/grochfilmes.js');
  }
}

/*
* Função que remove os itens do MENU de admin do tema filmmaker
*/
add_action('admin_menu', 'custom_menu_remove');
function custom_menu_remove() {
    remove_menu_page('edit.php?post_type=crew');
    remove_menu_page('edit.php?post_type=director');
    remove_menu_page('edit.php?post_type=film');
    remove_menu_page('edit.php?post_type=gallery');
    remove_menu_page('edit.php?post_type=partner');
    remove_menu_page('edit.php?post_type=team');
    remove_menu_page('edit.php?post_type=testimonial');
}


?>
