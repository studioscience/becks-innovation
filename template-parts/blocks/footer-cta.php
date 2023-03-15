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

  $url = home_url( $path = '/', $scheme = 'https' );
?>
<?php if(get_field('link') ) : ?>
  <?php
    $link = get_field('link'); 
    $link_url = $link['url'];
    $link_title = $link['title'];
  ?>
  <?php if(is_array($link) ) : ?>
    <div class="footer-cta full-bleed cta-gradient flex relative overflow-visible max-h-auto <?php echo esc_attr($className); ?> mt-16">
      <div class="relative bottom-0">
        <div class="wp-block-gb-lottiefiles absolute -left-24 bottom-0 max-w-[100vw]" style="background-color:transparent"><lottie-player id="xnsuwzmn" interactivitytype="seek" interactivitymode="scroll" visibilitystart="0" visibilityend="1" framesstart="0" framesend="90" rest="{&quot;autoplay&quot;:false,&quot;loop&quot;:null,&quot;controls&quot;:null}" totalframes="90" mode="bounce" src="<?php echo $url; ?>wp-content/uploads/2022/11/data.json" speed="4" background="transparent" class="lottie-player mx-auto" style="width:650px;height:300px"></lottie-player></div>
      </div>
      <div class="mx-auto my-auto max-w-2xl px-4 sm:px-6 h-60 relative flex flex-col justify-center ml-[50%]">
        <h2 class="text-4xl font-medium text-white sm:text-4xl">
          <span class="block"><?php echo get_field('header'); ?></span>
        </h2>
        <?php if(!empty($link) ) : ?>
          <a href="<?php echo esc_url($link_url)?>" class="mt-8 w-full justify-center text-base font-medium text-turquoise sm:w-auto"><?php echo esc_html($link_title) ?><svg class="inline ml-2" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path></svg></a> 
        <?php endif ?>

      </div>
    </div>
  <?php endif ?>
<?php endif ?>

