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

<div class="testimonials-container relative">
	<div class="lg:text-center text-center md:text-left lg:px-0 max-w-5xl mx-auto py-8 lg:pt-20">
		<h2 class="md:text-5xl text-3xl leading-normal font-medium"><?php echo get_field('header'); ?></h2>
		<?php if(get_field('sub_header') ) : ?>
			<h3 class="pt-5 pb-10"><?php echo get_field('sub_header') ?></h3>
		<?php endif ?>  
	</div>
	<div class="testimonials">

		<?php if( have_rows('testimonials') ): ?>
						
			<?php while( have_rows('testimonials') ) : the_row(); ?>
				<div class="c-proof-card <?php echo esc_attr($className); ?> text-black bg-cover mx-auto md:rounded-lg" id='proof card'>
						<div class="c-card-wrap px-4 sm:px-6 lg:px-14">
								<div class="c-proof-intro md:flex md:justify-evenly w-auto">
										<div class="px-2">
											<div class="max-w-[200px]">
												<?php
														$link = the_sub_field('link')
												?>
												<?php if($link) : ?> <a href="<?php echo $link ?>"> <?php endif ?>
														<img class="max-h-[80px] w-auto hidden md:inline pb-8" src="<?php the_sub_field('proof_logo'); ?>">
												</a>
											</div>
											<div class="c-proof-body md:max-w-2xl lg:max-w-3xl px-2 pb-8">
												<blockquote class="mt-10 md:mt-0">
														<p class="text-m sm:text-xl lg:text-2xl"><?php the_sub_field('proof_quote');?></p>  
												</blockquote>
											</div>
											<h2 class="text-sm lg:text-xl font-bold"><?php the_sub_field('proof_author');?></h2>
											<p class="text-sm lg:text-l italic"c-proof-title><?php the_sub_field('proof_author_title');?></p>
											<p class="text-sm lg:text-l"c-proof-position><?php the_sub_field('proof_author_position');?></p>
										</div>
										<div>
											<img class="rounded-lg relative !z-10" src="<?php the_sub_field('proof_image') ?>" alt="">
										</div>
								</div>
						</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>    
	</div>
	<div class="arrows-box"></div>
	<div>
    <img class="hidden md:inline-block absolute top-0 right-0 z-0" src="wp-content/themes/becks/assets/dist/images/trax.png" alt="">
    <img class="absolute bottom-0 right-0 z-0 transform -scale-x-100" src="wp-content/themes/becks/assets/dist/images/trax-circle.png" alt="">
  </div>
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