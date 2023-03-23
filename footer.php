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
	<footer aria-labelledby="footer-heading" class="">
		<div class="bg-darkgreen px-28 py-10 md:px-4 lg:px-[160px] lg:gap-8">
			<div class="footer-intro max-w-xs p md:max-w-lg mx-auto">
				<div class="max-w-lg mx-auto">
					<ul class="socials flex items-center justify-center">
						<li class="vimeo"><a href="https://vimeo.com/user184258780" target="_blank"><?php include 'assets/dist/svg/vimeo.svg' ?></a></li>  
						<li class="linkedIn"><a href="https://www.linkedin.com/company/as-software-inc./" target="_blank"><?php include 'assets/dist/svg/LinkedIn-Icon.svg' ?></a></li>
					</ul>
				</div>
			<div class="copyright pt-6 text-white text-center">
				<?php
					$curYear = date('Y');
						echo '&copy' . $curYear;
				?> Becks Innovation Inc. All Rights Reserved
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
