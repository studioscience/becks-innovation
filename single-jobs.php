<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package swps
 */

get_header(); ?>

<div class="bg-no-repeat bg-cover" style="background-image:url('/wp-content/themes/as-software/assets/dist/images/background-wave.png')">
	<div class="container mx-auto ">
		<div id="primary" class="content-area mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<main id="main" class="site-main" role="main">
				
				<?php

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'views/content-career', get_post_format() );


				endwhile;

				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer();


