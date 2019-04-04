<?php
/**
 * Template part for displaying Events posts
 *
 * Часть шаблона для вывода на экран содержания События
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v18
 */

?>
<li class="events__item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header visually-hidden">
			<?php
//			if ( is_singular() ) :
//				the_title( '<h1 class="entry-title">', '</h1>' );
//			else :
//				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					v18_posted_on();
					v18_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

<!--	--><?php //v18_post_thumbnail(); ?>

		<ul class="entry-content events__profile default-list">
			<?php $metas = get_post_meta( $post->ID ); ?>

			<li class="events__date">
				<span><?php echo get_post_field('Даты');  ?>
				</span>
<!--                <span>--><?php //if( isset($metas['Даты']) ){
//					echo $metas['Даты'][0];};  ?>
<!--				</span>-->
				<?php echo get_post_field('Месяц-или-Период');  ?>

<!--                --><?php //if( isset($metas['Месяц-или-Период']) ){
//					echo $metas['Месяц-или-Период'][0];};  ?>
			</li>

            <li class="events__about">
                <div class="events__column">
<!--                    <h3 class="events__name visually-hidden">Название события</h3>-->
<!--                    <p class="events__text">--><?php //if( isset($metas['Текст события']) ){
//		                    echo $metas['Текст события'][0];};  ?><!--</p>-->
<!--                    <p class="events__text">С докладом «Французский язык в дореволюционной России» выступил научный сотрудник Немецкого исторического института в Москве Владислав Ржеуцкий. В рамках доклада состоялась презентация книги: Offord&nbsp;D., Rjе́outski&nbsp;V., Argent&nbsp;G. The French Language in Russia. A.&nbsp;Social, Cultural, and Literary History. Amsterdam, 2018.</p>-->
	                <?php

	                the_content( sprintf(
		                wp_kses(
		                /* translators: %s: Name of current post. Only visible to screen readers */
			                __( 'Читать далее<span class="screen-reader-text"></span>', 'v18' ),
			                array(
				                'span' => array(
					                'class' => array(),
				                ),
			                )
		                ),
		                get_the_title()
	                ) );

//	                wp_link_pages( array(
//		                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'v18' ),
//		                'after'  => '</div>',
//	                ) );
	                ?>
                </div>

                <a href="<?php echo get_post_field('Ссылка на скачивание');  ?>" class="events__details"><?php echo get_post_field('Текст ссылки');  ?></a>
            </li>
            <li class="events__photo">

                <a href="<?php echo get_permalink($post->ID); ?>" class="events__link">
                    <?php v18_post_thumbnail(); ?>
<!--                    <picture>-->
<!--                        <img class="events__image" src="img/events_pic/2018-11-14_1@1x.jpg" alt="Фото: Заседание семинара" width="364" height="264">-->
<!--                    </picture>-->
                </a>
            </li>

		</ul><!-- .entry-content -->

<!--		<footer class="entry-footer">-->
<!--			--><?php //v18_entry_footer(); ?>
<!--		</footer>-->

	</article><!-- #post-<?php the_ID(); ?> -->
</li>