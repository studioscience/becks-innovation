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
$hero = get_field('premium_hero');
$cta = $hero['cta_link'];
$cta_title = $cta['title'];
$cta_url = $cta['url'];



if(empty($cta_title)) {
  $cta_title = '';
  $cta_url = '';
}

if( is_front_page()): ?>
  <div class="relative bg-hero-gradient bg-cover bg-center <?php echo esc_attr($className); ?>">
    <div class="md:flex md:flex-row flex-col">
      <div class=" md:flex-1 md:w-1/2">
        <img class="h-full w-full" src="<?php echo esc_url( $hero['hero_img'] ); ?>" alt="">
      </div>
      <div class="md:flex-1 flex items-center px-4 py-12 sm:px-6 lg:px-10">
        <div class="text-white max-w-[600px] mx-auto">
          <h2 class="mt-2 text-3xl md:text-3xl font-base tracking-loose !leading-tight text-white xl:text-6xl"><?php echo $hero['heading'] ?></h2>
          <p class="mt-3 text-lg"><?php echo $hero['body'] ?></p>
          <div class="mt-8">
            <div class="inline-flex rounded-md">
              <a href="<?php echo esc_url($cta_url) ?>" class="inline-flex items-center justify-center rounded-full bg-turquoise px-5 py-3 text-base font-medium text-black hover:bg-gray-50">
                <?php echo esc_html($cta_title); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php else : ?>
  <div class="bg-hero-light-grade bg-cover bg-center my-25 flex flex-col md:flex-row <?php echo esc_attr($className); ?>">
    <div class="md:flex-1 md:w-1/2">
      <img class="h-full w-full bg-cover" src="<?php echo esc_url( $hero['hero_img'] ); ?>" alt="">
    </div>
    <div class="md:flex-1 flex items-center px-4 py-12 sm:px-6 lg:px-10">
      <div class="md:mx-auto text-black max-w-[600px]">
        <h3 class="uppercase text-base font-bold letter-spacing-lg text-brand-purple"><?php the_title(); ?></h3>
        <h2 class="heading mt-7 text-5xl font-medium leading-10 text-galaxy sm:text-5xl"><?php echo $hero['heading'] ?></h2>
        <?php if(!empty($hero['body']) ) : ?>
        <div class="mt-7 text-lg text-black"><?php echo $hero['body'] ?></div>
        <?php endif ?>
        <div class="mt-8">
          <div class="inline-flex rounded-md">
            <a href="<?php echo esc_url($cta_url) ?>" class="inline-flex items-center justify-center rounded-full button-gradient px-5 py-3 my-4 text-base font-medium text-white hover:bg-hero-gradient">
              <?php echo esc_html($cta_title); ?>
            </a>
          </div>
        </div>
        </div>
        
      </div>
    </div>
  </div>
<? endif; ?>