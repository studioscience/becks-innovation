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
// {

// 	var targetElement = document.querySelector(".break-trigger");
// 	window.alert("Alert")
// 	const observerCallback = (entries, observer) => {
// 		entries.forEach(entry => {
// 			if (entry.isIntersecting) {
// 				// Change the background color when the target element is intersecting with the viewport
				
// 				entry.target.style.backgroundColor = "lightgreen";
// 			} else {
// 				// Revert the background color when the target element is no longer intersecting with the viewport
// 				entry.target.style.backgroundColor = "lightblue";
// 			}
// 		});
// 	}
// 	const options = {
// 		threshold: 0.5 // The target element is considered intersecting when at least 50% of it is visible in the viewport
// 	};
// 	const observer = new IntersectionObserver(observerCallback, options);
// 	// Start observing the target element
// 	observer.observe(targetElement);
// };
window.addEventListener("scroll", function() {
	var header = document.getElementById("masthead");
  var elementTarget = document.getElementById("break-trigger");
  if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight)) {
		header.classList.add("header-trigger").remove("header-bg-clean");
  } else if (window.scrollY < (elementTarget.offsetTop + elementTarget.offsetHeight)) {
		header.classList.remove("header-trigger").add("header-bg-clean");
  }
});
</script>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="masthead" class="header header-bg-clean transition-all fixed top-0 z-10 shadow-md w-full px-6 lg:px-10 lg:flex lg:justify-end lg:items-center lg:gap-8" role="banner">
		<h1 class="logo mr-auto cursor-pointer">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			 <picture class="header-clean w-8 lg:w-12 h-12 "><?php include 'assets/dist/svg/Logo.svg'; ?></picture>
			 <picture class="trigger w-8 lg:w-16 h-12"><?php include 'assets/dist/svg/black-becks-logo.svg' ?></picture>	
			</a>
		</h1>
		<div class="header-cta">
			<button type="button" id="open-modal" class="menu-button bg-yellow mx-auto rounded-full border border-transparent px-12 py-2 text-base font-medium text-black shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Let's Talk</button>
		</div>
		
	</header><!-- #masthead -->

	<main id="content" class="site-content">
