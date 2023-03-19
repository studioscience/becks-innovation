<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="bg-contain bg-left bg-repeat-y bg-black relative  <?php echo esc_attr($className); ?>" id="about-us" style="background-image: url(/wp-content/themes/becks/assets/dist/images/trax.png)">
  <div class="lg:text-center text-left py-6 lg:pb-10 px-4 lg:px-0 max-w-5xl mx-auto lg:pt-20">
    <h2 class="md:text-5xl text-3xl leading-normal  font-medium text-white"><?php echo get_field('title'); ?></h2>
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

        <div class="c-card-wrap text-white">
          <div class="lg:mx-auto max-w-l pb-10 lg:flex lg:flex-row lg:max-w-5xl  lg:px-8" id="about-card">
            <div class="sm:mt-16 w-full lg:mt-0">
              <img class="rounded-lg  mx-auto max-w-lg pb-10" src="<?php echo esc_url($image); ?>" alt="">
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

