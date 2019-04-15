<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v18
 */

get_header('page');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section class="heading">
                <div class="heading__wrap">
                    <h2 class="heading__title">События</h2>
                    <p class="heading__logo">XVIII <span class="dot">.</span></p>
                </div>
            </section>

            <section class="calendar">
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
//		$today = getdate();
//		$query = new WP_Query( 'year=' . $today["year"]);

        if ( have_posts() ) :?>
            <h3 class="events__subtitle">События за <span>все</span> годы:</h3>
	        <?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-events', get_post_type() );

			endwhile;

			the_posts_navigation();

            else :

                get_template_part( 'template-parts/content-events', 'none' );

            endif;
            ?>

                    </ul>
                </div>
            </section>

    <p class="events__paragraph paragraph">&sect;5</p>
<?php
get_footer('all');
