<?php
/**
 * Template name: Methods Template
 */

get_header('page');
?>
	<section class="heading">
		<div class="heading__wrap">
			<h2 class="heading__title heading__title--methods">Учебно-методические комплексы</h2>
			<p class="heading__logo">XVIII <span class="dot">.</span></p>
		</div>
	</section>

	<section class="methods">
		<div class="methods__wrapper">

			<ul class="methods__list default-list">

				<li id="method1" class="methods__item methods__item--current">
					<span class="methods__number">1.</span>
					<div class="methods__profile default-list">
						<p class="methods__authors">Бухаркин&nbsp;П.&nbsp;Е., Гуськов&nbsp;Н.&nbsp;А., Матвеев&nbsp;Е.&nbsp;М., Пономарева&nbsp;М.&nbsp;В., Руднев&nbsp;Д.&nbsp;В., Тверьянович&nbsp;К.&nbsp;Ю., Тираспольская&nbsp;А.&nbsp;Ю.</p>
						<h3 class="methods__title">«История русской литературы и культуры XVIII века» на основе лекций проф. П.&nbsp;Е.&nbsp;Бухаркина.</h3>
						<a href="<?php echo esc_url('https://18vek.spb.ru/methods/umk1'); ?>" class="methods__link button">Подробнее</a>
					</div>
				</li>
				<li id="method2" class="methods__item methods__item--current">
					<span class="methods__number">2.</span>
					<div class="methods__profile default-list">
						<p class="methods__authors">Бухаркин&nbsp;П.&nbsp;Е., Гуськов&nbsp;Н.&nbsp;А., Матвеев&nbsp;Е.&nbsp;М., Пономарева&nbsp;М.&nbsp;В., Тверьянович&nbsp;К.&nbsp;Ю., Тираспольская&nbsp;А.&nbsp;Ю.</p>
						<h3 class="methods__title">«История русской литературы XVIII века» для сетевого и дистанционного обучения на интернет портале «Вузовская русистика» (в системе дистанционного обучения Sakai, sakai.spbu.ru)</h3>
						<a href="<?php echo esc_url('https://18vek.spb.ru/methods/umk2'); ?>" class="methods__link button">Подробнее</a>
					</div>
				</li>
				<li id="method4" class="methods__item methods__item--current">
					<span class="methods__number">3.</span>
					<div class="methods__profile default-list">
						<p class="methods__authors"> Бухаркин&nbsp;П.&nbsp;Е., Гуськов&nbsp;Н.&nbsp;А., Матвеев&nbsp;Е.&nbsp;М., Пономарева&nbsp;М.&nbsp;В., Тираспольская&nbsp;А.&nbsp;Ю.</p>
						<h3 class="methods__title">Лекции к онлайн-курсу «Русская литература XVIII века: пути развития и культурно-исторический контекст».</h3>
						<a href="<?php echo esc_url('https://18vek.spb.ru/methods/umk3'); ?>" class="methods__link button">Подробнее</a>
					</div>
				</li>

			</ul>
			<div class="methods__picture">
				<picture>
					<img class="methods__image" src="<?php echo esc_url( V18_IMG_DIR . '/'); ?>image3@1x.jpg" srcset="<?php echo esc_url( V18_IMG_DIR . '/'); ?>image3@2x.jpg 2x" alt="Гравюра" width="353" height="513">
				</picture>
			</div>


		</div>
	</section>
	<p class="methods__paragraph paragraph">&sect;10</p>
<?php
while ( have_posts() ) :
	the_post(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'v18' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'v18' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php		// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>


<?php
get_footer('all');

