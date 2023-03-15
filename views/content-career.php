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
  
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-0 lg:flex">
    <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
    <div class="max-w-3xl">
      <!-- Content goes here -->
      <div class="entry-content o-rte-text">
        <div class="entry-content-intro lg:pb-20">
          <div>
            <?php 
            $job_title = get_field('career_title'); 
            $department = get_field('department');
            $location = get_field('location');
            $description = get_field('career_description')
            ?>
            <h1 class="text-[24px] lg:text-[38px] leading-normal text-galaxy pb-5"><?php echo $job_title ?></h1>
            <h3 class="eyebrow uppercase text-[16px] tracking-widest text-brand-purple md:pb-[40px]"><?php echo $department.', '.$location ?></h3>
            <p class="text-[14px] md:text-[16px]"><?php echo $description ?></p>
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
    <div>
    <div class="entry-sidebar max-w-xl mx-8">
      <!-- <h1>FORM GOES HERE</h1> -->
      <div class="flex justify-center align-center px-2">
        <!-- <div class="background-blue-purple-grad my-10 rounded-xl max-w-xl grow">
          <div class="mx-auto max-w-xl py-16 px-4 text-center sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-medium tracking-tight text-white sm:text-4xl mb-10">
              <span class="block">Is this position for you?</span>
            </h2>
            <p class="text-lg leading-6 text-white">Let's talk! Send us a copy of your CV or resume with a cover letter and we'll be in touch. </p>
            <a href="mailto:careers@as-software.com" class="mt-10 inline-flex w-full items-center justify-center rounded-full border border-transparent bg-[#66D9EA] px-5 py-2 text-base font-medium text-black hover:font-semibold sm:w-auto">Get in Touch<svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
          </div>
        </div> -->
        <?php if (get_field('form_embed') != '' ): ?>
        <div class="job-form-container">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' =>  get_field('form_embed') ) ); ?>
        </div>
        <?php endif; ?>
      </div>
    <div>
  </div>
  
</article>