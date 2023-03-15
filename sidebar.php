<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swps
 */

if ( ! is_active_sidebar( 'swps-sidebar' ) ) :
	return;
endif;
?>
<h1> this is a side bar</h1>
<?php
if ( is_customize_preview() ) {
	echo '<div id="swps-sidebar-control"></div>';
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php
	dynamic_sidebar( 'swps-sidebar' );
	?>
</aside><!-- #secondary -->
