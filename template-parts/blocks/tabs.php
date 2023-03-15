<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="md:max-w-7xl md:mx-auto px-4 py-10 md:py-20" id="tabs-container">
  <div class="mb-10 text-center">
    <h1 class="lg:text-[42px] text-galaxy"><?php echo get_field('header') ?></h1>
    <ul class="flex flex-wrap justify-center pt-[120px] -mb-px text-sm font-medium gap-20" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
          <button class="uppercase letter-spacing-lg inline-block pb-4 rounded-t-lg text-xl border-b-4 text-brand-purple hover:text-black dark:text-black dark:hover:text-brand-purple border-brand-purple dark:border-brand-purple" id="first-tab" data-tabs-target="#<?php echo get_field('list_item') ?>" type="button" role="tab" aria-controls="profile" aria-selected="true"><?php echo get_field('list_item') ?></button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="uppercase letter-spacing-lg inline-block pb-4 rounded-t-lg text-xl border-b-4 text-brand-purple hover:text-black dark:text-black dark:hover:text-brand-purple border-brand-purple dark:border-brand-purple" id="second-tab" data-tabs-target="#<?php echo get_field('list_item_2') ?>" type="button" role="tab" aria-controls="dashboard" aria-selected="false"><?php echo get_field('list_item_2') ?></button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="uppercase letter-spacing-lg inline-block pb-4 rounded-t-lg text-xl border-b-4 text-brand-purple hover:text-black dark:text-black dark:hover:text-brand-purple border-brand-purple dark:border-brand-purple" id="third-tab" data-tabs-target="#<?php echo get_field('list_item_3') ?>" type="button" role="tab" aria-controls="settings" aria-selected="false"><?php echo get_field('list_item_3') ?></button>
        </li>
    </ul>
  </div>
  <div id="myTabContent" class="md:max-w-7xl md:mx-auto">
      <div class="bg-gray-50 rounded-xl dark:bg-purple-100 md:flex overflow-hidden" id="tab-1" role="tabpanel" aria-labelledby="<?php echo get_field('list_item') ?>-tab">
        <div class="image-wrap">
          <img class="rounded-br-[140px]" src="<?php echo esc_url(get_field('card_image')) ?>" alt="">
        </div>  
        <div class="content md:max-w-2xl md:mx-auto md:px-24 my-auto p-6">
          <h3 class="uppercase text-base font-bold letter-spacing-lg text-brand-purple"><?php echo get_field('eyebrow') ?></h3>
          <h2 class="text-4xl font-medium py-5"><?php echo get_field('heading') ?></h2>
          <p class="text-base font-small text-black dark:text-black"><?php echo get_field('body') ?></p>
        </div>  
      </div>
      <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="tab-2" role="tabpanel" aria-labelledby="<?php echo get_field('list_item_2') ?>-tab"><div class="image-wrap">
          <img class="rounded-br-[140px]" src="<?php echo esc_url(get_field('card_image_2')) ?>" alt="">
        </div>  
        <div class="content md:max-w-2xl md:mx-auto md:px-24 my-auto">
          <h3 class="uppercase text-base font-bold letter-spacing-lg text-brand-purple"><?php echo get_field('eyebrow_2') ?></h3>
          <h2 class="text-4xl font-medium py-5"><?php echo get_field('heading_2') ?></h2>
          <p class="text-base font-small text-black dark:text-black"><?php echo get_field('body_2') ?></p>
        </div>  
      </div>
      <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="tab-3" role="tabpanel" aria-labelledby="<?php echo get_field('list_item_3') ?>-tab">
        <div class="image-wrap">
          <img class="rounded-br-[140px]" src="<?php echo esc_url(get_field('card_image_3')) ?>" alt="">
        </div>  
        <div class="content md:max-w-2xl md:mx-auto md:px-24 my-auto">
          <h3 class="uppercase text-base font-bold letter-spacing-lg text-brand-purple"><?php echo get_field('eyebrow_3') ?></h3>
          <h2 class="text-4xl font-medium py-5"><?php echo get_field('heading_3') ?></h2>
          <p class="text-base font-small text-black dark:text-black"><?php echo get_field('body_3') ?></p>
        </div>  
      </div>
  </div>
