<?php

// ACF Option Page
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Social');
  acf_add_options_sub_page('Footer');
}

// Include CPT and ACF
include_once 'custom/cpt.php';
include_once 'custom/acf.php';

// Add wp_nav
register_nav_menus(
  array(
    'primary'   => __( 'Primary menu', 'glitch' )
  )
);

function wave_scripts() {
  // Load css
  //wp_enqueue_style( 'wave-css', get_template_directory_uri() . '/dist/styles/app.css', array() );
  wp_enqueue_style( 'wave-css', get_stylesheet_directory_uri() . '/dist/styles/app.css', array(), filemtime( get_stylesheet_directory() . '/dist/styles/app.css' ) );
  wp_enqueue_style( 'blockReveal-normalize', get_template_directory_uri() . '/dist/styles/css/normalize.css', array() );
  wp_enqueue_style( 'blockReveal-pater', get_template_directory_uri() . '/dist/styles/css/pater.css', array() );
  wp_enqueue_style( 'blockReveal-revealer', get_template_directory_uri() . '/dist/styles/css/revealer.css', array() );
  
  // Load js
  if (!is_admin()) {
    wp_dequeue_script( 'jquery' );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/dist/scripts/jquery.js', array() );
    wp_enqueue_script( 'jquery' );
  }
  wp_enqueue_script( 'wave-anime', get_template_directory_uri() . '/assets/scripts/vendor/anime.min.js', array() );
  wp_enqueue_script( 'wave-main', get_template_directory_uri() . '/assets/scripts/vendor/main.js', array() );
  wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/assets/scripts/vendor/TweenMax.min.js', array() );
  wp_enqueue_script( 'Lettering', get_template_directory_uri() . '/assets/scripts/vendor/jquery.lettering.js', array() );
  wp_enqueue_script( 'ScrollMagic', get_template_directory_uri() . '/assets/scripts/vendor/ScrollMagic.min.js', array() );
  wp_enqueue_script( 'Rellax', get_template_directory_uri() . '/assets/scripts/vendor/rellax.min.js', array() );
  wp_enqueue_script( 'EaseScroll', get_template_directory_uri() . '/assets/scripts/vendor/jquery.easeScroll.js', array() );

  wp_register_script( 'my-script', 'myscript_url' );
  wp_enqueue_script( 'my-script' );
  $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
  //after wp_enqueue_script
  wp_localize_script( 'my-script', 'object_name', $translation_array );

  wp_enqueue_script( 'wave-js', get_template_directory_uri() . '/dist/scripts/app.js', array(), filemtime( get_stylesheet_directory() . '/dist/scripts/app.js' ) );
}
add_action( 'wp_enqueue_scripts', 'wave_scripts' );

// Remove shit
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Post Thumbnails
add_theme_support( 'post-thumbnails' );
// add_image_size('cover', 1600, 900, true );
// add_image_size('info-big', 1280, 720, true );
// add_image_size('column', 800, 400, true );
// add_image_size('info', 500, 9999, false );
// add_image_size('team', 380, 380, true );

/**
 * Returns the given $key from the $meta array
 * 
 * @param $meta The meta array
 * @param $key The key
 * @param $counter define counter of section
 * @param $isFromAcf if the meta key is from ACF a string is prepanded to the given $key
 * @param $type define type of field
 * @param $size define size of image (if type === image)
 * @return String the requested meta
 */
function wave_get_post_meta($meta, $key, $counter, $isFromAcf = FALSE, $type = "string", $size = "large") {
  if($isFromAcf) {
    $key = "section_" . $counter . "_" . $key;
  }

  if( isset($meta[$key]) && is_array($meta[$key]) ) {
    switch($type) {
      case "string":
        return reset($meta[$key]);
      case "image":
        $imageId = reset($meta[$key]);
        $imageUrl = wp_get_attachment_image_src($imageId, $size);
        return reset($imageUrl);
      case "link":
        $linkId = reset($meta[$key]);
        $linkUrl = get_page_link($linkId);
        return $linkUrl;
      default:
        return reset($meta[$key]);
    }
    return reset($meta[$key]);
  }

  return "";
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// define the single_product_small_thumbnail_size callback 

function filter_single_product_small_thumbnail_size( $shop_catalog ) { 

return 'full'; 

};    // add the filter 

add_filter( 'single_product_small_thumbnail_size', 'filter_single_product_small_thumbnail_size', 99, 1 );

