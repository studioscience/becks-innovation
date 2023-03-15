<?php
/**
 * Template Name: Home Page Template
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package swps
 */

get_header();

?>

<div class="container-s mx-auto">

	<div class="row align-stretch">

		<div class="col-sm-8">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
						?>
							

						<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							get_template_part( 'views/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'views/content', 'none' );

					endif;
					?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div><!-- .col- -->

		<div id="sidebar" class="col-sm-4">
			<?php get_sidebar(); ?>
		</div><!-- .col- -->

	</div><!-- .row -->

</div><!-- .container -->
<?
get_footer(); 
