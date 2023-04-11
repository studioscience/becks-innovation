<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }

  if(empty($link)) {
    $link_title = '';
    $link_url = '';
  }

  $image = get_field('background_image');
  $background_style = "background: url(" . $image .') center no-repeat; background-size: cover;';

  $url = home_url( $path = '/', $scheme = 'https' );
?>
<?php if(get_field('link') ) : ?>
  <?php
    $link = get_field('link'); 
    $link_url = $link['url'];
    $link_title = $link['title'];
  ?>
  <?php if(is_array($link) ) : ?>
    <div class="max-h-auto <?php echo esc_attr($className); ?>" style="<?php echo $background_style; ?>">
      <div class="w-full footer-cta">
        <div class="mx-auto my-auto max-w-2xl px-4 sm:px-6 h-screen  relative flex flex-col justify-center">
          <h2 class="font-medium text-white pb-20 text-center text-4xl">
            <span class="block"><?php echo get_field('header'); ?></span>
          </h2>
          <?php if(!empty($link) ) : ?>
            <a class="menu-button bg-yellow mx-auto rounded-full border border-transparent px-12 py-2 text-base font-medium text-black shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"><?php echo esc_html($link_title) ?></a> 
          <?php endif ?>
        </div>
      </div>
    </div>
  <?php endif ?>
<?php endif ?>

