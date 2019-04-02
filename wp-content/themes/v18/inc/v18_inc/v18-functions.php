<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * Custom functions for 'v18' theme.
 * Функции для темы "Русский 18 век."
 *
 * @package v18
 */

/**
 * Creat post-type Members
 *
 */

function v18_create_post_type() {
//	register_post_type( 'members',
//
//		array(
//			'labels' => array(
//				'name' => __('Участники'),
//				'singular_name' => __('Участник'),
//				'add_new' => __('Добавить участника'),
//				'add_new_item' => __('Добавление нового участника'),
//				'edit_item' => __('Редактировать профиль участника'),
//				'new_item' => __('Новый участник'),
//
//			),
//			'label' => 'members',
//			'public' => true,
//			'has_archive' => true,
//			'menu_position' => 5,
//			'menu_icon'   => 'dashicons-businessman',
//			'rewrite' => array(
//				'slug' => 'members'
//			),
//			'supports' => array(
//				'title',
//				'editor',
//				'page-attributes',
//				'thumbnail',
//				'custom-fields',
//				'post-formats'
//			),
//			'show_in_rest' => true,
//		)
//	);
	// create a new taxonomy
	register_taxonomy(
		'v18-year',
		'post',
		array(
			'label' => __( 'Year' ),
			'name' => __( 'Years' ),
			'singular name' => __( 'Year' ),
			'all_items' => __('All years'),
			'edit_item' => __('Edit value'),
			'add_new_item' => __('Add year'),
			'view_item' => __('View value'),

			'rewrite' => array( 'slug' => 'year' ),
			'hierarchical' => true,
			'show_in_rest' => true,
			'sort' => true,
		)
	);
}
add_action( 'init', 'v18_create_post_type' );

add_filter('nav_menu_css_class' , 'v18_special_nav_class' , 10 , 2);

function v18_special_nav_class ($classes, $item) {
	if (in_array('current-post-ancestor', $classes) || in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
		$classes[] = 'myAactive ';
	}
	return $classes;
}

