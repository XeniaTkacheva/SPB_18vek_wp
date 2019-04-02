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

	                <?php
	                global $query_string;
	                query_posts($query_string . "&order=ASC");
	                wp_nav_menu( array(
			                'theme_location' => 'calendar-menu',
			                'menu_id'        => 'calendar',
			                'menu_class'     => 'calendar__list default-list',
                            'fallback_cb'  => '',
		                )
	                );
	                ?>
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

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('all');
