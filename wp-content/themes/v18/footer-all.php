<?php
/**
 * The template for displaying the footer for all types of pages
 *
 * Contains the closing of the tag 'main'  and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package v18
 */

?>

</main>

<footer class="page-footer">
	<div class="page-footer__wrapper">
		<div class="page-footer__container">
			<a href="index.html" class="page-footer__logo" title="На главную">XVIII <span class="dot">.</span></a>

			<?php
			wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'bottom-menu',
					'menu_class'     => 'page-footer__nav footer-list default-list'
				)
			);
			?>

		</div>
		<div class="page-footer__copyright copyright">
			<div>
				<p class="copyright__text">© Факультет филологии и искусств СПбГУ, 2008-2019</p>
				<p class="copyright__text">© Филологический факультет СПбГУ, 2010-2019</p>
			</div>
			<a class="copyright__link" href="<?php echo esc_url_raw('https://www.behance.net/anna_novik'); ?>" target="_blank">
				Designed by Anna Novik
			</a>
		</div>
	</div>
	<button class="page-footer__btn" onclick="topFunction()" id="myBtn" title="К началу">&uarr;</button>
</footer>

<?php wp_footer(); ?>

</body>
</html>
