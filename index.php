<?php
/**
 * Template Name: Post Page Template
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
    <?php the_title() ?>
      <section>
        <?php
		      if ( $page_id = get_option( 'resources' ) ) {
            echo get_the_title( $page_id );
        
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
              $the_query = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'category_name' => 'featured-post', // this is the category SLUG
                'order_by' => 'date',
                'order' => 'desc',
              ));
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while($the_query->have_posts() ) : $the_query->the_post() ?>
              <?php
                $categories = get_the_category();
                $separator = ' ';
                $output = '';
                if($categories){
                    foreach($categories as $category) {
                        $output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                    }
                echo trim($output, $separator);
                }
              ?>

              <div  class="md:max-w-7xl md:mx-auto my-10">
                <div class="bg-gray-50 rounded-lg bg-white-100 md:flex overflow-hidden">
                  <div class="image-wrap">
                    <picture class="">
                      <?php the_post_thumbnail( 'full', array( 'class' => 'lg:rounded-lg lg:rounded-br-[100px] bg-cover' ) ); ?>
                    </picture>  
                  </div>  
                  <div class="content md:max-w-2xl md:mx-auto md:px-24 my-auto">
                    <h3 class="uppercase text-[16px] tracking-widest text-purple-500">Featured resource</h3>
                    <h2 class="heading mt-2 text-3xl md:text-5xl font-base tracking-wide !leading-tight text-white leading-8 tracking-tight text-purple-900 sm:text-4xl"><?php echo the_title() ?></h2>
                    <p class="mt-8 text-lg text-gray-500"><?php echo the_excerpt() ?></p>
                    <div class="mt-8">
                      <a class="inline-flex items-center justify-center rounded-full border secondary-button bg-transparent px-5 py-3 text-base font-medium text-purple-500 hover:bg-hero-gradient" href="<?php echo get_permalink() ?>">Read More</a>
                    </div>
                  </div>  
                </div>
              </div>
              <?php endwhile ?>
            <?php endif ?>
          </div>
        </div>
        <div>
          
        </div>
      </section>
			<div id="primary" class="content-area sm:mt-40">
				<main id="main" class="site-main" role="main">
          <section class="md:max-w-7xl md:mx-auto">
            <?php
            if ( have_posts() ) :

              if ( is_home() && ! is_front_page() ) :
              ?>
                <header class="sm:flex sm:justify-between">
                  <h1 class="page-title heading mt-2 text-3xl md:text-5xl font-base tracking-wide !leading-tight text-white leading-8 tracking-tight text-purple-900 sm:text-4xl"><?php echo " "."Featured".single_post_title(); ?></h1>

                  <?php get_template_part('/template-parts/custom-search-form'); ?>
                </header>

              <?php
              endif; ?>
            <?php endif ?>
            <div class="relative px-4 pt-16 pb-20 sm:px-6  lg:pt-24 lg:pb-28">
              <div class="relative mx-auto max-w-7xl">
                <div class="mx-auto mt-12 grid max-w-lg gap-12 lg:max-w-none lg:grid-cols-4">
                  <?php if( have_posts() ) : ?>
                    <?php while( have_posts() ) : the_post(); ?>
                      <div class="flex flex-col overflow-hidden rounded-lg">
                        <div class="flex-shrink-0">
                          <picture>
                            <?php the_post_thumbnail( 'full', array( 'class' => 'lg:rounded-lg lg:rounded-br-[60px] bg-cover' ) ); ?>
                          </picture>
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-white">
                          <div class="flex-1">
                            <a href="#" class="mt-2 block">
                              <p class="text-xl font-semibo<?php
/**
 * Template Name: Post Page Template
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
    <?php the_title() ?>
      <section>
        <?php
		      if ( $page_id = get_option( 'resources' ) ) {
            echo get_the_title( $page_id );
        
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
              $the_query = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'post',
                'category_name' => 'featured-post', // this is the category SLUG
                'order_by' => 'date',
                'order' => 'desc',
              ));
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <?php while($the_query->have_posts() ) : $the_query->the_post() ?>
              <?php
                $categories = get_the_category();
                $separator = ' ';
                $output = '';
                if($categories){
                    foreach($categories as $category) {
                        $output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
                    }
                echo trim($output, $separator);
                }
              ?>

              <div  class="md:max-w-7xl md:mx-auto my-10">
                <div class="bg-gray-50 rounded-lg bg-white-100 md:flex overflow-hidden">
                  <div class="image-wrap">
                    <picture class="">
                      <?php the_post_thumbnail( 'full', array( 'class' => 'lg:rounded-lg lg:rounded-br-[100px] bg-cover' ) ); ?>
                    </picture>  
                  </div>  
                  <div class="content md:max-w-2xl md:mx-auto md:px-24 my-auto">
                    <h3 class="uppercase text-[16px] tracking-widest text-brand-purple">Featured resource</h3>
                    <h2 class="heading mt-2 text-3xl md:text-5xl font-base tracking-wide !leading-tight text-white leading-8 tracking-tight text-galaxy sm:text-4xl"><?php echo the_title() ?></h2>
                    <p class="mt-8 text-lg text-black"><?php echo the_excerpt() ?></p>
                    <div class="mt-8">
                      <a class="inline-flex items-center justify-center rounded-full border secondary-button bg-transparent px-5 py-3 text-base font-medium text-brand-purple hover:bg-hero-gradient" href="<?php echo get_permalink() ?>">Read More</a>
                    </div>
                  </div>  
                </div>
              </div>
              <?php endwhile ?>
            <?php endif ?>
          </div>
        </div>
        <div>
          
        </div>
      </section>
			<div id="primary" class="content-area sm:mt-40">
				<main id="main" class="site-main" role="main">
          <section class="md:max-w-7xl md:mx-auto">
            <?php
            if ( have_posts() ) :

              if ( is_home() && ! is_front_page() ) :
              ?>
                <header class="sm:flex sm:justify-between">
                  <h1 class="page-title heading mt-2 text-3xl md:text-5xl font-base tracking-wide !leading-tight text-white leading-8 tracking-tight text-galaxy sm:text-4xl"><?php echo " "."Featured".single_post_title(); ?></h1>

                  <?php get_template_part('/template-parts/custom-search-form'); ?>
                </header>

              <?php
              endif; ?>
            <?php endif ?>
            <div class="relative px-4 pt-16 pb-20 sm:px-6  lg:pt-24 lg:pb-28">
              <div class="relative mx-auto max-w-7xl">
                <div class="mx-auto mt-12 grid max-w-lg gap-12 lg:max-w-none lg:grid-cols-4">
                  <?php if( have_posts() ) : ?>
                    <?php while( have_posts() ) : the_post(); ?>
                      <div class="flex flex-col overflow-hidden rounded-lg">
                        <div class="flex-shrink-0">
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
                              <div class="flex space-x-1 text-sm text-black">
                              <a href="#" class="inline-flex w-full items-center py-2 text-base font-medium text-brand-purple hover:font-semibold sm:w-auto">Read More<svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile ?>  
                  <?php endif ?>
                  <div class="sideshow">
                    <?php get_template_part('/template-parts/custom-search-filter') ?>
                  </div>
                </div>
              </div>
            </div>
          
          </section>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col- -->
	</div><!-- .row -->                 
</div><!-- .container -->
<?php 
get_footer(); ?>


ld text-black"><?php the_title() ?></p>
                            </a>
                          </div>
                          <div class="mt-6 flex items-center">
                            <div class="">
                              <div class="flex space-x-1 text-sm text-gray-500">
                              <a href="#" class="inline-flex w-full items-center py-2 text-base font-medium text-purple-500 hover:font-semibold sm:w-auto">Read More<svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile ?>  
                  <?php endif ?>
                  <div class="sideshow">
                    <?php get_template_part('/template-parts/custom-search-filter') ?>
                  </div>
                </div>
              </div>
            </div>
          
          </section>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col- -->
	</div><!-- .row -->                 
</div><!-- .container -->
<?php 
get_footer(); ?>


