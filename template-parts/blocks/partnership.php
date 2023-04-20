<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<div class="bg-contain bg-repeat-y bg-right relative mb-[150px] md:pb-0 <?php echo esc_attr($className); ?>" id="partnership">
  <div class="text-center py-6 px-4 lg:px-0 max-w-4xl mx-auto lg:pt-20 lg:pb-0">
    <h2 class="md:text-5xl text-3xl leading-tight  font-medium text-black"><?php echo get_field('heading'); ?></h2>
    <div class="mt-1 mx-auto max-w-4xl leading-loose">
      <div class="o-rte-text text-lg text-black pb-4"><?php echo get_field('body') ?></div>
    </div>
  </div>
  <div class="lg:pt-10 pb-20">
    <div class="lg:mx-auto lg:pb-28 lg:max-w-7xl lg:px-8">
      <div class="sm:mt-16 lg:mt-0">
        <div class="md:-ml-48 md:pr-4 sm:pr-6 md:-ml-16 lg:relative lg:m-0 lg:h-full lg:px-0">
          <ul class="interactive-chart lg:relative mb-20">
            <li class="absolute int-object int-one rounded-full" id="int-one">
              <div class="int-point absolute text-center text-sm w-24 lg:text-base font-sans leading-tight"><?php echo get_field('point_one_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute w-80 top-72 -left-[74px] int-one">
                <span><?php echo get_field('point_one_heading') ?></span>
                <p>
                  <?php echo get_field('point_one_body') ?>
                </p>
              </div>
            </li>
            <li class="absolute int-object int-two rounded-full" id="int-two">
              <div class="int-point absolute text-sm w-24 lg:text-base text-center font-sans leading-tight"><?php echo get_field('point_two_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute w-80 top-[250px] right-0 int-two">
                <span><?php echo get_field('point_two_heading') ?></span>
                <p>
                  <?php echo get_field('point_two_body') ?>
                </p>
              </div>
            </li>
            <li class="absolute int-object int-three rounded-full" id="int-three">
              <div class="int-point absolute text-sm text-center w-24 lg:text-base font-sans leading-tight"><?php echo get_field('point_three_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute w-80 -left-[74px] -bottom-[160px] int-three">
                <span><?php echo get_field('point_three_heading') ?></span>
                <p>
                  <?php echo get_field('point_three_body') ?>
                </p>
              </div>
            </li>
            <li class="absolute int-object int-four rounded-full" id="int-four">
              <div class="int-point absolute text-sm text-center w-24 lg:text-base font-sans leading-tight"><?php echo get_field('point_four_heading') ?></div>
              <div class="int-circle w-full rounded-full"></div>
              <div class="point-description absolute w-80 top-[250px] int-four">
                <span><?php echo get_field('point_four_heading') ?></span>
                <p>
                  <?php echo get_field('point_four_body') ?>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <img class="hidden md:inline-block absolute top-0 right-0 z-0" src="wp-content/themes/becks/assets/dist/images/trax.png" alt="">
  <img class="hidden md:inline-block absolute bottom-0 right-0 z-0" src="wp-content/themes/becks/assets/dist/images/trax.png" alt="">
</div>

<script>
  // on click int-object
  // remove int-active from any that have it
  // apply int-active to int-object that was clicked 

  var intObject = document.querySelectorAll('.int-object');
 
  var intOne = document.getElementById('int-one');
  var intTwo = document.getElementById('int-two');
  var intThree = document.getElementById('int-three');
  var intFour = document.getElementById('int-four');

 
  const handleIntObjectClick = (event) => {
    console.log(event);
    intOne.classList.remove('int-active');
    intTwo.classList.remove('int-active');
    intThree.classList.remove('int-active');
    intFour.classList.remove('int-active');

    let target = event.target;
    if(!event.target.classList.contains('int-object')) {
      target = event.target.parentElement;
    }
    target?.classList.add('int-active');
  }

  intObject.forEach( (val, Idx, Num) => {
    val.addEventListener('click', handleIntObjectClick);
  })
</script>