</div>

<script>
  const activeButtonClasses = ['inline-block', 'rounded-t-lg', 'border-b-2', 'text-brand-purple', 'hover:text-black', 'dark:text-brand-purple', 'dark:hover:text-brand-purple', 'border-brand-purple', 'dark:border-galaxy']
  const disabledButtonClasses = ['inline-block', 'rounded-t-lg', 'border-transparent', 'hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300', 'dark:border-transparent', 'text-black', 'dark:text-gray-400',]
  const activeTabClass = ['bg-gray-50', 'dark:bg-purple-100', 'md:flex' ,'overflow-hidden']
  const disabledTabClass = ['hidden', 'p-4', 'bg-gray-50', 'dark:bg-gray-800']
  // get each button
  const physButton = document.querySelector('#first-tab');
  const sonaButton = document.querySelector('#second-tab');
  const teamsButton = document.querySelector('#third-tab');

  const container = document.querySelector('#tabs-container'); 
  const physicians = document.querySelector('#tab-1'); 
  const sonagraphers = document.querySelector('#tab-2'); 
  const teams = document.querySelector('#tab-3'); 

  const handleContainerClick = (event) => { 
    if(event.target.id === "first-tab") {
      /* Add and remove any classes for ACTIVE */
      physicians.classList.remove('hidden');
      physicians.classList.add('md:flex');
      physicians.classList.add(...activeTabClass);
      physicians.classList.remove(...disabledTabClass);
      physButton.classList.add(...activeButtonClasses);
      physButton.classList.remove(...disabledButtonClasses);
      /* Add and remove any classes for INACTIVE */
      sonagraphers.classList.add('hidden');
      sonagraphers.classList.remove('md:flex');
      teams.classList.add('hidden');
      teams.classList.remove('md:flex');
      teamsButton.classList.remove(...activeButtonClasses);
      teamsButton.classList.add(...disabledButtonClasses);
      sonaButton.classList.remove(...activeButtonClasses);
      sonaButton.classList.add(...disabledButtonClasses);
    }

    if(event.target.id === "second-tab") {
      /* Add and remove any classes for ACTIVE */
      sonagraphers.classList.remove('hidden');
      sonagraphers.classList.add('md:flex');
      sonagraphers.classList.add(...activeTabClass);
      sonagraphers.classList.remove(...disabledTabClass);
      sonaButton.classList.add(...activeButtonClasses);
      sonaButton.classList.remove(...disabledButtonClasses);
      
      /* Add and remove any classes for INACTIVE */
      physicians.classList.add('hidden');
      physicians.classList.remove('md:flex');
      teams.classList.add('hidden');
      teams.classList.remove('md:flex');
      teamsButton.classList.remove(...activeButtonClasses);
      teamsButton.classList.add(...disabledButtonClasses);
      physButton.classList.remove(...activeButtonClasses);
      physButton.classList.add(...disabledButtonClasses);
    }
    
    if(event.target.id === "third-tab") {
      /* Add and remove any classes for ACTIVE */
      teams.classList.remove('hidden');
      teams.classList.add('md:flex');
      teams.classList.add(...activeTabClass);
      teams.classList.remove(...disabledTabClass);
      teamsButton.classList.add(...activeButtonClasses);
      teamsButton.classList.remove(...disabledButtonClasses);
      /* Add and remove any classes for INACTIVE */
      physicians.classList.add('hidden');
      physicians.classList.remove('md:flex');
      sonagraphers.classList.add('hidden');
      sonagraphers.classList.remove('md:flex');
      physButton.classList.remove(...activeButtonClasses);
      physButton.classList.add(...disabledButtonClasses);
      sonaButton.classList.remove(...activeButtonClasses);
      sonaButton.classList.add(...disabledButtonClasses);
    }
  }

  container.addEventListener('click',handleContainerClick);

</script>