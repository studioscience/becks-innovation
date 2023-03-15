<?php
/**
 * Template Name: Auxilary Page Template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package swps
 */

get_header();

?>

<div class="">
	<div class="header" style="background-image:url('/wp-content/themes/as-software/assets/dist/images/light-blue-gradient.png')">
		<div class="title-wrap mx-auto max-w-7xl md:max-w-4xl px-4 sm:px-6 mb-10 md:mb-20 lg:px-8 md:h-[180px] h-[90px] flex items-center">
			<h1 class=" text-[24px] md:text-[42px] text-galaxy"><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="container mx-auto">
		
		<div id="primary " class="content-area mx-auto md:max-w-4xl px-4 sm:px-6 lg:px-8">
			<main id="main" class="site-main o-rte-text" role="main">
				
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'views/content', get_post_format() );


				endwhile;

				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer();