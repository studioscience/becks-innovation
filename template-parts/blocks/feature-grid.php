<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<section class="relative">
<svg class="wave absolute -bottom-14 right-0" width="341" height="174" viewBox="0 0 341 174" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M573 80C567.256 110 561.501 140 550.001 140C527.003 140 527.003 20 504.005 20C481.006 20 481.006 140 458.008 140C435.009 140 435.009 20 412.011 20C389.012 20 389.012 140 366.014 140C343.015 140 343.003 20 320.005 20C297.006 20 297.006 140 274.008 140C251.009 140 251.009 20 228.011 20C205.012 20 205.012 140 182.014 140C159.015 140 159.003 20 136.005 20C113.006 20 113.006 140 90.0076 140C67.0091 140 67.0091 20 43.9985 20C32.4992 20 26.7435 50 21 80" stroke="url(#paint0_linear_3752_20928)" stroke-width="40" stroke-linecap="round" stroke-linejoin="round"/>
  <rect x="131" y="120" width="250" height="54" fill="white"/>
  <defs>
  <linearGradient id="paint0_linear_3752_20928" x1="8.32463" y1="55.124" x2="535.051" y2="245.179" gradientUnits="userSpaceOnUse">
  <stop stop-color="#C39EEF"/>
  <stop offset="1" stop-color="#3A8CDD"/>
  </linearGradient>
  </defs>
</svg>
<?php if ( have_rows('feature_grid')):?>
  <?php while( have_rows('feature_grid')) : the_row();?>
    <div class="c-value-grid overflow-show bg-grid-blue w-full bg-cover full-bleed <?php echo esc_attr($className); ?>">
      <?php
        $rows = get_sub_field('feature_section' );
        if( $rows ) {
          $first_row = $rows[0];
          $first_row_icon = $first_row['feature_icon'];
          $first_row_heading = $first_row
          ['feature_heading'];
          $first_row_body = $first_row['feature_body'];
          $second_row = $rows[1];
          $second_row_icon = $second_row['feature_icon'];
          $second_row_heading = $second_row['feature_heading'];
          $second_row_body = $second_row['feature_body'];
          $third_row = $rows[2];
          $third_row_icon = $third_row['feature_icon'];
          $third_row_heading = $third_row['feature_heading'];
          $third_row_body = $third_row['feature_body'];
          $fourth_row = $rows[3];
          $fourth_row_icon = $fourth_row['feature_icon'];
          $fourth_row_heading = $fourth_row['feature_heading'];
          $fourth_row_body = $fourth_row['feature_body'];
        }
      ?>
      <div class="container mx-auto max-w-7xl px-8 pb-36 pt-48">
        <div class="lg:col-span-1 mb-20">
          <h2 class="mr-auto max-w-5xl text-5xl font-medium text-galaxy sm:text-5xl lg:max-w-5xl text-left"><?php echo get_sub_field('feature_section_header') ?></h2>
          <!-- <h2 class="text-3xl font-bold tracking-tight text-galaxy sm:text-4xl pt-14 pb-5 lg:pt-24 lg:w-2/3"><?php echo get_sub_field('feature_section_header') ?></h2> -->
          <?php if(get_sub_field('sub_header') ) : ?>
            <h3 class="text-xl max-w-5xl mt-7"><?php echo get_sub_field('sub_header') ?></h3>
          <?php endif ?>
        </div>
        <?php if( have_rows('feature_section') ): ?>
          <?php while( have_rows('feature_section') ): the_row();?>
          <!-- <?php var_dump($first_row_icon); ?> -->
          <div class="relative mx-auto max-w-7xl">
            <div class="relative lg:grid lg:grid-cols-1 lg:gap-x-8">
              <div class="lg:col-span-1">
                <dl class="space-y-20 sm:grid sm:grid-cols-2 sm:gap-x-16 sm:gap-y-20 sm:space-y-0 lg:col-span-2 pb-20">
                  <div>
                    <dt>
                      <div class="flex h-32 w-32 items-center justify-center rounded-md text-black">
                        <image>
                          <img src="<?php echo $first_row_icon['url'] ?>" alt="">
                        </image>
                      </div>
                      <p class="my-5 text-2xl font-medium leading-6 text-black"><?php echo get_sub_field('feature_heading') ?></p>
                    </dt> 
                    <dd class="mt-2 text-lg text-black"><?php echo get_sub_field('feature_body')?></dd>
                  </div>
                  <div>
                    <dt>
                    <div class="flex h-32 w-32 items-center justify-center rounded-md text-black">
                        <image>
                          <img src="<?php echo $second_row_icon['url'] ?>" alt="">
                        </image>
                      </div>
                      <p class="my-5 text-2xl font-medium leading-6 text-black"><?php echo $second_row_heading ?></p>
                    </dt>
                    <dd class="mt-2 text-lg text-black"><?php echo $second_row_body ?></dd>
                  </div>
                  <div>
                    <dt>
                    <div class="flex h-32 w-32 items-center justify-center rounded-md text-black">
                        <image>
                          <img src="<?php echo $third_row_icon['url'] ?>" alt="">
                        </image>
                      </div>
                      <p class="my-5 text-2xl font-medium leading-6 text-black"><?php echo $third_row_heading ?></p>
                    </dt>
                    <dd class="mt-2 text-lg text-black"><?php echo $third_row_body ?></dd>
                  </div>
                  <div>
                    <dt>
                    <div class="flex h-32 w-32 items-center justify-center rounded-md text-black">
                        <image>
                          <img src="<?php echo $fourth_row_icon['url'] ?>" alt="">
                        </image>
                      </div>
                      <p class="my-5 text-2xl font-medium leading-6 text-black"><?php echo $fourth_row_heading ?></p>
                    </dt>
                    <dd class="mt-2 text-lg text-black"><?php echo $fourth_row_body ?></dd>
                  </div>
                </dl>
                <?php break; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  <?php endwhile;?>
<?php endif;?>
</section>
