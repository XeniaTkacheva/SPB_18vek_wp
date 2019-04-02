<?php
/**
 * Template name: Publications Template
 */

get_header('page');
?>

	<section class="heading">
		<div class="heading__wrap">
			<h2 class="heading__title heading__title--publications">Публикации</h2>
			<p class="heading__logo">XVIII <span class="dot">.</span></p>
		</div>
	</section>

	<section class="publications">
		<div class="publications__wrapper">
			<ul class="publications__list default-list">

				<li class="publications__item">
					<a href="#" class="publications__link">
						<h3 class="publications__group">
							Сборники статей
						</h3>
					</a>
				</li>
				<li class="publications__item">
					<a href="#" class="publications__link">
						<h3 class="publications__group">
							Энциклопедии и&nbsp;словари
						</h3>
					</a>
				</li>
				<li class="publications__item">
					<a href="#" class="publications__link">
						<h3 class="publications__group">
							Монографии
						</h3>
					</a>
				</li>
				<li class="publications__item">
					<a href="#" class="publications__link">
						<h3 class="publications__group">
							Библиографические издания
						</h3>
					</a>
				</li>
				<li class="publications__item">
					<a href="#" class="publications__link">
						<h3 class="publications__group">
							Учебные издания
						</h3>
					</a>
				</li>
				<li class="publications__item">
					<a href="#" class="publications__link">
						<h3 class="publications__group">
							Рецензии на&nbsp;публикации
						</h3>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<p class="publications__paragraph paragraph">&sect;11</p>

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
