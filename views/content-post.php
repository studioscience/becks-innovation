<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package swps
 */

?>

<article class="sm:py-20 py-10" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header mb-9 mx-auto max-w-[1000px]">
    <div class="rounded-md overflow-hidden aspect-w-5 aspect-h-3 -mt-6 md:aspect-w-2 md:aspect-h-1 rounded-br-[100px]">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div id="custom-bg" class="card-image rounded-md rounded-br-[100px] object-cover bg-cover bg-no-repeat object-left-top" style="background-image: url('<?php echo $image[0]; ?>')">
        </div>
      <?php endif; ?>
    </div>
		
	</header><!-- .entry-header -->
  <a href="/category/articles/" class="chevron-link">Back to Articles</a>
  
  <!-- width: 135px;
    display: flex;
    justify-content: space-around; -->
<section class="w-full max-w-6xl">
  <div class="grid md:grid-cols-12 gap-5">
    <aside class="md:col-span-3 md:pt-0 p-2 py-5 lg:pt-20 lg:pb-20">
      <div class="post-info-box">
        <?php
          $authorTitle = the_field('job_title', $post->ID);
          $author_id = get_the_author_meta('ID');
        ?>
        <span class="block posted-date mb-10">Posted <?php echo get_the_date(); ?></span>
        <div class="flex">
          
          <picture class="w-[60px]"><img style="border-radius:3px 3px 3px 18px" class="author-headshot" src="<?php the_field('author_headshot', 'user_'. $author_id); ?>" /></picture>
          
          <div class="ml-4">
            <span class="block font-bold post-author">
              <?php //echo get_the_author(); ?>
              <?php

              $fname = get_the_author_meta('first_name');
              $lname = get_the_author_meta('last_name');
              $full_name = '';

              if( empty($fname)){
                  $full_name = $lname;
              } elseif( empty( $lname )){
                  $full_name = $fname;
              } else {
                  //both first name and last name are present
                  $full_name = "{$fname} {$lname}";
              }

              echo $full_name;
              ?>
            </span>
            <span class="block post-author-title"><?php the_field('job_title', 'user_'. $author_id);?></span>
          </div>
        </div>

        <div class="social-share flex mt-8">
          <span class="block font-bold mr-4 tracking-[2px]">SHARE</span>
          <div class="a2a_kit a2a_default_style flex items-center w-[135px] justify-around">
            <a class="a2a_button_facebook">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/Facebook-Icon.svg" border="0" alt="Facebook" width="auto" height="auto">
            </a>
            <a class="a2a_button_linkedin">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/LinkedIn-Icon.svg" border="0" alt="Facebook" width="auto" height="auto">
            </a>
            <a class="a2a_button_twitter">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/Twitter-Icon.svg" border="0" alt="Facebook" width="auto" height="auto">
            </a>
            <a class="a2a_button_email">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/svg/Email-Icon.svg" border="0" alt="Facebook" width="auto" height="auto">
            </a>
          </div>

          <script async src="https://static.addtoany.com/menu/page.js"></script>
        </div>
      
      </div>
    </aside>
    <main class="md:col-span-9">

      <div class="mx-auto max-w-7xl px-4">
        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
        <div class="mx-auto max-w-3xl">
          <!-- Content goes here -->
          <div class="entry-content o-rte-text">
            <div class="entry-content-intro py-5 lg:pt-10 lg:pb-20">
              <div>
                <h3 class="eyebrow uppercase text-[16px] tracking-widest text-brand-purple"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; }  ?></h3>
                <h1 class="text-[24px] lg:text-[52px] leading-normal text-galaxy pb-5"><?php single_post_title(); ?></h1>
                <p style="color:#656565; font-size:40px; line-height:30px;"><?php echo the_excerpt(); ?></p>
              </div>
              <div class="entry-content-author">
                <p class="posted-date"></p>
                <div>
                  
                  <div>
                    <h3></h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <?php
              the_content(
                sprintf(
                  wp_kses(
                    /* translators: %s: Name of current post. */
                    __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'swps' ),
                    array(
                      'span' => array(
                        'class' => array(),
                      ),
                    )
                  ),
                  the_title( '<span class="screen-reader-text">"', '"</span>', false )
                )
              );

              wp_link_pages(
                array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'swps' ),
                  'after'  => '</div>',
                )
              );
            ?>
          </div><!-- .entry-content -->
        </div>
      </div>

    </main>
  </div>
</section>
  <footer class="entry-footer">
		 <!-- swps\Core\Tags::entry_footer();  -->
	</footer><!-- .entry-footer -->
</article>