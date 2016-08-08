<?php
/**
 * Sensyne functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sensyne
 */

if ( ! function_exists( 'sensyne_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sensyne_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sensyne, use a find and replace
	 * to change 'sensyne' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sensyne', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in two locations....
	register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'sensyne' ),
            'footer' => esc_html__( 'Footer', 'sensyne' ),
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
	add_theme_support( 'custom-background', apply_filters( 'sensyne_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'sensyne_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sensyne_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sensyne_content_width', 640 );
}
add_action( 'after_setup_theme', 'sensyne_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function sensyne_scripts() {
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
    
    wp_enqueue_style( 'sensyne-style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'sensyne-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'sensyne-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
    }
    
}
add_action( 'wp_enqueue_scripts', 'sensyne_scripts' );

/**
 * Bootstrap navigation
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

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

/**
 * Hide admin bar.
 */
add_filter('show_admin_bar', '__return_false');

/* Custom content types */

function register_custom_posts_init() {

    // Register Technologies
    $cpt_labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'menu_name' => 'Products',
        'add_new_item' => 'Add New Product',
        'edit_item' => 'Edit Product',
        'new_item' => 'New Product',
        'view_item' => 'View Product',
        'search_items' => 'Search Products',
        'not_found' => 'No Products found',
        'not_found_in_trash' => 'No Products found in Trash'
    );
    $cpt_args = array(
        'labels'            => $cpt_labels,
        'public'            => true,
        'capability_type'   => 'post',
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'products'),
        'supports' => array('title', 'editor', 'revisions', 'thumbnail'),
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-screenoptions'
    );
    register_post_type('products', $cpt_args);
    
    // Register Solutions
    $cpt_labels = array(
        'name' => 'Solutions',
        'singular_name' => 'Solution',
        'menu_name' => 'Solutions',
        'add_new_item' => 'Add New Solution',
        'edit_item' => 'Edit Solution',
        'new_item' => 'New Solution',
        'view_item' => 'View Solution',
        'search_items' => 'Search Solutions',
        'not_found' => 'No Solutions found',
        'not_found_in_trash' => 'No Solutions found in Trash'
    );
    $cpt_args = array(
        'labels'            => $cpt_labels,
        'public'            => true,
        'capability_type'   => 'post',
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'solutions'),
        'supports' => array('title', 'editor', 'revisions', 'thumbnail'),
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-admin-generic'
    );
    register_post_type('solutions', $cpt_args);
    
    // Register Technology
    $cpt_labels = array(
        'name' => 'Technology',
        'singular_name' => 'Technology',
        'menu_name' => 'Technology',
        'add_new_item' => 'Add New Technology',
        'edit_item' => 'Edit Technology',
        'new_item' => 'New Technology',
        'view_item' => 'View Technology',
        'search_items' => 'Search Technology',
        'not_found' => 'No Technology found',
        'not_found_in_trash' => 'No Technology found in Trash'
    );
    $cpt_args = array(
        'labels'            => $cpt_labels,
        'public'            => true,
        'capability_type'   => 'post',
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'technology'),
        'supports' => array('title', 'editor', 'revisions', 'thumbnail'),
        'taxonomies' => array('category'),
        'menu_icon' => 'dashicons-admin-generic'
    );
    register_post_type('technology', $cpt_args);
    
    /* Remove for production */
    
    flush_rewrite_rules();
    
}

add_action('init', 'register_custom_posts_init');
