<?php 
/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style("reset", get_theme_file_uri()."/assets/css/reset.css", array(), false, "all"); // true:body閉じタグの直前で読み込み all:screen・printのすべてのメディアタイプでcssを読み込む
  wp_enqueue_style("style", get_theme_file_uri()."/style.css", array("reset"), false, "all"); // true:body閉じタグの直前で読み込み all:screen・printのすべてのメディアタイプでcssを読み込む
}
add_action("wp_enqueue_scripts", "my_enqueue_styles");

/**************************************************
JSファイルの読み込み
**************************************************/
function my_enqueue_scripts() {
  wp_enqueue_script("main", get_theme_file_uri()."/assets/js/main.js", array(), false, true); // false:wpのバージョン番号がhrefの最後に付与  all:screen・printのすべてのメディアタイプでcssを読み込む
}
add_action("wp_enqueue_scripts", "my_enqueue_scripts");

/**************************************************
 titleタグ出力
**************************************************/
add_theme_support("title-tag");

/**************************************************
 titleにキャッチフレーズを含めないようにする
**************************************************/
function my_remove_title_tagline($title) {
  if (isset($title["tagline"])) {
    unset($title["tagline"]);
	}   
	
	return $title;
}
add_filter("document_title_parts", "my_remove_title_tagline");

/**************************************************
 カスタム投稿
**************************************************/
// 
// add_action("init", function() {
//   register_post_type("item", [
//     "public" => true,
//     "label" => "",
//   ]);
// });

/**************************************************
 投稿ページでアイキャッチ画像設定
**************************************************/
add_theme_support( 'post-thumbnails' );

/**************************************************
 抜粋文字数変更(デフォルト:110文字)
**************************************************/
function custom_excerpt_length($length) {
  $length = 70;

  return $length;
}
add_filter("excerpt_length", "custom_excerpt_length", 999);