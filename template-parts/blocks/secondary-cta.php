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
  $header = get_field('header');
?>
<?php if($header) : ?>
  <?php
   $body = get_field('body');
   $link = get_field('cta');
   $link_url = $link['url'];
   $link_title = $link['title'];
  ?>
  <div class="flex justify-center align-center w-full full-bleed px-2">
  <div class="background-blue-purple-grad my-10 rounded-xl max-w-6xl grow">
    <div class="mx-auto max-w-2xl py-16 px-4 text-center sm:py-20 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-medium tracking-tight text-white sm:text-4xl mb-10">
        <span class="block"><?php echo $header ?></span>
      </h2>
      <p class="text-lg leading-6 text-white"><?php echo $body ?></p>
      <a href="/contact-us" target="none" class="mt-10 inline-flex w-full items-center justify-center rounded-full border border-transparent bg-[#66D9EA] px-5 py-2 text-base font-medium text-black hover:font-semibold sm:w-auto"><?php echo $link_title ?><svg class="inline ml-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></a>
    </div>
  </div>
</div>
<?php endif ?>


