<?php


//cssとjavascript呼び出し
function my_enqueue_scripts()
{
  // Google Fonts 読み込み
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Kiwi+Maru:wght@300;400;500&family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);

  // CSS 読み込み
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/style/setting/ress.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style-name', get_template_directory_uri() . '/style/style.css', array('reset-style'), '1.0.0', 'all');

  // JS 読み込み（フッターで実行）
  wp_enqueue_script('Swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '1.0.0', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');






// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}
