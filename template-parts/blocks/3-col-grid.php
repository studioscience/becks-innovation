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

/**
 * Block Name: 3-col
 *
 * This is the template that displays a 3-col.
 */

  
  $bg_blue = '/wp-content/themes/as-software/assets/dist/images/light-blue-gradient.png';
  $bg_purple = '/wp-content/themes/as-software/assets/dist/images/Light-Purple-Gradient@2x.png';
  $image = get_field('background_image');
  $text_align_class = get_field('text_alignment');
  $align_class = $block['align'] ? 'align' . $block['align'] : '';
  $grid_classes = array($align_class, $text_align_class);

  if($image == 'Blue') {
    $background_style = "background: url(".$bg_blue.') center center no-repeat; background-size: cover;'; 
  } elseif($image == 'Purple') {
    $background_style = "background: url(" . $bg_purple .') center center no-repeat; background-size: cover;';
  } else {
    $background_style = "background-image: url('') center center no-repeat; background-size: cover;';";
  }
  
?>
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

/**
 * Block Name: 3-col
 *
 * This is the template that displays a 3-col.
 */

  
  $bg_blue = '/wp-content/themes/as-software/assets/dist/images/light-blue-gradient.png';
  $bg_purple = '/wp-content/themes/as-software/assets/dist/images/Light-Purple-Gradient@2x.png';
  $image = get_field('background_image');
  $text_align_class = get_field('text_alignment');
  $align_class = $block['align'] ? 'align' . $block['align'] : '';
  $grid_classes = array($align_class, $text_align_class);

  if($image == 'Blue') {
    $background_style = "background: url(".$bg_blue.') center center no-repeat; background-size: cover;'; 
  } elseif($image == 'Purple') {
    $background_style = "background: url(" . $bg_purple .') center center no-repeat; background-size: cover;';
  } else {
    $background_style = "background-image: url('') center center no-repeat; background-size: cover;';";
  }
  
?>

<div class="pb-36 pt-48 w-full bg-cover full-bleed <?php echo esc_attr($className); ?> <?php echo implode(" ", $grid_classes); ?> " style="<?php echo $background_style; ?>">
  <?php if(get_field('text_alignment') == "center:Center"): ?>
    <div class="mx-auto max-w-xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="mx-auto pb-16 md:text-center lg:w-7/12">
        <h2 class="text-5xl font-medium text-galaxy sm:text-5xl  "><?php echo get_field('header') ?></h2>
        <?php if(get_field('sub_header')): ?>
          <h3 class="pt-5"><?php echo get_field('sub_header') ?></h3>
        <? endif ?>
      </div>  
      <dl class="space-y-10 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
      <?php if( have_rows('3-col_grid') ) :  ?>
        <?php while( have_rows('3-col_grid') ) : the_row(); ?>
          <div class="flex flex-col">
            <dt class="flex items-center flex-col">
              <div class="flex h-32 w-32 items-center justify-center rounded-md text-black">
                <!-- Heroicon name: outline/globe-alt -->
                <img src="<?php echo get_sub_field('icon') ?>" alt="">
              </div>
              <p class="my-5 text-2xl font-medium leading-6 text-black"><?php echo get_sub_field('heading') ?></p>
            </dt>
            <dd class="text-lg text-black text-center flex flex-col justify-between grow">
              <?php echo get_sub_field('body') ?>
              <?php if(get_sub_field('link') ) : ?>
                <?php $link = get_sub_field('link'); ?>
                <a href="<?php echo $link['url'] ?>" class="text-brand-purple block text-center mt-4 font-medium hover:font-semibold"><?php echo $link['title']; ?><svg class="inline" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
              <?php endif ?>
              
            </dd>
          </div>
        <?php endwhile ?>

      <?php endif ?>
      </dl>
    </div>
  <?php else : ?>  
  <div class="w-full bg-cover full-bleed <?php echo implode(" ", $grid_classes); ?> ">
    <div class="mx-auto max-w-xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="mr-auto max-w-4xl pb-6 text-5xl font-medium text-galaxy sm:text-5xl lg:max-w-4xl text-left"><?php echo get_field('header') ?></h2>
      <p class="text-xl pb-20"><?php echo get_field('sub_header') ?></p>
      <dl class="space-y-10 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
      <?php if( have_rows('3-col_grid') ) :  ?>
        <?php while( have_rows('3-col_grid') ) : the_row(); ?>
          <div class="flex flex-col lg:pr-8">
            <dt class="flex justify-left flex-col">
              <div class="flex h-20 w-20 items-center justify-center rounded-md text-black">
              <img src="<?php echo get_sub_field('icon') ?>" alt="">
              </div>
              <h2 class="my-5 text-2xl font-medium leading-6 text-black"><?php echo get_sub_field('heading') ?></h2>
              <p class="body"><?php echo get_sub_field('body') ?></p>
            </dt>
            <dd class="text-base text-black text-center flex flex-col justify-between grow">
              <!-- This is where column long form copy goes -->
            </dd>
          </div>
        <?php endwhile ?>
      <?php endif ?>  
        
        
      </dl>
    </div>
  </div>

  <?php endif ?>
</div>

