<?php
  $className = 'c-block my-5 lg:my-10';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<section>
  <?php
  if( get_field('value_props')):
    $values = get_field('value_props');
    $image = $values['image'];
    $bg_blue = '/wp-content/themes/as-software/assets/dist/images/Light-Blue-Gradient@2x.png';
    $bg_purple = '/wp-content/themes/as-software/assets/dist/images/Light-Purple-Gradient@2x.png';
    $bg_aqua = '/wp-content/themes/as-software/assets/dist/images/Light-Aqua-Gradient@2x.png';

    if($image == 'Blue') {
      $background_style = "background: url(".$bg_blue.') center center no-repeat; background-size: cover;'; 
    } elseif($image == 'Purple') {
      $background_style = "background: url(" . $bg_purple .') center center no-repeat; background-size: cover;';
    } else {
      $background_style = "background: url(". $bg_aqua .') center center no-repeat; background-size: cover;';
    }
  ?>
  
  <div class="c-value-props relative bg-auto bg-no-repeat bg-center lg:bg-cover lg:bg-center px-4 py-6 sm:px-6 lg:py-32 <?php echo esc_attr($className); ?>" style="<?php echo $background_style; ?>">
    <div class="mx-auto max-w-7xl md:flex lg:py-20 lg:pr-0 xl:py-24">
      <div class="c-intro md:basis-1/3 md:pt-10 sm:mb-5 lg:mr-10 lg:pr-10 mt-5">
        <h2 class="c-brand-heading text-galaxy md:mb-5 font-medium text-primary-heading"><?php echo $values['heading'] ?></h2>
        <p class="body text-xl"><?php echo $values['body'] ?></p>
      </div>
      <div class="md:basis-2/3 px-4 lg:mt-8 lg:px-8">
        <?php if(have_rows('value_props') ) : while ( have_rows('value_props') ) : the_row(); ?>
          <?php if( have_rows('props') ) : while ( have_rows( 'props' ) ) : the_row();
            ;
            $icon = get_sub_field('icon');
            $heading = get_sub_field('prop_heading');
            $body = get_sub_field('prop_body');
          ?>
            <div class="c-intro lg:my-10">
              <h2 class="c-brand-heading font-medium lg:text-2xl"><?php echo $heading ?></h2>
              <p class="mt-1 text-lg"><?php echo $body ?></p>
            </div>
          <?php endwhile; endif; ?> 
        <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="absolute bottom-0 hidden lg:block left-0">
        <svg width="506" height="300" viewBox="0 0 706 300" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M-850 150.481C-837.01 83.2359 -824.049 15.9629 -798.097 15.9629C-746.195 15.9629 -746.195 284.999 -694.292 284.999C-642.39 284.999 -642.39 15.9629 -590.487 15.9629C-538.585 15.9629 -538.585 284.999 -486.682 284.999C-434.779 284.999 -434.807 15.9629 -382.905 15.9629C-331.002 15.9629 -331.002 284.999 -279.127 284.999C-227.253 284.999 -227.225 15.9629 -175.322 15.9629C-123.42 15.9629 -123.42 284.999 -71.545 284.999C-19.6702 284.999 -19.6424 15.9629 32.2602 15.9629C84.1627 15.9629 84.1628 284.999 136.065 284.999C187.968 284.999 187.968 15.9629 239.843 15.9629C291.717 15.9629 291.745 284.999 343.62 284.999C347.931 284.999 351.909 283.141 355.58 279.703C441.167 199.702 551.008 150.481 668.331 150.481H691" stroke="url(#paint0_linear_3752_20481)" stroke-width="30" stroke-linecap="round" stroke-linejoin="round"/>
          <defs>
          <linearGradient id="paint0_linear_3752_20481" x1="-865.738" y1="150.481" x2="706.77" y2="150.481" gradientUnits="userSpaceOnUse">
          <stop offset="0.432292" stop-color="#F3ECFC"/>
          <stop offset="1" stop-color="#C39EEF"/>
          </linearGradient>
          </defs>
        </svg>
      </div>
    </div>
    <?php endif ?>
</section>
