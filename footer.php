<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package swps
 */

?>

	</main><!-- #content -->


	<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
	<footer aria-labelledby="footer-heading">
		
		<div class="bg-white px-4 py-10 lg:flex lg:justify-end lg:my-[96px] lg:px-[160px] lg:gap-8">
			<div class="footer-intro lg:mr-auto">
				<h1 class="logo cursor-pointer">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<picture class="w-12 h-12 "><?php include 'assets/dist/svg/Logo.svg'; ?></picture>	
					</a>
				</h1>
				<div class="max-w-m ">
					
					<ul class="socials flex">
						<li class="vimeo"><a href="https://vimeo.com/user184258780" target="_blank"><?php include 'assets/dist/svg/vimeo.svg' ?></a></li>  
						<li class="linkedIn"><a href="https://www.linkedin.com/company/as-software-inc./" target="_blank"><?php include 'assets/dist/svg/LinkedIn-Icon.svg' ?></a></li>
					</ul>
				</div>
			</div>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu',
					'menu_class' => 'footer',
				) ); ?>
			<div class="mt-4 xl:mt-0">
				<h3 class="text-base font-bold text-black">Subscribe to our newsletter</h3>
				<p class="mt-4 text-base text-black">Get our latest posts in your email</p>
				<div class="form-container-sub">
					<script src="//go.as-software.com/js/forms2/js/forms2.min.js"></script> <form id="mktoForm_1066"></form> <script>MktoForms2.loadForm("//go.as-software.com", "074-NJA-430", 1066);</script>
				</div>
			</div>
		</div>
		<div class="subfooter px-4 py-10 lg:flex lg:justify-between lg:px-[160px]">
			<div class="auxillary">
				<?php wp_nav_menu( array( 'theme_location' => 'auxiliary-menu',
				'menu_class' => 'aux-menu',
				) ); ?>
			</div>
			<div class="copyright">
				<?php
					$curYear = date('Y');
						echo '&copy' . $curYear;
				?> AS Software Inc. All Rights Reserved
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- LinkedIn -->
<script type="text/javascript">
_linkedin_partner_id = "4086860";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=4086860&fmt=gif" />
</noscript>
</body>
</html>
