<?php
  $className = 'testimonial-slider';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

<div class="testimonials-container">
    <div class="testimonials">

    <?php if( have_rows('testimonials') ): ?>
            
            <?php while( have_rows('testimonials') ) : the_row(); ?>
        <div class="c-proof-card <?php echo esc_attr($className); ?> py-16 lg:py-24 text-white bg-purple-gradient bg-cover mx-auto md:rounded-lg" id='proof card'>
            <div class="c-card-wrap px-4 sm:px-6 lg:px-14">
                <div class="c-proof-intro md:flex md:justify-evenly w-auto">
                    <div class="px-2">
                        <div class="max-w-[200px]">
                            <?php
                                $link = the_sub_field('link')
                            ?>
                            <?php if($link) : ?> <a href="<?php echo $link ?>"> <?php endif ?>
                                <img class="max-h-[80px] w-auto hidden md:inline pb-4" src="<?php the_sub_field('proof_logo'); ?>">
                            </a>
                        </div>
                        <h2 class="text-sm lg:text-xl font-bold"><?php the_sub_field('proof_author');?></h2>
                        <p class="text-sm lg:text-l italic"c-proof-title><?php the_sub_field('proof_author_title');?></p>
                        <p class="text-sm lg:text-l"c-proof-position><?php the_sub_field('proof_author_position');?></p>
                    </div>
                    <div class="c-proof-body md:max-w-2xl lg:max-w-3xl px-2">
                        <blockquote class="mt-10 md:mt-0">
                            <p class="text-m sm:text-xl lg:text-2xl"><?php the_sub_field('proof_quote');?></p>  
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>    

    </div>
    <div class="arrows-box"></div>
</div>
<script>
jQuery('.testimonials').slick({
  centerMode: true,
  useCSS:false,
  slidesToShow: 1,
  slidesToScroll: 1,
  //autoplay: true,
  variableWidth: false,
  variableHeight: true,
  dots: false,
  infinite: true,
  swipeToSlide: true,
  adaptiveHeight: true,
  adaptiveWidth: true,
  mobileFirst: true,
  arrows: true,
  appendArrows : '.arrows-box',
  responsive: [
    {
        breakpoint: 991,
        settings: {
            variableWidth: true
        }
    }
  ]
});
</script>