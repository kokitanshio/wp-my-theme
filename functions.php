
<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

//cssとjsの読み込み
function my_styles_scripts(){
  //cssの読み込みここから
  //fontawesome
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1', 'all');
  //swiper
  wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css', array(), '3.4.1', 'all');
  //wow_animate
  wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
  //stylesheet
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  //cssの読み込みここまで

  //jsの読み込みここから
  //jq
  wp_enqueue_script('jq', get_template_directory_uri() . '/js/jq.js', array('jquery'), '1.0.0', true);
  //swiper
  wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js', array('jquery'), '3.4.1', true);
  //swiper_option
  wp_enqueue_script('swiper_option', get_template_directory_uri() . '/js/swiper_option.js', array('jquery'), '1.0.0', true);
  //wow
  wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.0.0', true);
  //wow_start
  wp_enqueue_script('wow_start', get_template_directory_uri() . '/js/wow_start.js', array('jquery'), '1.0.0', true);
  //jsの読み込みここまで
}
add_action('wp_enqueue_scripts', 'my_styles_scripts');