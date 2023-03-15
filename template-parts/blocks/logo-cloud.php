<?php
/**
 * Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

  // Create id attribute allowing for custom "anchor" value.
  $id = 'slider-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }  
  $className = 'c-block my-5 lg:my-10';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<?php if(get_field('logo_cloud') ) : ?>
  <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>  lg:block md:block c-logo-cloud mx-auto max-w-7xl py-16  sm:py-20 ">
    <h2 class="text-xl font-bold text-center letter-spacing-lg text-brand-purple uppercase"><?php echo get_field('header') ?></h2>
    <?php if(get_field('sub_header') ): ?>
      <h3><?php echo get_field('sub_header') ?></h3>
    <?php endif ?>  
    <?php if(have_rows('logo_cloud') ): ?>
    <div class="c-slide-wrap slider mt-8 flow-root lg:mt-10">
      <ul class="c-logo-slide slides -mt-4 flex flex-wrap justify-between lg:-ml-4">
      <?php while( have_rows('logo_cloud') ): the_row();
      $image = get_sub_field('logo_img'); ?>
        <li class=" mt-4 mx-4 flex lg:mx-4 "><a href="<?php echo get_sub_field('link') ?>" target="_blank"><img class="max-h-12 mx-auto" src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('company_name') ?> logo"></a></li>
      <?php endwhile; ?>
      </ul>
    </div>
    <?php endif; ?>
  </div>
<?php endif ?>


