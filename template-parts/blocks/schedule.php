<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="schedule hidden fixed overflow-scroll top-0 w-full justify-center bg-beige <?php echo esc_attr($className); ?>" id="schedule-modal">
  <div class="px-8 pt-20 relative w-full">
    <div class="schedule-wrap border-x-2 border-t-2 rounded-t-lg border-tan relative">
      <div class="absolute right-0 lg:mr-10 lg:mt-5">
        <button class="text-white bg-green p-2 rounded-full" id="close-modal"><?php include "wp-content/themes/becks/assets/dist/svg/close.svg"?></button>
      </div>
      <div class="lg:flex lg:flex-row">
        <div class="c-card-wrap text-black lg:px-20 lg:pt-20 lg:pb-40">
          <div class="text-center px-4 py-4 md:text-left lg:pb-10 lg:px-0">
            <h2 class="md:text-5xl text-3xl leading-normal font-medium text-black"><?php echo get_field('header'); ?></h2>
            <?php if(get_field('sub_header') ) : ?>
              <h3 class="pt-5 pb-10"><?php echo get_field('sub_header') ?></h3>
            <?php endif ?>  
          </div>
          <div class="lg:flex lg:flex-row gap-8 ">
            <?php if (have_rows('team') ): ?>
              <?php  while( have_rows('team') ) : the_row(); 
              $image = get_sub_field('team_img');
              $name = get_sub_field('team_name');
              $title = get_sub_field('team_title');
              $email = get_sub_field('team_email');
              $link_in = get_sub_field('linked_in');
            ?>
            <div class="" id="about-card">
              <div class="lg:mt-0">
                <img class="rounded-xl w-full lg:max-w-[240px]" src="<?php echo esc_url($image); ?>" alt="">
              </div>
              <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-l">
                <div class="intro">
                  <div class="flex flex-row lg:pt-8">
                    <h3 class="text-xl font-semibold pr-6"><?php echo $name ?></h3>
                    <a href="" target="_blank"><?php include 'wp-content/themes/becks/assets/dist/svg/LinkedIn-Icon.svg' ?></a>
                  </div>
                  <div class="info pb-6 text-xs">
                    <span><?php echo $title ?></span>
                    </br>
                    <a class="underline !underline-offset-1" href="mailto:<?php echo $email?>"><?php echo $email?></a>
                  </div>
                </div>
              </div>
            </div>
              <?php endwhile; ?>
            <?php endif ; ?>     
          </div>
        </div>
        <div class="lg:w-1/2 lg:py-20">
         <!-- Calendly inline widget begin -->
          <div class="calendly-inline-widget rounded-xl overflow-hidden shadow-lg" data-url="https://calendly.com/kevin-deal/30min?hide_landing_page_details=1" style="max-width:439px;height:594px;"></div>
          <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
          <!-- Calendly inline widget end -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  setTimeout(()=> {
    var modal = document.getElementById('schedule-modal');
    var buttons = document.querySelectorAll('.menu-button');// triggers open 
    var closeModal = document.getElementById("close-modal");// triggers close 

    const openModal = () => {
      console.log('Button clicked');
      modal.classList.add('flex');
      modal.classList.add('modal--active'); //active class
      modal.classList.remove('hidden');
    };


    buttons.forEach((button) => {
    button.addEventListener('click', openModal);
    });
    
    closeModal.addEventListener('click', function(e) {
      modal.classList.remove('modal--active');
      modal.classList.add('hidden');
      modal.classList.remove('flex');

    });
  }, 200)
  


</script>
<!-- button.addEventListener('click', function(e) {
   
    }); -->