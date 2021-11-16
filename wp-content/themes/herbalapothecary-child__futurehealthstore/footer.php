<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package herbalapothecary
 */

?>
</div> <!-- #content -->
<footer class="c-footer">
	<div class="c-footer__top l-restrict">
		<div class="c-footer__herbal">
			<?php the_custom_logo() ?>
			<p>
				Future Health Store
			</p>
		</div>
		<div class="c-footer__info c-footer__column">
			<h2>Company Info</h2>
			<a href="tel:+441947 603456">
				01947 603456
			</a>
			<a href="mailto:info@futurehealthstore.com">
				info@futurehealthstore.com
			</a>
			<p>
				25, Skinner Street, Whitby
			</p>
		</div>
		<div class="c-footer__social c-footer__column">
			<h2>Social</h2>
			<p>
				Find us on the following social channels
			</p>
			<a href="https://twitter.com/futurehealthsto?lang=en" class="c-footer__social-link">
				<i class="fab fa-twitter"></i><span>Twitter</span>
			</a>
			<a href="https://www.facebook.com/futurehealthstore/" class="c-footer__social-link">
				<i class="fab fa-facebook-f"></i><span>Facebook</span>
			</a>
			<!-- <a href="https://www.youtube.com/channel/UCAm5dGGrJEPctkyFP7LclDA" class="c-footer__social-link">
				<i class="fab fa-youtube"></i><span>Youtube</span>
			</a> -->
		</div>
	</div> <!-- End .c-footer__top -->
	<div class="c-footer__copywrite">
		Copyright &copy; 2021 Future Health Store All Rights Reserved
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>



<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://analytics.natureslaboratory.co.uk/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


</body>

</html>