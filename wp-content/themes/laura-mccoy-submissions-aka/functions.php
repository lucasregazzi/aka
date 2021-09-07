<?php
/**
 * Laura McCoy Submissions AKA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Laura_McCoy_Submissions_AKA
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'laura_mccoy_submissions_aka_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function laura_mccoy_submissions_aka_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Laura McCoy Submissions AKA, use a find and replace
		 * to change 'laura-mccoy-submissions-aka' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'laura-mccoy-submissions-aka', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'laura-mccoy-submissions-aka' ),
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
				'laura_mccoy_submissions_aka_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'laura_mccoy_submissions_aka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function laura_mccoy_submissions_aka_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'laura_mccoy_submissions_aka_content_width', 640 );
}
add_action( 'after_setup_theme', 'laura_mccoy_submissions_aka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function laura_mccoy_submissions_aka_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'laura-mccoy-submissions-aka' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'laura-mccoy-submissions-aka' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'laura_mccoy_submissions_aka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function laura_mccoy_submissions_aka_scripts() {
	wp_enqueue_style( 'laura-mccoy-submissions-aka-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css');

	wp_style_add_data( 'laura-mccoy-submissions-aka-style', 'rtl', 'replace' );

	wp_enqueue_script( 'laura-mccoy-submissions-aka-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'laura_mccoy_submissions_aka_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function add_submissions_form() {

	$labels = array(
		'name'                  => _x( 'Submissions Form', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Submissions Form', 'Post Type Singular Name', 'text_domain' ),
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category'),
		'supports'              => array( 'editor' ),
		'public'                => true,
		'menu_icon'           => 'dashicons-info-outline',
	);
	register_post_type( 'submissions_form', $args );

}

add_action( 'init', 'add_submissions_form', 0 );
