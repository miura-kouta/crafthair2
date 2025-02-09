<?php
function custom_theme_setup()
{
  add_theme_support("automatic-feed-links");
  add_theme_support("title-tag");
  add_theme_support("responsive-embeds");
  add_theme_support('post-thumbnails');
}
add_action("after_setup_theme", "custom_theme_setup");

//cssとjavascript呼び出し
function my_enqueue_scripts()
{
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/style/setting/ress.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style-name', get_template_directory_uri() . '/style/style.css', array('reset-style'), '1.0.0', false);
  wp_enqueue_script('Swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');