<?php
/**
 * Template Name: Category Archive Page Template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package swps
 */

get_header();

?>

<div class="container-s mx-auto">

	<div class="row align-stretch">

		<div class="col-sm-8">
    
      <section>
        <?php
		      if ( $page_id = get_option( 'resources' ) ) {
            
        
            // the_content() doesn't accept a post ID parameter
            if ( $post = get_post( $page_id ) ) {
                setup_postdata( $post ); //  "posts" page is now current post for most template tags        
                the_content();
                wp_reset_postdata(); // So everything below functions as normal
                wp_reset_query();
            }
          }
		    ?>
        <div class="hero">
          <div>
            <?php
              global $category_name;
              $category_term_id;
              $the_query = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'category_name' => 'featured-post', // this is the category SLUG
                'order_by' => 'date',
                'order' => 'desc',
                'tax_query' => [
                  [
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $category_name,
                  ]
                ]
              ));
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while($the_query->have_posts() ) : $the_query->the_post() ?>
              <?php
                $categories = get_the_category();
                $separator = ' ';
                $output = '';
                $ctaText = 'Read More';
                if($categories){
                    foreach($categories as $category) {
                        $category_term_id = $category->term_id;
                        if($category->slug == "videos"){
                          $ctaText = "Watch Now";
                        }
                        $output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                    }
                
                }
              ?>

              <div  class="md:max-w-7xl md:mx-auto my-10">
                <div class="bg-gray-50 md:rounded-lg bg-white-100 md:flex md:flex-row">
                  <div class="image-wrap md:flex-1">
                      <?php the_post_thumbnail( 'full', array( 'class' => 'md:h-full md:w-full lg:rounded-lg lg:rounded-br-[100px] ' ) ); ?>
                  </div>  
                  <div class="content md:max-w-2xl md:mx-auto md:px-24 my-auto px-4 py-10 md:flex-1">
                    <h3 class="uppercase text-base font-bold letter-spacing-lg text-brand-purple">Featured resource</h3>
                    <h2 class="heading mt-7 text-5xl font-medium leading-10 text-galaxy sm:text-5xl"><?php echo the_title() ?></h2>
                    <p class="mt-8 text-lg text-gray-500"><?php echo the_excerpt() ?></p>
                    <div class="mt-8">
                      <a class="inline-flex border-purple-grad items-center justify-center rounded-full bg-transparent px-5 py-3 text-base font-medium text-purple-500" href="<?php echo get_permalink() ?>"><?php echo $ctaText ?></a>
                    </div>
                  </div>  
                </div>
              </div>
              <?php endwhile ?>
            <?php endif ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
        <div class="3-col-loop">
        <?php
              global $category_name;
              $the_query = new WP_Query(array(
                'posts_per_page' => 3,
                'offset' => 1,
                'post_type' => 'post',
                'category_name' => 'featured-post', // this is the category SLUG
                'order_by' => 'date',
                'order' => 'desc',
                'tax_query' => [
                  [
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $category_name,
                  ]
                ]
              ));
            ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <div class="relative px-4 pt-16 pb-20 sm:px-6  lg:pt-24 lg:pb-28">
            <div class="relative mx-auto max-w-7xl">
              <div class="mx-auto mt-12 grid max-w-lg gap-12 lg:max-w-none lg:grid-cols-3">
              <?php while($the_query->have_posts() ) : $the_query->the_post() ?>
              <?php
                $categories = get_the_category();
                $separator = ' ';
                $output = '';
                $ctaText = 'Read More';
                if($categories){
                    foreach($categories as $category) {
                      if($category->slug == "videos"){
                        $ctaText = "Watch Now";
                      }
                        $output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                    }
                
                }
              ?>
                <div class="flex flex-col overflow-hidden rounded-lg">
                  <div class="flex-shrink-0">
                  <?php
                  $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                  list($url, $width, $height, $is_intermediate) = $thumbnail;
                  ?>
                    <div class="feat-img-box lg:rounded-lg lg:rounded-br-[60px] bg-cover max-h-[210px]" style="height:<?php echo $height; ?>px;background-image:url(<?php echo $url; ?>);background-repeat:no-repeat;"></div>
                  </div>
                  <div class="flex flex-1 flex-col justify-between bg-white">
                    <div class="flex-1 my-4">
                      <a href="<?php echo get_permalink(); ?>" class=" block">
                        <h2 class="text-xl font-semibold text-black my-4"><?php the_title() ?></h2>
                        <p class="excerpt"><?php the_excerpt(); ?></p>
                      </a>
                    </div>
                    <div class="mt-6 flex items-center">
                      <div class="">
                        <div class="flex space-x-1 text-sm text-gray-500">
                        <a href="<?php echo get_permalink(); ?>" class="inline-flex border-purple-grad items-center justify-center rounded-full bg-transparent px-5 py-3 text-base font-medium text-purple-500"><?php echo $ctaText ?><svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile ?>
              </div>
            </div>
              <?php endif ?>
              <?php wp_reset_query(); ?>
              
          </div>
   
        </div>
      </section>
          <div class="wp-block-gutenberg-swps-swps-cta mt-block-user-card-wrapper" data-mt-attributes="{&quot;title&quot;:&quot;All <?php echo $category_name; ?>&quot;,&quot;category&quot;:&quot;<?php echo $category_term_id ?>&quot;,&quot;titleColor&quot;:&quot;white&quot;,&quot;overlayColor&quot;:&quot;black&quot;,&quot;overlayOpacity&quot;:0.3,&quot;backgroundImage&quot;:null}">Resources List Block
          Selected Category:all</div>
			<!-- <div id="primary" class="content-area sm:mt-40">
				<main id="main" class="site-main" role="main">
          <section class="md:max-w-7xl md:mx-auto">
            <header class="sm:flex px-4 sm:px-6 items-center sm:justify-between">
              <h1 class="page-title heading mt-2 text-3xl md:text-5xl font-base tracking-wide !leading-tight text-white leading-8 tracking-tight text-purple-900 sm:text-4xl"><?php echo " "."Featured".single_post_title(); ?></h1>

              <?php get_template_part('/template-parts/custom-search-form'); ?>
            </header>  
            
            <?php 
              $args = array(
                'posts_per_page' => 9,
                'order_by' => 'date',
                'order' => 'desc',
                'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $category_name,
              );
              $query = new WP_Query($args);
              ?>
              <div class="relative px-4 pt-16 pb-20 sm:px-6  lg:pt-24 lg:pb-28">
                <div class="relative mx-auto max-w-7xl">
                  <div class="mx-auto mt-12 grid max-w-lg gap-12 lg:max-w-none lg:grid-cols-4">
                    <?php if($query->have_posts()): ?>
                      <?php while($query->have_posts()) : $query->the_post(); ?>
                        <div class="flex flex-col">
                          <div class="flex-shrink-0 overflow-hidden rounded-lg">
                            <picture>
                              <?php the_post_thumbnail( 'full', array( 'class' => 'lg:rounded-lg lg:rounded-br-[60px] bg-cover' ) ); ?>
                            </picture>
                          </div>
                          <div class="flex flex-1 flex-col justify-between bg-white">
                            <div class="flex-1">
                              <a href="#" class="mt-2 block">
                                <p class="text-xl font-semibold text-black"><?php the_title() ?></p>
                              </a>
                            </div>
                            <div class="mt-6 flex items-center">
                              <div class="">
                                <div class="flex space-x-1 text-sm text-gray-500">
                                <a href="<?php echo get_permalink(); ?>" class="inline-flex w-full items-center py-2 text-base font-medium text-purple-500 hover:font-semibold sm:w-auto">Read More<svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php endwhile; ?>			
                      <?php 
                        wp_reset_postdata();
                        wp_reset_query(); ?>
                    <?php endif; ?>
                    <div class="sideshow bg-purple-100 rounded-lg hidden sm:block row-start-1 row-end-3 col-end-5">
                      <?php get_template_part('/template-parts/custom-search-filter') ?>
                    </div>
                  </div>
                </div> 
                </div>
              </div>
          </section>
				</main><!-- #main -->
			</div>
		</div><!-- .col- -->
	</div><!-- .row -->                 
</div><!-- .container -->
<?
get_footer(); 