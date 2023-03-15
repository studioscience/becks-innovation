<?php

add_action('after_setup_theme', 'base_run_setup', 15);

function base_run_setup()
{
    //  add scripts and styles to theme
    add_action('wp_enqueue_scripts', 'base_scripts_and_styles', 999);
}

function base_scripts_and_styles()
{
    if (!is_admin()) {

        $register_js_url = mix('js/block-register.js');
        $register_js_assets = include('wp-content/themes/becks/assets/dist/js/block-register.asset.php');
        // echo $register_js_url;
        // echo var_dump($register_js_assets);
        wp_enqueue_script('register-js',  $register_js_url, $register_js_assets['dependencies'], $register_js_assets['version']);

    }
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'studioscience/v1', '/resources/filter', array(
      'methods' => 'GET',
      'callback' => 'get_resources_rest_search',
      'args' => [
            'page' => [
                'required' => true,
                'type' => 'number'
            ],
            'topic' => [
                'required' => false,
                'type' => 'string'
            ],
            'categories' => [
                'required' => false,
                'type' => 'string'
            ],
            'searchTerm' => [
                'required' => false,
                'type' => 'string'
            ]
            ],
      'permission_callback' => '__return_true'
      ));
    
      register_rest_route( 'studioscience/v1', '/resources/tags/', array(
        'methods' => 'GET',
        'callback' => 'get_resources_rest_search_tags',
        'permission_callback' => '__return_true'
        ));
    
      register_rest_route( 'studioscience/v1', '/resources/categories/', array(
            'methods' => 'GET',
            'callback' => 'get_resources_rest_search_categories',
            'permission_callback' => '__return_true'
            ));
  });
  
  function get_resources_rest_search(WP_REST_Request $request) {
            $page = $request['page'];
            $topic = $request['topic'];
            $categories = $request['categories'];
            $searchTerm = $request['searchTerm'];

           $args = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'order_by' => 'date',
            'order' => 'desc',
            'offset' => ($page - 1) * 9
          );
          if(!empty($topic)){
            $args['tag_id'] = $topic;
          }
          if(!empty($categories)){
            $args['cat'] = $categories;
          }
          if(!empty($searchTerm)){
            $args['s'] = $searchTerm;
          }
          
          $query = new WP_Query($args);
    
          $results = array();
          $results["max_pages"] = $query->max_num_pages;
          $results["topic"] = $request['topic'];
    
          if ( $query->have_posts() ) {
            $iterator = 0;
            foreach($query->posts as $value){
                $record = array();
                $iterator = $iterator + 1;
                // echo $iterator;
                // echo var_dump($value);

                $thumbnail = get_the_post_thumbnail_url($value->ID);
                $record["post_thumbnail"] = $thumbnail;
                
                // Copy Post Values
                $record["ID"] = $value->ID;
                $record["post_name"] = $value->post_name;
                $record["post_title"] = $value->post_title;
                $record["post_categories"] = get_the_category($value->ID);
                $record["post_tags"] = get_the_tags($value->ID);
                if($iterator <= 9){
                  $results[$iterator] = $record;
                }
            }
    
          }

      return $results;
  }

  function get_resources_rest_search_categories(WP_REST_Request $request) {
    $args = array(
        'hide_empty' => true,
        'exclude' => '1,15'
    );
    $results = get_categories($args);

    return $results;
}

function get_resources_rest_search_tags(WP_REST_Request $request) {
    $results = get_tags();

    return $results;
}
