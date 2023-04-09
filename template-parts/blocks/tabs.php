<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="bg-beige overflow-hidden" id="tabs-container">
  <div class="mb-10 text-center">
    <h1 class="text-2xl py-10 md:pt-20 px-6 max-w-xs mx-auto md:max-w-none lg:text-[42px] text-black"><?php echo get_field('header') ?></h1>
    <ul class="flex flex-row overflow-x-scroll scrollbar-hide max-w-sm lg:max-w-full mx-auto justify-center md:pt-[20px] -mb-px text-sm font-medium gap-8" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
          <button class="inline-block rounded-t-lg text-base border-b-2 text-green hover:text-black dark:text-black dark:hover:text-brand-purple border-green dark:border-brand-purple" id="first-tab" data-tabs-target="#<?php echo get_field('list_item') ?>" type="button" role="tab" aria-controls="profile" aria-selected="true"><?php echo get_field('list_item') ?></button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block rounded-t-lg text-base hover:text-black dark:text-black border-green dark:border-brand-purple" id="second-tab" data-tabs-target="#<?php echo get_field('list_item_2') ?>" type="button" role="tab" aria-controls="dashboard" aria-selected="false"><?php echo get_field('list_item_2') ?></button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block rounded-t-lg text-base hover:text-black border-green dark:text-black" id="third-tab" data-tabs-target="#<?php echo get_field('list_item_3') ?>" type="button" role="tab" aria-controls="settings" aria-selected="false"><?php echo get_field('list_item_3') ?></button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block whitespace-nowrap rounded-t-lg text-base hover:text-black border-green dark:text-black" id="fourth-tab" data-tabs-target="#<?php echo get_field('list_item_4') ?>" type="button" role="tab" aria-controls="settings" aria-selected="false"><?php echo get_field('list_item_4') ?></button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block rounded-t-lg text-base hover:text-black border-green dark:text-black" id="fifth-tab" data-tabs-target="#<?php echo get_field('list_item_5') ?>" type="button" role="tab" aria-controls="settings" aria-selected="false"><?php echo get_field('list_item_5') ?></button>
        </li>
    </ul>
  </div>
  <div id="myTabContent" class="bg-white max-h-[876px]">
    <div class="relative bg-gray-50 md:flex overflow-hidden" id="tab-1" role="tabpanel" aria-labelledby="<?php echo get_field('list_item') ?>-tab">
      <div class="image-wrap md:w-7/12">
        <img class="w-full" src="<?php echo esc_url(get_field('card_image')) ?>" alt="">
      </div>  
      <div class="content md:max-w-2xl max-w-xs mx-auto lg:mx-0 lg:my-auto md:px-24 py-10 md:w-5/12">
        <h3 class="uppercase text-xs font-semibold text-green"><?php echo get_field('eyebrow') ?></h3>
        <h2 class="text-xl md:text-2xl font-semibold py-2"><?php echo get_field('heading') ?></h2>
        <p class="text-sm md:text-xl font-normal text-black dark:text-black"><?php echo get_field('body') ?></p>
        <!-- <button id="arrow" type="button" role="next"><svg class="absolute bottom-40 right-40 " width="25" height="9" viewBox="0 0 25 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.88 8.96703L9.18 8.42703L11.38 5.04703L4.54 5.46703L0.0399999 5.46703L0.04 3.74703L4.54 3.74703L11.38 4.16703L9.18 0.78703L9.88 0.247031L14.24 4.60703L9.88 8.96703Z" fill="#00693F"/>
        </svg></button> -->
      </div>
    </div>
    <div class="hidden relative p-4 bg-gray-50" id="tab-2" role="tabpanel" aria-labelledby="<?php echo get_field('list_item_2') ?>-tab"><div class="image-wrap md:w-7/12">
        <img class="w-full" src="<?php echo esc_url(get_field('card_image_2')) ?>" alt="">
      </div>  
      <div class="content md:max-w-2xl max-w-xs mx-auto lg:mx-0 lg:my-auto md:px-24 py-10 md:w-5/12">
        <h3 class="uppercase text-xs font-semibold text-green"><?php echo get_field('eyebrow_2') ?></h3>
        <h2 class="text-xl md:text-2xl font-semibold py-2"><?php echo get_field('heading_2') ?></h2>
        <p class="text-sm md:text-xl font-normal text-black dark:text-black"><?php echo get_field('body_2') ?></p>
        <!-- <button id="arrow" type="button" role="next"><svg class="absolute bottom-40 right-40 " width="25" height="9" viewBox="0 0 25 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.88 8.96703L9.18 8.42703L11.38 5.04703L4.54 5.46703L0.0399999 5.46703L0.04 3.74703L4.54 3.74703L11.38 4.16703L9.18 0.78703L9.88 0.247031L14.24 4.60703L9.88 8.96703Z" fill="#00693F"/>
        </svg></button> -->
      </div>  
    </div>
    <div class="hidden relative p-4 bg-gray-50" id="tab-3" role="tabpanel" aria-labelledby="<?php echo get_field('list_item_3') ?>-tab">
      <div class="image-wrap md:w-7/12">
        <img class="w-full" src="<?php echo esc_url(get_field('card_image_3')) ?>" alt="">
      </div>  
      <div class="content md:max-w-2xl max-w-xs mx-auto lg:mx-0 lg:my-auto md:px-24 py-10 md:w-5/12">
        <h3 class="uppercase text-xs font-semibold text-green"><?php echo get_field('eyebrow_3') ?></h3>
        <h2 class="text-xl md:text-2xl font-semibold py-2"><?php echo get_field('heading_3') ?></h2>
        <p class="text-sm md:text-xl font-normal text-black dark:text-black"><?php echo get_field('body_3') ?></p>
        <!-- <button id="arrow" type="button" role="next"><svg class="absolute bottom-40 right-40 " width="25" height="9" viewBox="0 0 25 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.88 8.96703L9.18 8.42703L11.38 5.04703L4.54 5.46703L0.0399999 5.46703L0.04 3.74703L4.54 3.74703L11.38 4.16703L9.18 0.78703L9.88 0.247031L14.24 4.60703L9.88 8.96703Z" fill="#00693F"/>
        </svg></button> -->
      </div>  
    </div>
    <div class="hidden relative p-4 bg-gray-50" id="tab-4" role="tabpanel" aria-labelledby="<?php echo get_field('list_item_4') ?>-tab">
      <div class="image-wrap md:w-7/12">
        <img class="w-full" src="<?php echo esc_url(get_field('card_image_4')) ?>" alt="">
      </div>  
      <div class="content md:max-w-2xl max-w-xs mx-auto lg:mx-0 lg:my-auto md:px-24 py-10 md:w-5/12">
        <h3 class="uppercase text-xs font-semibold text-green"><?php echo get_field('eyebrow_4') ?></h3>
        <h2 class="text-xl md:text-2xl font-semibold py-2"><?php echo get_field('heading_4') ?></h2>
        <p class="text-sm md:text-xl font-normal text-black dark:text-black"><?php echo get_field('body_4') ?></p>
        <!-- <button id="arrow" type="button" role="next"><svg class="absolute bottom-40 right-40 " width="25" height="9" viewBox="0 0 25 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.88 8.96703L9.18 8.42703L11.38 5.04703L4.54 5.46703L0.0399999 5.46703L0.04 3.74703L4.54 3.74703L11.38 4.16703L9.18 0.78703L9.88 0.247031L14.24 4.60703L9.88 8.96703Z" fill="#00693F"/>
        </svg></button> -->
      </div>  
    </div>
    <div class="hidden relative p-4 bg-gray-50" id="tab-5" role="tabpanel" aria-labelledby="<?php echo get_field('list_item_5') ?>-tab">
      <div class="image-wrap md:w-7/12">
        <img class="w-full" src="<?php echo esc_url(get_field('card_image_5')) ?>" alt="">
      </div>  
      <div class="content md:max-w-2xl max-w-xs mx-auto lg:mx-0 lg:my-auto md:px-24 py-10 md:w-5/12">
        <h3 class="uppercase text-xs font-semibold text-green"><?php echo get_field('eyebrow_5') ?></h3>
        <h2 class="text-xl md:text-2xl font-semibold py-2"><?php echo get_field('heading_5') ?></h2>
        <p class="text-sm md:text-xl font-normal text-black dark:text-black"><?php echo get_field('body_5') ?></p>
        <!-- <button id="arrow" type="button" role="next"><svg class="absolute bottom-40 right-40 " width="25" height="9" viewBox="0 0 25 9" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.88 8.96703L9.18 8.42703L11.38 5.04703L4.54 5.46703L0.0399999 5.46703L0.04 3.74703L4.54 3.74703L11.38 4.16703L9.18 0.78703L9.88 0.247031L14.24 4.60703L9.88 8.96703Z" fill="#00693F"/>
        </svg></button> -->
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
  const foodButton = document.querySelector('#fourth-tab');
  const roboticsButton = document.querySelector('#fifth-tab');

  const container = document.querySelector('#tabs-container'); 
  const physicians = document.querySelector('#tab-1'); 
  const sonagraphers = document.querySelector('#tab-2'); 
  const teams = document.querySelector('#tab-3'); 
  const food = document.querySelector('#tab-4');
  const robotics = document.querySelector('#tab-5');

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
      food.classList.add('hidden');
      food.classList.remove('md:flex');
      robotics.classList.add('hidden');
      robotics.classList.remove('md:flex');
      teamsButton.classList.remove(...activeButtonClasses);
      teamsButton.classList.add(...disabledButtonClasses);
      sonaButton.classList.remove(...activeButtonClasses);
      sonaButton.classList.add(...disabledButtonClasses);
      foodButton.classList.remove(...activeButtonClasses);
      foodButton.classList.add(...disabledButtonClasses);
      roboticsButton.classList.remove(...activeButtonClasses);
      roboticsButton.classListe.add(...disabledButtonClasses);
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
      food.classList.add('hidden');
      food.classList.remove('md:flex');
      robotics.classList.add('hidden');
      robotics.classList.remove('md:flex');
      roboticsButton.classList.remove(...activeButtonClasses);
      roboticsButton.classList.add(...disabledButtonClasses);
      teamsButton.classList.remove(...activeButtonClasses);
      teamsButton.classList.add(...disabledButtonClasses);
      foodButton.classList.remove(...activeButtonClasses);
      foodButton.classList.add(...disabledButtonClasses);
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
      food.classList.add('hidden');
      food.classList.remove('md:flex');
      robotics.classList.add('hidden');
      robotics.classList.remove('md:flex');
      physButton.classList.remove(...activeButtonClasses);
      physButton.classList.add(...disabledButtonClasses);
      sonaButton.classList.remove(...activeButtonClasses);
      sonaButton.classList.add(...disabledButtonClasses);
      foodButton.classList.remove(...activeButtonClasses);
      foodButton.classList.add(...disabledButtonClasses);
      roboticsButton.classList.remove(...activeButtonClasses);
      roboticsButton.classListe.add(...disabledButtonClasses);
    }
    
    if(event.target.id === "fourth-tab") {
      /* Add and remove any classes for ACTIVE */
      food.classList.remove('hidden');
      food.classList.add('md:flex');
      food.classList.add(...activeTabClass);
      food.classList.remove(...disabledTabClass);
      foodButton.classList.add(...activeButtonClasses);
      foodButton.classList.remove(...disabledButtonClasses);
      /* Add and remove any classes for INACTIVE */
      physicians.classList.add('hidden');
      physicians.classList.remove('md:flex');
      sonagraphers.classList.add('hidden');
      sonagraphers.classList.remove('md:flex');
      teams.classList.add('hidden');
      teams.classlist.remove('md:flex');
      robotics.classList.add('hidden');
      robotics.classList.remove('md:flex');
      physButton.classList.remove(...activeButtonClasses);
      physButton.classList.add(...disabledButtonClasses);
      sonaButton.classList.remove(...activeButtonClasses);
      sonaButton.classList.add(...disabledButtonClasses);
      teamsButton.classList.remove(...activeButtonClasses);
      teamsButton.classList.add(...disabledButtonClasses);
      roboticsButton.classList.remove(...activeButtonClasses);
      roboticsButton.classList.add(...disabledButtonClasses);

    }
    if(event.target.id === "fifth-tab") {
      /* Add and remove any classes for ACTIVE */
      robotics.classList.remove('hidden');
      robotics.classList.add('md:flex');
      robotics.classList.add(...activeTabClass);
      robotics.classList.remove(...disabledTabClass);
      roboticsButton.classList.add(...activeButtonClasses);
      roboticsButton.classList.remove(...disabledButtonClasses);
      /* Add and remove any classes for INACTIVE */
      physicians.classList.add('hidden');
      physicians.classList.remove('md:flex');
      sonagraphers.classList.add('hidden');
      sonagraphers.classList.remove('md:flex');
      teams.classList.add('hidden');
      teams.classList.remove('md:flex');
      food.classList.add('hidden');
      food.classList.remove('md:flex');
      physButton.classList.remove(...activeButtonClasses);
      physButton.classList.add(...disabledButtonClasses);
      sonaButton.classList.remove(...activeButtonClasses);
      sonaButton.classList.add(...disabledButtonClasses);
      teamsButton.classList.remove(...activeButtonClasses);
      teamsButton.classList.add(...disabledButtonClasses);
      foodButton.classList.remove(...activeButtonClasses);
      foodButton.classList.add(...disabledButtonClasses);

    }
  }

  container.addEventListener('click',handleContainerClick);

</script>