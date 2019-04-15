<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v18
 */

get_header('page');
?>
		<?php if ( have_posts() ) : ?>

<!--			<header class="wp-page-header">-->
<!--				--><?php
//
//				the_archive_title( '<h1 class="page-title">', '</h1>' );
//				the_archive_description( '<div class="archive-description">', '</div>' );
//				?>
<!--			</header> .wp-page-header -->
			<?php
$my = get_posts(array('year' => 2019));
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



<?php
get_footer('all');
