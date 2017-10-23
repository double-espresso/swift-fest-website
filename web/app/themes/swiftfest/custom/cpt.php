<?php 
add_action( 'init', 'register_wave_cpt' );
function register_wave_cpt() {

  // Supporters
  $labels = array(
    "name" => "Supporters",
    "singular_name" => "supporter",
  );

  $args = array(
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "supporter", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "revisions", "thumbnail" ),  
  );
  register_post_type( "supporter", $args );

  // Team
  $labels = array(
    "name" => "Team",
    "singular_name" => "Team",
    );

  $args = array(
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "team", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "revisions", "thumbnail" ),  
  );
  register_post_type( "team", $args );

  // Sponsors
  $labels = array(
    "name" => "Sponsors",
    "singular_name" => "Sponsor",
  );

  $args = array(
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "client", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "revisions", "thumbnail" ),  
  );
  register_post_type( "sponsor", $args );

  // Speakers
  $labels = array(
    "name" => "Speakers",
    "singular_name" => "Speaker",
  );

  $args = array(
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "speaker", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "revisions", "thumbnail" ),  
  );
  register_post_type( "speaker", $args );

  // Workshops
  $labels = array(
    "name" => "Workshops",
    "singular_name" => "Workshop",
  );

  $args = array(
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "show_ui" => true,
    "show_in_rest" => false,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "workshop", "with_front" => true ),
    "query_var" => true,
    "supports" => array( "title", "editor", "revisions", "thumbnail" ),  
  );
  register_post_type( "workshop", $args );

}