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
			<p>Enjoy the regenerative and anti-ageing benefits of healthy and nourishing ingredients, with zero exposure to potentially harmful chemicals.</p>
		</div>
		<div class="c-footer__accreditations">
			<h2>Accreditations</h2>
			<p>
				We are proud to be a real Living Wage employer with ISO9001:2015 quality management
				systems and organic certification.
			</p>
			<div class="c-footer__accreditations-logos">
				<a rel="noreferrer" href="https://www.livingwage.org.uk/" target="_blank"><img src="/wp-content/uploads/2022/03/living_wage_employer.webp" width="106px" height="84px" alt="Living Wage"></a>
			</div>
		</div>
		<div class="c-footer__info c-footer__column">
			<h2>Company Info</h2>
			<a href="tel:+441947 602346">
				<i class="fa fa-phone"></i> 01947 602346
			</a>
			<a href="mailto:info@herbjar.co.uk">
				<i class="fa fa-envelope"></i> info@herbjar.co.uk
			</a>
			<p>
				<i class="fa fa-location-dot"></i> Unit 3B, Enterprise Way, Whitby, North Yorkshire
			</p>
		</div>
		<div class="c-footer__social c-footer__column">
<!--
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
-->
		</div>
	</div> <!-- End .c-footer__top -->
	<div class="c-footer__copywrite">
		Copyright &copy; 2022 Nature's Laboratory Ltd | All Rights Reserved
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>