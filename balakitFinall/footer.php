<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package balakIT
 */

?>
	</main>

	<footer id="contact" class="footer">
		<div class="footer__call-section">
			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
				<p>Business<br /> Development</p>
			</a>
			<button data-fancybox data-src="#modal5" href="javascript:;" class="red-button">Перезвоните Мне</button>
			<div style="display: none;" id="modal5">
				<h2>Консультанты открыты для всех ваших вопросов и всегда готовы помочь.<br/> <span class="red-text">Оставьте заявку и мы свяжемся с вами в ближайшее время.</span></h2>

				<div action="" class="action-block__form">
					<?php echo do_shortcode( '[contact-form-7 id="46" title="Форма в футере"]' ); ?>
				</div>
			</div>
			<ul class="phone-list">
				<li><a href="tel:+380443339108">+38 (044) 333 91 08</a></li>
				<li><a href="tel:+380673238058">+38 (067) 323 80 58</a></li>
				<li><a href="tel:+380504126878">+38 (050) 412 68 78</a></li>
				<li><a href="tel:+74951452507">+7 (495) 145 25 07</a></li>
				<li><a href="mailto:info@balak-it.com.ua">info@balak-it.com.ua</a></li>
				<li><span>г.Киев, ул. Глубочицкая, 40у</span></li>
			</ul>
		</div>
		<div class="footer__map-section">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.896446773469!2d30.494161316040437!3d50.461652979476945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce6f8f290521%3A0xfa825e48e4a06b96!2z0YPQuy4g0JPQu9GD0LHQvtGH0LjRhtC60LDRjywgNDAsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1551088429720" width="960" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</footer>
	<div id="scroller" class="b-top" style="display: none;">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.064 26.064"><path d="M24.87 14.261l-8.643-8.869c-.765-.767-1.691-1.223-2.691-1.223v-.067h-.623c-1.096 0-2.121.49-2.885 1.256l-8.834 8.868a4.107 4.107 0 0 0 0 5.79l.737.746c.768.77 1.793 1.197 2.886 1.197s2.117-.422 2.887-1.19l5.328-5.327 5.328 5.328c.77.77 1.794 1.193 2.887 1.193s2.118-.424 2.887-1.193l.736-.736a4.086 4.086 0 0 0 0-5.773zm-1.414 4.358l-.737.737c-.403.405-.938.606-1.472.606s-1.067-.201-1.473-.606l-6.742-6.742-6.742 6.742a2.072 2.072 0 0 1-1.473.606 2.079 2.079 0 0 1-1.473-.606l-.736-.737a2.085 2.085 0 0 1 0-2.944l8.836-8.836a2.068 2.068 0 0 1 1.588-.597 2.067 2.067 0 0 1 1.589.597l8.835 8.836c.81.81.81 2.135 0 2.944z" fill="#fff"/></svg>
	</div>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
