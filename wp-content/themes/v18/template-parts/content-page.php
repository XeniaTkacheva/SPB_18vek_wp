<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v18
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <div class="post__date">
				<span><?php echo get_post_field('Даты');  ?>
				</span>
        <!--                <span>--><?php //if( isset($metas['Даты']) ){
		//					echo $metas['Даты'][0];};  ?>
        <!--				</span>-->
		<?php echo get_post_field('Месяц-или-Период');  ?>

        <!--                --><?php //if( isset($metas['Месяц-или-Период']) ){
		//					echo $metas['Месяц-или-Период'][0];};  ?>
    </div>
	<?php v18_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'v18' ),
			'after'  => '</div>',
		) );
		?>
        <a href="<?php echo get_post_field('Ссылка на скачивание');  ?>" class="events__details"><?php echo get_post_field('Текст ссылки');  ?></a>

    </div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer visually-hidden">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'v18' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
