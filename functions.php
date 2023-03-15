<?php
/**
 *
 * This theme uses PSR-4 and OOP logic instead of procedural coding
 * Every function, hook and action is properly divided and organized inside related folders and files
 * Use the file `inc/Custom/Custom.php` to write your custom functions
 *
 * @package swps
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'swps\\Init' ) ) :
	swps\Init::register_services();
endif;

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

// register Header
function register_my_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_nav_menu('auxiliary-menu',__('Auxiliary Menu'));
  register_nav_menu('mobile-menu',__('Mobile Menu'));
}
add_action( 'init', 'register_my_menus' );

// Custom Gutenberg blocks
require get_template_directory() . '/inc/acf-blocks.php';

/* Custom Post Type Start */
function cptui_register_my_cpts() {
  
  
  /**
   * Post Type: Team Members.
   */

  $labels = array(
    "name" => __( "Team", "sage" ),
    "singular_name" => __( "Team", "sage" ),
  );
  $args = array(
    "label" => __( "Team", "sage" ),
    "labels" => $labels,
    "description" => "Team.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "team",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "team", "with_front" => true ),
    "query_var" => false,
    "menu_position" => 4,
    "menu_icon" => "dashicons-groups",
    "supports" => array( "title", "editor", "thumbnail", "revisions", "excerpt" ),
    "taxonomies" => array("team_category", "team_tags" ),
  );
  register_post_type( "team", $args );

  /**
   * Post Type: Investors.
   */

  $labels = array(
    "name" => __( "Investors", "sage" ),
    "singular_name" => __( "Investor", "sage" ),
  );
  $args = array(
    "label" => __( "Investors", "sage" ),
    "labels" => $labels,
    "description" => "Investors.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "investors",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "investors", "with_front" => true ),
    "query_var" => false,
    "menu_position" => 4,
    "menu_icon" => "dashicons-groups",
    "supports" => array( "title", "editor", "thumbnail", "revisions", "excerpt" ),
    "taxonomies" => array("investors_category", "investors_tags" ),
  );
  register_post_type( "investors", $args );

  /**
   * Post Type: Careers.
   */

  $labels = array(
    "name" => __( "Careers", "sage" ),
    "singular_name" => __( "Career", "sage" ),
  );
  $args = array(
    "label" => __( "Careers", "sage" ),
    "labels" => $labels,
    "description" => "Careers for... .",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "Careers",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => array( "slug" => "careers", "with_front" => true ),
    "query_var" => false,
    "menu_position" => 4,
    "menu_icon" => "dashicons-welcome-learn-more",
    "supports" => array( "title", "editor", "thumbnail", "revisions","excerpt" ),
    "taxonomies" => array( "category", "post_tag" ),
  );
  register_post_type( "Jobs", $args );


	function company_category() {
		register_taxonomy(
			'company_category', 
			'company',
				array(
						'hierarchical' => true,
						'label' => 'Company Category',
						'query_var' => true,
						'rewrite' => array(
								'slug' => 'company_categories',
								'with_front' => false
						)
				)
		);
}
add_action( 'init', 'company_category');

}
add_action( 'init', 'cptui_register_my_cpts', 0 );  


/* Custom Post Type End */



ini_set( 'upload_max_size' , '500M' );
@ini_set( 'post_max_size', '500M');
@ini_set( 'max_execution_time', '300' );


// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );


// link team member to author
add_filter( 'author_link', 'team_author_link', 10, 3 );
function team_author_link( $link, $author_id, $author_nicename ) {

  $team_post_id = get_field('team_member', $author_id);
  // if the team post is set, get the permalink to the team post:
  $team_link = get_permalink($team_post_id);
  $link = ($team_link !== false) ? $team_link : $link;
  return $link;
}

require_once( get_theme_file_path('/inc/Helpers.php') ); 
// Base Theme Setup
require_once( get_theme_file_path('/inc/frontend-setup.php') ); 


// function register_post_assets(){
//   add_meta_box('featured-post', __('Featured Post'), 'add_featured_meta_box', 'post', 'advanced', 'high');
// }
// add_action('admin_init', 'register_post_assets', 1);

// function add_featured_meta_box($post){
//   $featured = get_post_meta($post->ID, '_featured-post', true);
//   echo "<label for='_featured-post'>".__('Feature this post?', 'foobar')."</label>";
//   echo "<input type='checkbox' name='_featured-post' id='featured-post' value='1' ".checked(1, $featured)." />";
// }

// function save_featured_meta($post_id){
//   // Do validation here for post_type, nonces, autosave, etc...
//   if (isset($_REQUEST['_featured-post']))
//       update_post_meta(esc_attr($post_id, '_featured-post', esc_attr($_REQUEST['_featured-post']))); 
//       // I like using _ before my custom fields, so they are only editable within my form rather than the normal custom fields UI
// }
// add_action('save_post', 'save_featured_meta');