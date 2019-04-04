<?php
/**
 * The template for displaying all single posts
 *
 * Шаблон одиночного поста
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

                <?php

                wp_nav_menu( array(
                        'theme_location' => 'calendar-menu',
                        'menu_id'        => 'calendar',
                        'menu_class'     => 'calendar__list default-list',
                        'fallback_cb'  => '',
                    )
                );
                ?>
            </div>
        </section>
       <section class="post">
        <div class="post__wrapper">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-page', get_post_type() );

//			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>
            </div>
        </section>
<?php
get_footer('all');
