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
$grid = get_field('team_grid');
$header = get_field('header');
$image = get_field('background_image');
$team = get_posts(array(
  'numberposts' => 8,
  'post_type' => 'team',
));
$background_style = "background-image: url(" . $image .');';
?>

<section class="mt-40 mb-20">
  <div class="bg-white bg-auto bg-left bg-no-repeat px-4 sm:px-6 lg:px-8" style="<?php echo $background_style; ?>">
    <div class="mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8 lg:py-4">
      <div class="space-y-12">
        <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none lg:mx-auto text-center">
          <h2 class="text-5xl font-medium text-galaxy sm:text-5xl mb-20">Meet our executive team</h2>
          <?php if(get_field('sub_header')) : ?>
            <p class="text-xl text-black"><?php echo get_field('sub_header') ?></p>
          <?php endif ?>
        </div>
        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-4 lg:gap-x-10">
          <?php 
            $args = array(
                'post_type' => 'team',
                'category' => 'executive',
                'posts_per_page' => -1,
                'order_by' => 'date',
                'order' => 'desc',
            );
            $query = new WP_Query($args);
          ?>
          <?php if($query->have_posts()): ?>
            <?php while($query->have_posts()) : $query->the_post(); ?>
              <!-- the_post_thumbnail();  -->
              <?php $team_title = get_field('title',get_the_ID()); ?>
              <?php $linkedIn = get_field('social',get_the_ID()); ?>
              <?php $name = get_field('name',get_the_ID()); ?>
              
                <li class="lg:pb-10 relative">
                  <div class="space-y-4 lg:max-w-xl lg:mx-auto">
                    <div class="lg:aspect-w-2 lg:aspect-h-2 w-full">
                      <picture class="">
                        <?php the_post_thumbnail( 'full', array( 'class' => 'lg:rounded-lg lg:rounded-bl-[100px] bg-cover' ) ); ?>
                      </picture>
                    </div>
    
                    <div class="space-y-2">
                      <div class="space-y-1 leading-6 text-center">
                        <h3 class="pt-4 lg:pt-4 text-2xl font-medium leading-6 text-black"><?php echo $name; ?></h3>
                        <p class="text-black text-lg"><?php echo $team_title ?></p>
                      </div>
                      <ul role="list" class="flex space-x-5">
                        <?php if(is_array($linkedIn) ) : ?>
                          <li class="absolute top-0 right-0">
                            <a href="<?php echo $linkedIn['url'] ?>" target="_blank" class="text-galaxy hover:text-gray-500 ">
                              <span class="sr-only">LinkedIn</span>
                              <svg class="h-6 w-6 rounded-tr-lg " fill="#873FE0" aria-hidden="true">
                                <path d="M0 0H24V24H2C0.89543 24 0 23.1046 0 22V0Z" fill="#873FE0"/>
                                <path d="M7.81547 19.5676H4.67297V9.45762H7.81547V19.5676ZM6.24047 8.07762C5.23547 8.07762 4.41797 7.26012 4.41797 6.25512C4.41797 5.25012 5.23547 4.43262 6.24047 4.43262C7.24547 4.43262 8.06297 5.25012 8.06297 6.25512C8.06297 7.26012 7.24547 8.07762 6.24047 8.07762ZM19.583 19.5676H16.4405V14.6476C16.4405 13.4776 16.418 11.9701 14.8055 11.9701C13.193 11.9701 12.923 13.2451 12.923 14.5651V19.5601H9.78047V9.45762H12.7955V10.8376H12.8405C13.2605 10.0426 14.288 9.20262 15.818 9.20262C18.9905 9.20262 19.583 11.3026 19.583 14.0176V19.5676Z" fill="white"/>
                              </svg>
                            </a>
                          </li>
                        <?php endif ?>
                      </ul>
                    </div>
                  </div>
                </li>   
            <?php endwhile; ?>
          <?php endif ?>

          <!-- More people... -->
        </ul>
      </div>
    </div>
  </div>
</section>

