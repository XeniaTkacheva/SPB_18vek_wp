<?php
/**
 * The template for displaying archive events
 * Шаблон для страницы Событий
 *
 * Шавлон для вывода страницы всех событий семинара
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v18
 */

get_header('page');
?>
	<section class="heading">
		<div class="heading__wrap">
			<h2 class="heading__title">События</h2>
			<p class="heading__logo">XVIII <span class="dot">.</span></p>
		</div>
	</section>
	<section class="calendar">
		<h2 class="visually-hidden">Календарь событий по годам</h2>
		<div class="calendar__wrapper">
			<ul class="calendar__list default-list">
				<li class="calendar__item"><a href="#" class="calendar__link">2019</a></li>
				<li class="calendar__item calendar__item--current"><a href="#" class="calendar__link calendar__link--current">2018</a></li>
				<li class="calendar__item"><a href="#" class="calendar__link">2017</a></li>
				<li class="calendar__item"><a href="#" class="calendar__link">2016</a></li>
				<li class="calendar__item"><a href="#" class="calendar__link">2015</a></li>
				<li class="calendar__item"><a href="#" class="calendar__link">2014</a></li>
				<li class="calendar__item"><a href="#" class="calendar__link">2013</a></li>
				<li class="calendar__item"><a href="#" class="calendar__link"><span class="visually-hidden">Дальше</span>&#8594;</a></li>
			</ul>
		</div>
	</section>

	<section class="events">
		<div class="events__wrapper">
			<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</section>

<?php
get_footer('all');