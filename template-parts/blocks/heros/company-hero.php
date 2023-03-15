<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>
<div class="lg:mx-auto lg:grid lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-2 lg:gap-24 ">
  <div class="mx-auto px-4 sm:px-6 lg:col-start-2 lg:mx-0 lg:max-w-none lg:py-32 lg:px-0">
    <div>
      <div class="mt-6 lg:max-w-3xl mx-auto">
        <h3 class="uppercase text-sm tracking-wide text-brand-purple"><?php the_title(); ?></h3>
        <h2 class="heading mt-2 text-3xl md:text-5xl font-base tracking-wide !leading-tight text-white leading-8 tracking-tight text-galaxy sm:text-4xl"><?php the_field('heading'); ?></h2>
        <p class="mt-8 text-lg text-black"><p><?php the_field('body'); ?></p></p>
        <div class="mt-8">
          <a class="inline-flex items-center justify-center rounded-full button-gradient px-5 py-3 text-base font-medium text-white hover:bg-hero-gradient" href="#open-positions">View open positions</a>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-12 sm:mt-16 lg:col-start-1 lg:mt-0">
    <div class="pr-4 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
      <?php 
        $images = get_field('hero_images');
        $image_1 = $images[0];
        $image_2 = $images[1];
        $image_3 = $images[2];
        if( $images ): ?>
            <ul>
              <li>
                <a href="<?php echo esc_url($image_1['url']); ?>">
                  <img class="sm:rounded-md md:rounded-br-[140px] pt-20 md:pb-5" src="<?php echo esc_url($image_1['url']); ?>" alt="<?php echo esc_attr($image_1['alt']); ?>" />
                </a>
                <p><?php echo esc_html($image['0']['caption']); ?></p>
              </li>
              <div class="md:flex">
                <li>
                  <a href="<?php echo esc_url($image_2['url']); ?>">
                    <img class=" hidden md:block sm:rounded-md md:rounded-bl-[94px] md:pr-2.5" src="<?php echo esc_url($image_2['url']); ?>" alt="<?php echo esc_attr($image_2['alt']); ?>" />
                  </a>
                </li>
                <li>
                <a href="<?php echo esc_url($image_3['url']); ?>">
                  <img class="hidden md:block sm:rounded-md md:rounded-tl-[70px] md:pl-2.5" src="<?php echo esc_url($image_3['url']); ?>" alt="<?php echo esc_attr($image_3['alt']); ?>" />
                </a>
                </li>
              </div>
            </ul>
        <?php endif; ?>
    </div>
  </div>
</div>

<?php foreach( $images as $image ): ?>
                    
                <?php endforeach; ?>