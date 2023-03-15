<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>


<div class="c-stat-row <?php echo esc_attr($className); ?>" id="">
  <div class="pt-12 sm:pt-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-4xl text-center">
        <h2 class="text-5xl font-medium text-galaxy sm:text-5xl"><?php echo get_field('stat_header'); ?></h2>
      </div>
    </div>
    
    <div class="mt-20 bg-white pb-12 sm:pb-16">
      <div class="relative">
        <div class="absolute inset-0 h-1/2"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-4xl">
            <dl class="bg-white sm:flex sm:flex-cols-4 justify-center">
            
            <?php
              if( have_rows('stat_repeater') ):
              while( have_rows('stat_repeater') ) : the_row();
            ?>

              <div class="flex flex-col  p-6 text-center">
                <dt class="order-2 mt-2 text-2xl leading-6 text-black"><?php the_sub_field('stat_description'); ?></dt>
                <dd class="order-1 text-7xl font-bold text-brand-purple"><?php the_sub_field('large_number'); ?></dd>
              </div>

            <?php
              endwhile;
              endif;
            ?>
              
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
