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
  if( get_field('brand_story')): 
    $story = get_field('brand_story');
    $image = $story['background_image'];
    $icon = $story['icon'];
    $heading = $story['heading'];
    $subheading = $story['sub_heading'];
    $body = $story['body'];
    $background_style = "background-image: url(" . $image .');';
  ?>
  <div class="c-brand-story bg-auto bg-no-repeat bg-center lg:bg-cover lg:bg-center px-4 py-6 sm:px-6 text-white <?php echo esc_attr($className); ?>" style="<?php echo $background_style; ?>">
    <div class="c-brand-wrapper mx-auto md:flex md:justify-between lg:max-w-7xl lg:py-52 px-4">
      <div class="c-intro">
        <img src="<?php echo $icon ?>" alt="">
        <h2 class="c-brand-heading md:pt-10 lg:text-3xl text-primary-heading sm:mb-5"><?php echo $heading ?></h2>
        <?php if($subheading) : ?>
          <h3><?php echo $subheading ?></h3>
        <?php endif ?>
      </div>
      <div class="c-brand-body md:basis-3/4">
        <p class="body lg:px-10 mt-5"><?php echo $body ?></p>
      </div>
    </div>
  </div>
  <?php endif ?>
</section>
