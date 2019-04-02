<?php
/**
 * v18 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package v18
 */

if ( ! function_exists( 'v18_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function v18_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on v18, use a find and replace
		 * to change 'v18' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'v18', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'top-menu' => esc_html__( 'Primary', 'v18' ),
			'footer-menu' => esc_html__( 'In_footer', 'v18' ),
			'calendar-menu' => esc_html__( 'Calendar_events', 'v18' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'v18_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'v18_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function v18_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'v18_content_width', 640 );
}
add_action( 'after_setup_theme', 'v18_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function v18_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'v18' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'v18' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'v18_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
define('V18_THEME_ROOT', get_template_directory_uri());
define('V18_CSS_DIR', V18_THEME_ROOT . '/assets/css');
define('V18_JS_DIR', V18_THEME_ROOT . '/assets/js');
define('V18_IMG_DIR', V18_THEME_ROOT . '/assets/img');
define('V18_FONTS_DIR', V18_THEME_ROOT . '/assets/fonts');

function v18_scripts() {
	wp_enqueue_style( 'v18-style', V18_CSS_DIR . '/style.min.css');

	wp_enqueue_script( 'v18-navigation', V18_JS_DIR . '/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'v18-skip-link-focus-fix', V18_JS_DIR . '/skip-link-focus-fix.js', array(), '20151215', true );


	wp_enqueue_script( 'v18-picture-js', V18_JS_DIR . '/picturefill.min.js', array(), '1.0.0', true );

	wp_enqueue_script( 'v18-js', V18_JS_DIR . '/main.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'v18_scripts' );

/**
 * Implement the Custom Header feature for underscore template..
 */
require get_template_directory() . '/inc/z_inc_underscore/custom-header.php';

/**
 * Custom template tags for this theme for underscore template..
 */
require get_template_directory() . '/inc/z_inc_underscore/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress for underscore template..
 */
require get_template_directory() . '/inc/z_inc_underscore/template-functions.php';

/**
 * Customizer additions for underscore template.
 */
require get_template_directory() . '/inc/z_inc_underscore/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/z_inc_underscore/jetpack.php';
}

/**
 * Custom functions for 'v18' theme.
 * Функции для темы "Русский 18 век."
 */
require get_template_directory() . '/inc/v18_inc/v18-functions.php';



