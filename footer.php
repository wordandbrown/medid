<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wbc
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="small-24 columns">
				<div class="logo">
					<img src="<?= get_template_directory_uri(); ?>/img/logo-medid.svg" alt="">
				</div>
			</div>
			<div class="small-24 columns">
				<ul>
					<li><a href=""><small>FAQs</small></a></li>
					<li><a href=""><small>Legal</small></a></li>
					<li><a href=""><small>Privacy Policy</small></a></li>
					<li><a href=""><small>Support</small></a></li>
					<li><a href=""><small>Contact</small></a></li>
				</ul>
			</div>
			<div class="small-24 columns">
				<p class="copyright">© 2016 Word and Brown Insurance Administrators</p>
			</div>
		</div>

	</footer><!-- #colophon -->

	

</main><!-- #main -->

<?php wp_footer(); ?>

</body>
</html>
