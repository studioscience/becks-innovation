<?php
  $className = 'c-block my-5 lg:my-10';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<section class="overflow-hidden bg-white">
<?php
$pullQuote = get_field('pull_quote');
if( $pullQuote ): ?>
  <div class="relative mx-auto max-w-7xl px-4 pt-20 pb-12 sm:px-6 lg:px-8 lg:pt-20 <?php echo esc_attr($className); ?> ">
    <div class="relative lg:flex lg:items-center">
      <div class="relative lg:mx-10">
        <blockquote class="relative">
          <div class="lg:max-w-3xl leading-9">
            <p class="text-2xl"><?php echo $pullQuote['block_quote']?></p>
          </div>
          <footer class="mt-8">
            <div class="flex">
              <div class="flex-shrink-0 lg:hidden">
                <img class="h-12 w-12 rounded-full" src="<?php echo esc_url( $pullQuote['image']) ?> " alt="">
              </div>
              <div class="ml-4 lg:ml-0">
                <div class="text-lg font-bold text-black"><?php echo $pullQuote['author'] ?></div>
                <div class="text-base"><?php echo $pullQuote['title'] ?></div>
              </div>
            </div>
          </footer>
        </blockquote>
      </div>
      <div class="hidden lg:block lg:flex-shrink-0 lg:pl-20">
        <img class="h-64 w-64 relative rounded-lg z-10 lg:rounded-bl-[100px] xl:h-60 xl:w-60" src="<?php echo esc_url( $pullQuote['image']) ?> " alt="">
        <svg class="absolute -z-8 top-1/2 hidden -translate-x-1/4 -translate-y-1/3 transform lg:block" width="380" height="240" viewBox="0 0 380 240" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M350 120H347.345C300.883 120 259.638 148.465 242.067 191.281C237.329 202.806 231.779 210 224.828 210C190.055 210 190.055 30 155.282 30C148.331 30 142.763 37.1941 138.043 48.7194C120.472 91.5355 79.2279 120 32.7472 120H30" stroke="url(#paint0_linear_3755_24141)" stroke-width="60" stroke-linecap="round" stroke-linejoin="round"/>
          <defs>
          <linearGradient id="paint0_linear_3755_24141" x1="2.78085" y1="120" x2="377.219" y2="120" gradientUnits="userSpaceOnUse">
          <stop stop-color="#873FE0"/>
          <stop offset="1" stop-color="#1D476F"/>
          </linearGradient>
          </defs>
        </svg>
      </div>
    </div>
  </div>
<?php endif; ?>
</section>
