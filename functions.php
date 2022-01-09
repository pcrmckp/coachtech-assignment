<?php


function twpp_enqueue_styles()
{
  wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri() . "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

function custom_print_scripts()
{
  wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', '', '', true);
}
add_action('wp_print_scripts', 'custom_print_scripts');

function set_adminbar($adminbar)
{
  $adminbar  = true; /* true:表示 false:非表示 */
  return $adminbar;
}

add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type('news', [
    'labels' => [
      'name'          => 'ニュース',
      'singular_name' => 'news',
    ],
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'show_in_rest'  => true,
    array(
      'supports' => array('title', 'thumbnail', 'editor')
    )
  ]);
}
function custom_template_include($template)
{
  if (is_single() && in_category('news')) {
    $new_template = locate_template(array('single-news.php'));
    if ('' != $new_template) {
      return $new_template;
    }
  }
  return $template;
}
add_filter('template_include', 'custom_template_include', 99);



register_post_type($post_type, $args);
add_action($hook, $function_to_add, $priority, $accepted_args);
