<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swps
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/wp-content/themes/becks/assets/dist/css/style.css" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/emj4isx.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<?php wp_head(); ?>
</head>
<script>
var nav = document.getElementById('site-menu');
var header = document.getElementById('top');
 

function navToggle() {
        var btn = document.getElementById('menuBtn');
        var nav = document.getElementById('menu');

        btn.classList.toggle('open');
        nav.classList.toggle('flex');
        nav.classList.toggle('hidden');
    }

	jQuery(document).ready(function($) {
		
		$('ul#menu-mobile-menu li.menu-item-has-children ul').hide();
		$('ul#menu-mobile-menu li.menu-item-has-children > a').addClass('sub-link closed-link');
		$('ul#menu-mobile-menu li.menu-item-has-children > a').click(function() {
			$(this).next().slideToggle();
			$(this).toggleClass('closed-link');
		});
	});
</script>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="mobile-header" class="lg:hidden w-full flex flex-col fixed md:relative bg-white pin-t pin-r pin-l">
		<div class="w-full md:w-auto self-start md:self-center flex flex-row md:flex-none flex-no-wrap justify-between items-center">
			<nav id="site-menu" class="flex flex-col md:flex-row w-full justify-between items-center px-4 md:px-6 py-1 bg-white shadow md:shadow-none pt-8 pb-8">
				<div class="w-full md:w-auto self-start md:self-center flex flex-row md:flex-none flex-no-wrap justify-between items-center">
					<h1 class="logo mr-auto cursor-pointer">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<picture class="w-12 h-12 "><?php include 'assets/dist/svg/Logo-mobile.svg'; ?></picture>	
						</a>
					</h1>
					<button id="menuBtn" class="hamburger block md:hidden focus:outline-none" type="button" onclick="navToggle();">
						<span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
					</button>
				</div>
				<div id="menu" class="w-full md:w-auto md:self-center md:flex flex-col md:flex-row  h-full py-1 pb-4 md:py-0 md:pb-0 hidden">
					<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu',
						'menu_class'  => 'mobile-menu',
					) ); ?>
					<div class="header-cta">
						<button type="button" class="menu-button bg-yellow inline-flex items-center justify-center rounded-full px-5 py-3 my-4 text-base font-medium text-black hover:bg-hero-gradient"><a href="<?php echo get_permalink(243); ?>" class="href">let's talk</a></button>
					</div>
				</div>
				
			</nav>
			
		</div>
	</header>
	<header id="masthead" class="bg-white px-4 lg:flex lg:justify-end lg:items-center lg:gap-8" role="banner">
		<h1 class="logo mr-auto cursor-pointer">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			 <picture class="w-12 h-12 "><?php include 'assets/dist/svg/Logo.svg'; ?></picture>	
			</a>
		</h1>

		<?php wp_nav_menu( array( 'theme_location' => 'header-menu',
		'menu_class'  => 'header-menu',
		 ) ); ?>

		<div class="header-cta">
			<button type="button" class="menu-button bg-yellow inline-flex items-center rounded-full border border-transparent px-4 py-3 text-base font-medium text-black shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"><a href="<?php echo get_permalink(243); ?>" class="href">Let's Talk</a></button>
		</div>
		
	</header><!-- #masthead -->

	<main id="content" class="site-content">
