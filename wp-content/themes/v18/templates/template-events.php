<?php
/**
 * Template Name: Events Template
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v18
 */

get_header('page');
?>

	<section id="head" class="heading">
		<div class="heading__wrap">
			<h2 class="heading__title">События</h2>
			<p class="heading__logo">XVIII <span class="dot">.</span></p>
		</div>
	</section>

	<section id="calendar" class="calendar">
		<h2 class="visually-hidden">Календарь событий по годам</h2>
		<div class="calendar__wrapper">
            <div class="calendar__arrows">
                <div class="calendar__box">

                    <?php

                    wp_nav_menu( array(
                            'theme_location' => 'calendar-menu',
                            'container' => '',
                            'menu_id'        => 'calendar',
                            'menu_class'     => 'calendar__list default-list',
                            'fallback_cb'  => '',
                        )
                    );
                    ?>
                </div>
                <div class="calendar__nav calendar__nav--prev">&#8592;</div>
                <div class="calendar__nav calendar__nav--next">&#8594;</div>
            </div>
		</div>
	</section>

	<section class="events">
		<div class="events__wrapper">
			<ul class="events__list default-list">
				<?php
				$metas = get_post_meta( $post->ID );
				if ( isset( $metas['Год'] ) ) {
					$year = 'year-' . $metas['Год'][0];
					} else {
					$year = 'sobytiya';
				}

				/* Start the Loop */
				$query = new WP_Query( 'category_name=' . $year);

                if ( $query->have_posts() ) : ?>
                <h3 class="events__subtitle">События <span><?php echo $metas['Год'][0]; ?></span> года:</h3>
				<?php
				else: ?>
                <h3 class="events__subtitle events__subtitle--small">Не найдено событий <span><?php echo $metas['Год'][0]; ?></span> года.</h3>

				<?php
				endif;

				while ( $query->have_posts() ) :
					$query->the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content-events', get_post_type() );

					endwhile;
					wp_reset_postdata();
				?>

			</ul>
		</div>
	</section>

	<p class="events__paragraph paragraph">&sect;5</p>
<?php
get_footer('all');
