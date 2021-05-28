<?php

/**
 * Baam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Baam
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.5');
}

if (!function_exists('baam_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function baam_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Baam, use a find and replace
		 * to change 'baam' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('baam', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'baam'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'baam_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'baam_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function baam_content_width()
{
	$GLOBALS['content_width'] = apply_filters('baam_content_width', 1140);
}
add_action('after_setup_theme', 'baam_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function baam_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'baam'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'baam'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'baam_widgets_init');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 * Enqueue scripts and styles.
 */
function baam_scripts()
{

	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');

	wp_enqueue_style('baam-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), false);
	wp_enqueue_style('baam-gfonts', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;1,400&family=Source+Serif+Pro:wght@400;600&display=swap', array(), false);
	wp_enqueue_style('baam-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('baam-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), false);
	wp_enqueue_style('baam-css', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION);

	//wp_style_add_data('baam-style', 'rtl', 'replace');

	if (!is_admin()) {
		wp_deregister_script('wp-embed');
		wp_deregister_script('wp-emoji');
	}

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), false, false);
	wp_deregister_script('jquery-migrate');
	wp_register_script('jquery-migrate', "https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.2.0/jquery-migrate.min.js", array('jquery'), false, false);
	wp_enqueue_script('baam-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), false, true);
	wp_enqueue_script('baam-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), false, true);
	wp_enqueue_script('baam-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true);
	//wp_enqueue_script('baam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	//wp_enqueue_script('baam-scripts', 'https://kit.fontawesome.com/7acc43e0e6.js', array(), false, false);

	// if (is_singular() && comments_open() && get_option('thread_comments')) {
	// 	wp_enqueue_script('comment-reply');
	// }
}
add_action('wp_enqueue_scripts', 'baam_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}