<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package v18
 */

get_header('page');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="wp-page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'v18' ); ?></h1>
				</header><!-- .wp-page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Похоже, что ничего не было найдено в этом месте. Может быть, попробуйте одну из ссылок ниже или поиск?', 'v18' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Популярные категории', 'v18' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
//					$v18_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'v18' ), convert_smilies( ':)' ) ) . '</p>';
//					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$v18_archive_content" );
//
//					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer('all');
