<?php
  $className = 'c-block my-5 lg:my-10';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>
<?php
  $content = get_field('callout_content');
  // $category_title = get_field('callout_content', $category[0]);
?>
<? if($content) : ?>
  <?php $title = get_the_title($content->ID);
  $category = get_the_category($content->ID);
  $name = $category[0]->name;
  $permalink = get_permalink($content->ID);
  $image = get_the_post_thumbnail_url($content->ID);
  $marginTop = get_field('offset_top');
  $marginBottom = get_field('offset_bottom');
  ?>
  <div class="<?php echo esc_attr($className); ?>">
  <?php if(get_field('offset_top') ) : ?>
    <div class="mx-auto max-w-7xl relative z-10 px-4 sm:px-6 lg:px-8" style="margin-top: -<?php echo $marginTop; ?>px">
  <?php else : ?>
    <div class="mx-auto max-w-7xl relative z-10 px-4 sm:px-6 lg:px-8" style="margin-bottom: -<?php echo $marginBottom; ?>px">
  <?php endif ?>    
      <div class="overflow-hidden rounded-xl bg-galaxy shadow-xl flex flex-col-reverse lg:grid lg:grid-cols-2 lg:gap-4">
        <div class="px-10 py-10 sm:px-16 sm:pt-16 lg:py-10 lg:pr-0 xl:py-10 xl:px-10">
          <div class="lg:self-center">
            <h3 class="mt-5 uppercase text-base font-bold letter-spacing-lg text-lavender"><?php echo $name ?></h3>
            <h2 class="text-4xl font-medium tracking-tight text-white sm:text-4xl my-6">
              <span class="block"><?php echo $title ?></span>
            </h2>
            <?php if(get_field('sub_heading') ) : ?>
              <p class="text-white"><?php echo get_field('sub_heading') ?></p>
            <?php endif ?>  
            <?php 
              $link = get_field('cta');
              if($permalink):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="mb-5 text-base font-medium text-turquoise hover:font-bold">
                  <a href="<?php echo $permalink ?>" class="items-center justify-center" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
                </div>
            <?php endif; ?>
          </div>
        </div>
        <?php 
        if($image) : ?>
          <div class="u-overlay overflow-hidden aspect-w-5 aspect-h-3 -mt-6 md:aspect-w-2 md:aspect-h-1 sm:rounded-bl-[100px]">
            <img class="card-image rounded-md sm:rounded-bl-[100px] object-cover object-left-top" src="<?php echo $image; ?>" alt="App screenshot" style="">
          </div>
        <?php else: ?>
         
        <?php endif ?>
      </div>
    </div>
  </div>
<?php endif ?>
