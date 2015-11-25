<?php
/**
 * hotelalpi functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hotelalpi
 */

add_theme_support( 'menus' );
	// create menu
	function register_theme_menus() {
		register_nav_menus(
			array(
				'upper-menu' => __('Upper Menu', 'hotelalpi'),
				'bottom-menu' => __('Bottom Menu', 'hotelalpi'),
				'room-menu' => __('Rooms Menu', 'hotelalpi'),
				'footer-explore' => __('Footer Explore', 'hotelalpi'),
        		'main-footer' => __('Main Footer', 'hotelalpi')
		));
}

add_action('init', 'register_theme_menus');

add_action( 'init', 'room_post_type' );
add_action( 'init', 'event_post_type' );

function room_post_type() {
	register_post_type( 'rooms',
		array(
			'labels' => array(
				'name' => __( 'Rooms' ),
				'singular_name' => __( 'Room' ),
				'add_new' => _x( 'Add New', 'room' ),
			),
			'public' => true,
			'taxonomies' => array('post_tag', 'category'),
			'supports' => array(  'title', 'editor', 'thumbnail', 'excerpt', 'comments'  ),
		)
	);
}

function event_post_type() {
	register_post_type( 'events',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' ),
				'add_new' => _x( 'Add New', 'event' ),
			),
			'public' => true,
			'taxonomies' => array('category'),
			'supports' => array(  'title', 'editor', 'thumbnail', 'excerpt', 'comments'  ),
		)
	);
}


if ( ! function_exists( 'hotelalpi_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hotelalpi_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hotelalpi, use a find and replace
	 * to change 'hotelalpi' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hotelalpi', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'hotelalpi' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hotelalpi_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // hotelalpi_setup
add_action( 'after_setup_theme', 'hotelalpi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hotelalpi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hotelalpi_content_width', 640 );
}
add_action( 'after_setup_theme', 'hotelalpi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hotelalpi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hotelalpi' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hotelalpi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 


function hotelalpi_scripts() {
	wp_enqueue_style( 'hotelalpi-style', get_stylesheet_uri() );
	wp_deregister_script('jquery');
	wp_enqueue_style( 'ionic', 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
	wp_enqueue_style( 'tooltipster', 'https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/bower_components/animate.css/animate.min.css');
	wp_enqueue_style( 'booking-hermes-css', get_template_directory_uri() . '/layouts/booking-default.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/layouts/main.css');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.1.4.min.js');
	wp_enqueue_script('moment-js', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.min.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js');
	wp_enqueue_script('wow', get_template_directory_uri() . '/bower_components/wow/dist/wow.min.js');
	wp_enqueue_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js');
	wp_enqueue_script('booking-hermes-js', get_template_directory_uri() . '/js/booking-default.js');
	wp_enqueue_script('tooltipster-js', 'https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js');
	
	wp_enqueue_script( 'hotelalpi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array(), '20120206', true );

	wp_enqueue_script( 'hotelalpi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hotelalpi_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
