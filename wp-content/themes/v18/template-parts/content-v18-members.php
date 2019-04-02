<?php
/**
 * The template for displaying archive members
 *
 * Шавлон для вывода страницы всех участников семинара
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v18
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
		if ( is_singular() ) :
			the_title( '<h1 class="visually-hidden">', '</h1>' );
		else :
			the_title( '<h2 class="visually-hidden entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>

		<?php endif; ?>
<!--	<?php //v18_post_thumbnail(); ?>-->

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

	<footer class="entry-footer">
		<?php v18_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

