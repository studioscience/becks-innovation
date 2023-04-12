<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="about-us bg-black relative <?php echo esc_attr($className); ?>" id="about-us">
  <div class="px-8  relative z-10">
    <div class="lg:text-center text-center md:text-left lg:pb-10 lg:px-0 max-w-5xl mx-auto py-14 lg:pt-20">
      <h2 class="md:text-5xl text-3xl leading-normal font-medium text-white"><?php echo get_field('title'); ?></h2>
      <?php if(get_field('split_content_sub_header') ) : ?>
        <h3 class="pt-5 pb-10"><?php echo get_field('split_content_sub_header') ?></h3>
      <?php endif ?>  
    </div>
    <div>
      <?php if (have_rows('about_card') ): ?>
        
        <?php  while( have_rows('about_card') ) : the_row(); 
          $image = get_sub_field('image');
          $name = get_sub_field('name');
          $title = get_sub_field('title');
          $email = get_sub_field('email');
          $link_in = get_sub_field('linkedin');
          $description = get_sub_field('description'); ?>

          <div class="c-card-wrap text-white py-8">
            <div class="lg:mx-auto max-w-l lg:flex lg:flex-row lg:max-w-5xl" id="about-card">
              <div class="w-full lg:mt-0">
                <img class="rounded-lg mx-auto md:max-w-lg pb-10 px-8" src="<?php echo esc_url($image); ?>" alt="">
              </div>
              <div class="mx-auto max-w-xl px-4 sm:px-6 lg:mx-0 lg:max-w-l lg:px-10 lg:py-14">
                <div class="intro">
                  <div class="flex flex-row">
                    <h3 class="text-xl font-semibold pr-6"><?php echo $name ?></h3>
                    <a href="" target="_blank"><?php include 'wp-content/themes/becks/assets/dist/svg/LinkedIn-Icon.svg' ?></a>
                  </div>
                  <div class="info pb-6 text-xs">
                    <span><?php echo $title ?></span>
                    </br>
                    <a class="underline !underline-offset-1" href="mailto:<?php echo $email?>"><?php echo $email?></a>
                  </div>
                </div>
                <div>
                  <?php echo $description ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

      <?php endif ; ?>    
    </div>
  </div>
  <img class="hidden md:inline-block absolute top-0 z-0" src="wp-content/themes/becks/assets/dist/images/trax.png" alt="">
  <img class="hidden md:inline-block absolute bottom-0 -left-1 z-0" src="wp-content/themes/becks/assets/dist/images/horz-trax.png" alt="">
</div>
 
