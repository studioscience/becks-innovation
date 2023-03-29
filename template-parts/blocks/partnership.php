<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="bg-contain bg-repeat-y bg-right relative <?php echo esc_attr($className); ?>" id="partnership" style="background-image: url(/wp-content/themes/becks/assets/dist/images/trax.png)">
  <div class="lg:text-center text-left py-6 px-4 lg:px-0 max-w-4xl mx-auto lg:pt-20 lg:pb-0">
    <h2 class="text-5xl leading-relaxed  font-medium text-black"><?php echo get_field('heading'); ?></h2>
    <div class="mt-1 mx-auto max-w-2xl">
      <div class="o-rte-text text-lg text-black pb-4"><?php echo get_field('body') ?></div>
    </div>
  </div>
  <div class="lg:pt-10 pb-20">
    <div class="lg:mx-auto lg:pb-28 lg:max-w-7xl lg:px-8">
      <div class="sm:mt-16 lg:mt-0">
        <div class="md:-ml-48 md:pr-4 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
          <ul class="interactive-chart lg:relative mb-20">
            <li class="absolute int-one rounded-full">
              <div class="int-point absolute"><?php echo get_field('point_one_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute int-one">
                <span><?php echo get_field('point_one_heading') ?></span>
                <p>
                  <?php echo get_field('point_one_body') ?>
                </p>
              </div>
            </li>
            <li class="absolute int-two rounded-full">
              <div class="int-point absolute"><?php echo get_field('point_two_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute int-two">
                <?php echo get_field('point_two_heading') ?>
                <p>
                  <?php echo get_field('point_two_body') ?>
                </p>
              </div>
            </li>
            <li class="absolute int-three rounded-full">
              <div class="int-point absolute"><?php echo get_field('point_three_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute int-three">
                <?php echo get_field('point_three_heading') ?>
                <p>
                  <?php echo get_field('point_three_body') ?>
                </p>
              </div>
            </li>
            <li class="absolute int-four rounded-full">
              <div class="int-point absolute"><?php echo get_field('point_four_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute int-four">
                <?php echo get_field('point_four_heading') ?>
                <p>
                  <?php echo get_field('point_four_body') ?>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

