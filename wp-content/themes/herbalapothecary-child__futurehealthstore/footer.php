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
				Future Health Store is run by The Dispensary, a not-for-profit community interest company based in Whitby, North Yorkshire.
			</p>
		</div>
		<div class="c-footer__accreditations">
			<h2>Accreditations</h2>
			<p>
<!--
				We are proud to be a real Living Wage employer with ISO9001:2015 quality management
				systems and organic certification.
-->
			</p>
			<div class="c-footer__accreditations-logos">
<!--
				<a rel="noreferrer" href="https://www.livingwage.org.uk/" target="_blank"><img src="/wp-content/uploads/2021/09/living-wage.png" width="106px" height="84px" alt="Living Wage"></a>
				<a href="/quality/" title="High Quality Herbal Products"><img src="/wp-content/uploads/2021/09/cqs.png" alt="CQS" width="72px" height="90px" loading="lazy"></a>
				<a href="/organic/" title="Organic Herbal Products"><img src="/wp-content/uploads/2021/09/euorg.png" alt="euorg" width="138px" height="92px" loading="lazy"></a>
-->
			</div>
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
			<a href="https://instagram.com/futurehealthstore" class="c-footer__social-link">
				<i class="fab fa-instagram"></i><span>Instagram</span>
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
    _paq.push(['setSiteId', '5']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


</body>

</html>