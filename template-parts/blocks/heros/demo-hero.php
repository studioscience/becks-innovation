<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<?php
  $image = get_field('background_image');
  $background_style = "background: url(" . $image .') center no-repeat; background-size: cover;';
?>


  <div class=""style="<?php echo $background_style; ?>">
    <div class="wrap px-4  py-16 lg:flex lg:justify-between sm:max-w-7xl sm:mx-auto xl:py-[120px]">
      <div class="text-white pb-20 flex-1">
        <div>
          <h1 class="text-[32px] lg:text-5xl md:text-3xl pb-5"><?php echo get_field('header'); ?></h1>
          <h2 class="text-[20px] leading-7 lg:text-[24px] lg:leading-7 text-base pb-6"><?php echo get_field('sub_header'); ?></h2>
        </div>        
        <div class="hero-rte">
          <?php echo get_field('body'); ?>
        </div>
      </div>
      <div class="flex-1">
        <?php echo get_field('embed'); ?>
      </div>  
    </div>
  </div>
