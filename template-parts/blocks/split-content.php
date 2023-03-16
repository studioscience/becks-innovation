<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="c-split-content bg-contain bg-repeat-y bg-left relative<?php echo esc_attr($className); ?> bg-beige" id="" style="background-image: url(/wp-content/themes/becks/assets/dist/images/trax.png)">
  <div class="lg:text-center text-left py-6  px-4 lg:px-0 max-w-6xl mx-auto lg:pt-20 lg:pb-0">
    <h2 class="text-5xl leading-relaxed  font-medium text-black"><?php echo get_field('title'); ?></h2>
    <?php if(get_field('split_content_sub_header') ) : ?>
      <h3 class="pt-5 pb-10"><?php echo get_field('split_content_sub_header') ?></h3>
    <?php endif ?>  
  </div>
  <div class="lg:pt-20 mb-20">
    <div class="lg:mx-auto lg:pb-28 lg:grid lg:max-w-7xl grid-flow-col lg:grid-cols-2 lg:gap-24 lg:px-8">
      <div class="sm:mt-16 col-start-2 md:col-start-1 lg:mt-0">
        <div class="md:-ml-48 md:pr-4 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
          <img class=" w-full lg:max-w-3xl object-cover lg:h-full lg:rounded-lg" src="<?php echo get_field('image') ?>" alt="Customer profile user interface">
        </div>
      </div>
      <div class="mx-auto max-w-xl px-4 sm:px-6  md:col-start-2 lg:mx-0 lg:max-w-none lg:px-0">
        <div>
          <div class="mt-20">
            <div class="o-rte-text text-lg text-black pb-4"><?php echo get_field('body') ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <img class="absolute -bottom-12 -left-11" src="wp-content/themes/becks/assets/dist/images/trax-circle.png" alt="">
  </div>
</div>

