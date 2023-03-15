<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="c-split-content <?php echo esc_attr($className); ?>" id="">
  <div class="lg:text-center text-left py-6  px-4 lg:px-0 max-w-4xl mx-auto lg:pt-20 lg:pb-0">
    <h2 class="text-5xl font-medium text-galaxy sm:text-5xl "><?php echo get_field('split_content_header'); ?></h2>
    <?php if(get_field('split_content_sub_header') ) : ?>
      <h3 class="pt-5 pb-10"><?php echo get_field('split_content_sub_header') ?></h3>
    <?php endif ?>  
  </div>
  <?php if( have_rows('split_content') ): ?> 
    <?php while( have_rows('split_content') ) : the_row(); ?> 
    <?php 
      $image = get_sub_field('content_image');
      $header = get_sub_field('split_header');
      $body = get_sub_field('content_body');
      $eyebrow = get_sub_field('eyebrow');
      $content_link = get_sub_field('split_content_link');
      $content_url = '';
      if($content_link) {
        $content_title = $content_link['title'];
        $content_url = '<a href="'.$content_link['url'].'" class="capitalize text-brand-purple
        w-full items-center justify-center rounded-full border border-transparent py-2 text-base font-medium text-black hover:font-semibold sm:w-auto">'.$content_title.'<svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>';
      }
      
      if(empty($content_title) ) {
        $content_title = 'Learn More';
      }
    ?>
      <?php
        if(get_sub_field('display_image_right')) {
          
          echo '<div class="relative bg-white lg:mb-20 lg:mt-40">
          <div class="lg:absolute lg:inset-0">
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2 ">
              <img class="h-56 w-full lg:max-w-xl object-cover lg:absolute lg:h-full lg:rounded-lg lg:rounded-bl-[100px]" src="'.$image.'" alt="">
            </div>
          </div>
          <div class=" relative px-4 pt-12 pb-16 sm:px-6 sm:pt-16 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div class="lg:col-start-1 lg:pr-8">
              <div class="mx-auto max-w-prose text-base lg:mr-auto lg:ml-0 lg:max-w-lg">
                <h3 class="uppercase text-base font-bold letter-spacing-lg text-brand-purple">'. $eyebrow .'</h3>
                <h2 class="mt-6 text-4xl font-medium leading-8 tracking-tight text-black sm:text-4xl pb-5">'. $header .'</h2>
                <div class="o-rte-text text-lg text-black pb-4">'. $body .'</div>
                '.$content_url.'
              </svg></p></a>
              </div>
            </div>
          </div>
        </div>';
        }else {
          echo '<div class="lg:mt-40 mb-20">
                  <div class="lg:mx-auto lg:grid lg:max-w-7xl grid-flow-col lg:grid-cols-2 lg:gap-24 lg:px-8">
                    <div class="mt-12 sm:mt-16 col-start-2 md:col-start-1 lg:mt-0">
                      <div class="md:-ml-48 md:pr-4 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
                        <img class=" w-full lg:max-w-xl object-cover lg:absolute lg:h-full lg:rounded-lg lg:rounded-br-[100px]" src="'.$image.'" alt="Customer profile user interface">
                      </div>
                    </div>
                    <div class="mx-auto max-w-xl px-4 sm:px-6  md:col-start-2 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
                      <div>
                        <div class="mt-6">
                        <h3 class="uppercase text-base font-bold letter-spacing-lg text-brand-purple">'. $eyebrow .'</h3>
                        <h2 class="mt-6 text-4xl font-medium leading-8 tracking-tight text-black sm:text-4xl pb-5">'. $header .'</h2>
                        <div class="o-rte-text text-lg text-black pb-4">'. $body .'</div>
                        '.$content_url.'
                        </div>
                      </div>
                    </div>
                  </div>
                </div>';
        }
      ?>
    <?php endwhile; ?>
  <?php endif; ?>   
</div>

